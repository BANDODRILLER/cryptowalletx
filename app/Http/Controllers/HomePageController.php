<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\MpesaDeposit;
use App\Models\MpesaTransactions;
use App\Models\MpesaWithdraw;
use App\Models\Purchases;
use App\Models\User;
use App\Models\WithdrawTransact;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class HomePageController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $usernumber = User::all()->count();
        $capital = User::all()->pluck('money')->sum();
        $dollarcap = $capital * 0.00625;
        $usablekes = Purchases::all()->pluck('pur')->sum();
        $usable = $usablekes * 0.00625;
        $user_type = optional($user)->user_type;
        $totcapkes = MpesaDeposit::all()->pluck('amount')->sum();
        $totcap = $totcapkes *0.00625;
        $order = Purchases::all();


        $viewPage = $user_type == '1' ? 'admin.adminpage' : 'home.userpage';
        return view($viewPage, compact('dollarcap','usable', 'usernumber', 'totcap', 'order'));
    }
    public function recharge()
    {
        $balance = User::where('id', Auth::id())->value('amount');

        return view('home.recharge', compact('balance'));
    }
    public function mpesa(Request $request)
    {
        $name = Auth::user()->name;


        $amount = $request->query('amount');



        return view('home.mpesa', compact('amount', 'name'));
    }
    public function withdrawmpesa()
    {
        return view('home.withdrawmpesa');
    }

    public function services()
    {
        return view('home.services');
    }
    public function invite()
    {
        $id = Auth::id();
        $link = User::where('id', $id)->value('mylink');
        return view('home.invite', compact('link'));
    }

    public function productdetail(Request $request)
    {
        $name = $request->query('name');
        $invite = $request->query('invite');
        $img = $request ->query('img');
        $imageUrl =  $img;

        $totrevcy = $request->query('totrevcy');
        $dyin = $request ->query('dyin');
        $totin = $request ->query('totin');
        $retrate = $request ->query('retrate');
        $totretrate = $request ->query('totretrate');
        $mspr  = $request -> query('mspr ');
        $pur = $request->query('pur');




        return view('home.productdetail', compact('name', 'invite', 'imageUrl', 'totrevcy', 'dyin', 'totin', 'retrate', 'totretrate','mspr','pur'));
    }

    public function personal()
    {
        $id = Auth::id();
        $unique = User::where('id', Auth::id())->value('mylink');
        $withdrawn= WithdrawTransact::where('user_id', $id)->pluck('amount')->sum();
        // Extracting the desired part from the URL
        $urlParts = parse_url($unique);
        parse_str($urlParts['query'], $query);
        $finalunique = $query['reflink'];


        $balance = User::where('id', Auth::id())->value('amount');
        $earnings = Purchases::where('user_id', Auth::id())->pluck('withdrawn')->sum();
        $assets = Purchases::where('user_id', Auth::id())->where('end', '>', now())
            ->count();

        $depositkes = MpesaDeposit::where('user_id', Auth::id())->pluck('amount')->sum();

        $deposit = $depositkes * 0.00625;


        return view('home.personal', compact('balance', 'id', 'finalunique', 'earnings','assets','withdrawn', 'deposit'));
    }

    public function products()
    {
        return view('home.products');
    }

    public function myproducts($date = null)
    {
        $todayDate = $date ?: Carbon::now()->format('Y-m-d');



        $purchases = Purchases::where('user_id', Auth::id())
            ->whereDate('end', '>=', $todayDate)
            ->get();


        return view('home.myproducts', compact('purchases'));
    }

    public function about()
    {
        return view('home.about');
    }
    public function myteam()
    {
        $myurl = User::where('id', Auth::id())->value('mylink');

        // Check if the URL ends with a slash before the query string
        if (strpos($myurl, '?') !== false && substr($myurl, -1) === '/') {
            // Remove the trailing slash
            $myurl = rtrim($myurl, '/');
        }


        $team = User::where('refereelink', 'LIKE' , $myurl)->count() ;

       $team += 1;

        $id = Auth::id();
        return view('home.myteam',compact('id', 'team'));
    }

    public function purchase(Request $request)
    {
        // Accessing parameters from the URL query string
        $name = $request->query('name');
        $invite = $request->query('invite');
        $img = $request->query('img');
        $totrevcy = $request->query('totrevcy');
        $dyin = $request->query('dyin');
        $totin = $request->query('totin');
        $retrate = $request->query('retrate');
        $totrerate = $request->query('totretrate');
        $mspr = $request->query('mspr');
        $nonpur = $request->query('pur');
        $pur = $nonpur * 169;

        // Check if the user has previously made a purchase with PUR value less than 1200
        $previousPurchasesBelowThreshold = Purchases::where('user_id', Auth::id())
            ->where('pur', '<', 1200)
            ->where('end', '>', now())
            ->exists();

        // Check if the user has already made three entries with PUR value less than 10000
        $entriesBelowLimit = Purchases::where('user_id', Auth::id())
            ->where('pur', '<', 10000)
            ->where('end', '>', now())
            ->count();

        // Enforce the first condition: Threshold Check for Purchase Value (PUR)
        if ($pur < 1200 && $previousPurchasesBelowThreshold) {
            // Display SweetAlert notification
            Alert::error('Error', 'You cannot have two machines whose pricing is below KES 1200.');

            // Return without storing the entry
            return Redirect::to('/myproducts');
        }

        // Enforce the second condition: Limit on Entries with PUR Below 10000
        if ($pur < 10000 && $entriesBelowLimit >= 3) {
            // Display SweetAlert notification
            Alert::error('Error', 'You already have three machines with purchase value less than KES 10000.');

            // Return without storing the entry
            return Redirect::to('/myproducts');
        }

        // Calculating derived values
        $withdrawn = 0; // Assuming a default value for withdrawn
        $available = $totin - $withdrawn;
        $daily = $dyin;
        $balance = 2200; // Assuming a default value for balance

        // Creating a new instance of Purchases model and populating fields
        $new = new Purchases();
        $new->user_id = Auth::id();
        $new->name = $name;
        $new->invite = $invite;
        $new->img = $img;
        $new->totrevcy = $totrevcy;
        $new->dyin = $dyin;
        $new->totin = $totin;
        $new->retrate = $retrate;
        $new->totretrate = $totrerate;
        $new->mspr = $mspr;
        $new->pur = $pur;
        $new->available = $available;
        $new->withdrawn = $withdrawn;
        $new->balance = $balance;

        // Set begin and end dates
        $new->begin = now();
        $new->end = now()->addDays($totrevcy); // Using totrevcy days for end as well

        // Save the new Purchases entry
        $new->save();

        // Update user's balance
        $user = User::find(Auth::id());
        $user->money -= $pur; // Subtract the purchase amount from the user's balance
        $user->save();

        // Display SweetAlert notification for successful addition to cart
        Alert::success('Success', 'Product added to your active products!');

        // Redirect to a view
        return Redirect::to('/myproducts');
    }
    public function depositmpesa(Request $request)
    {
        // Retrieve the current user ID
        $userId = Auth::id();


        // Check if a transaction with the same M-Pesa message exists for the current user
        $existingTransaction = MpesaTransactions::where('user_id', $userId)
            ->where('mpesamessage', $request->message)
            ->first();

        // If an existing transaction is found, notify the user and do not save the transaction
        if ($existingTransaction) {
            Alert::warning('Duplicate Message', 'You have already submitted this M-Pesa message.');
            return Redirect::to('/personal');
        }

        // If no existing transaction is found, proceed to save the new transaction
        $new = new MpesaTransactions();
        $new->user_id = $userId;
        $new->name = $request->name;
        $new->amount = $request->amount;
        $new->mpesamessage = $request->message;
        $new->phone = $request->phone;

        $new->save();




        Alert::success('Checking', 'Your deposit has been submitted for confirmation.');

        return Redirect::to('/personal');
    }

    public function mpesawithdraw(Request $request)
    {
        $name = Auth::user()->name;


        $amount = $request->query('amount');




        return view('home.mpesawithdraw', compact('name', 'amount'));

    }

    public function mpesawithdrawal(Request  $request)
    {
        $id = Auth::id();
        $name = Auth::user()->name;
        $amount = $request->amount;
        $phone = $request->phone;


        $previousPurchasesBelowThreshold = User::where('id', $id)->value('amount');
        $pur = $previousPurchasesBelowThreshold * 0.828402367;

        if ($amount > $pur)  {
            // Display SweetAlert notification
            Alert::error('Error', 'insufficient funds you must include withdrawal fee, try a lesser amount.');

            // Return without storing the entry
            return Redirect::to('/myproducts');
        }




        $withdraw = new MpesaWithdraw();
        $withdraw -> user_id = $id;
        $withdraw -> name = $name;
        $withdraw -> amount = $amount;
        $withdraw -> phone = $phone;

        $withdraw->save();


        Alert::success('Checking', 'Your withdrawal request has been submitted for confirmation  ');

        return Redirect::to('/personal');
    }


    public function transactions()
    {

        $deposit = MpesaDeposit::where('user_id', Auth::id())->get();
        $withdraw = MpesaWithdraw::where('user_id', Auth::id())->get();
        $purchase = Purchases::where('user_id', Auth::id())->get();



        return view('home.transactions', compact('deposit', 'withdraw', 'purchase'));
    }
    public function sendEmail(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        // Send email
        Mail::to('tonnyblair257@gmail.com')->send(new ContactMail($data));

        return redirect()->back()->with('success', 'Message sent successfully!');
    }

    public function congratulations()
    {
        return view('home.congratulations');
    }
    public function redeem(Request $request)
    {
        $code = $request->message;
        $current_code = 'hyTYTTfhjjs';

        // Check if the provided code matches the current code
        if ($code === $current_code) {
            // Code is valid, redirect the page
            $reward = 300;
            $id = Auth::id();


            $user = User::find($id);
            $user -> money += $reward;
            $user -> save();


            Alert::success('Congratulations', 'Reward claimed succesfully ');


            return redirect()->back();
        } else {
            // Code is not valid, handle accordingly (e.g., show an error message)
            Alert::error('Error', 'Please enter a valid code  ');

            return redirect()->back();
        }
    }


}
