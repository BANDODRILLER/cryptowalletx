<?php

namespace App\Http\Controllers;

use App\Models\MpesaDeposit;
use App\Models\MpesaTransactions;
use App\Models\MpesaWithdraw;
use App\Models\User;
use App\Models\WithdrawTransact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function mpesatransaction()
    {
        $transaction = MpesaTransactions::all();
        return view('admin.mpesatransaction', compact('transaction') );
    }
    public function fixaccount(Request $request)
    {
        $depo_id = $request ->query('id');
        $user_id = $request->query('user_id');

        $amountone = $request->query('amount');
        $amount = $amountone * 0.946666667;



        // Update user's balance
        $user = User::find($user_id);
        $user->money += $amount; // add
        $user->save();

        $depo = new MpesaDeposit();
        $depo -> user_id = $user_id;
        $depo -> amount = $request->amount;

        $depo->save();

        // Update user's balance
        $user = MpesaTransactions::find($depo_id);
        $user->status = 1; // add
        $user->save();

        Alert::success('Succcess', 'User account updated succesfully');
        return redirect()->back();
    }
    public function fixaccountded(Request $request)
    {
        $withdraw_id = $request->query('id');
        $user_id = $request->query('user_id');
        $amountkes = $request->query('amount');
        $amount = $amountkes * 169 ;

        // Find the user
        $user = User::find($user_id);

        // Check if the user exists
        if (!$user) {
            Alert::error('Error', 'User not found');
            return redirect()->back();
        }

        // Check if the user has enough money
        if ($user->money < $amount) {
            Alert::error('Error', 'Insufficient funds');

            // Update user's balance
            $user = MpesaWithdraw::find($withdraw_id);
            $user->status = 2; // add
            $user->save();

            return redirect()->back();
        }

        // Update user's balance
        $user->money -= $amount;
        $user->save();

        $withdraw = new WithdrawTransact();

        $withdraw -> user_id = $user_id;
        $withdraw -> amount = $amountkes;

        $withdraw ->save();

        // Update user's balance
        $user = MpesaWithdraw::find($withdraw_id);
        $user->status = 1; // add
        $user->save();





        Alert::success('Success', 'User account updated successfully');
        return redirect()->back();
    }

    public function removingcash()
    {
        $transaction = MpesaWithdraw::all();

        return view('admin.removingcash', compact('transaction'));
    }
    public function cancelfixaccount(Request $request)
    {
        $depo_id = $request ->query('id');
        // Update user's balance
        $user = MpesaTransactions::find($depo_id);
        $user->status = 2; // add
        $user->save();

        Alert::warning('Cancelled', 'Fraud transaction rejected');
        return redirect()->back();


    }
}
