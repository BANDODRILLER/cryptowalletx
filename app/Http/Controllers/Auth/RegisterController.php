<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        // Generate a random string of length 10
        $randomString = Str::random(10);
        // Get the base URL from the application config
        $appUrl = config('app.url');

        // Construct the URL for the current registration link with a random string
        $mylink = $appUrl . '/register?reflink=' . $randomString;

        // Access the current request object
        $request = request();

        // Get the current URL using the URL facade
        $currentUrl = URL::current();
        $previousUrl = url()->previous();


        // Create a new user record in the database
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'mylink' => $mylink, // Save the current registration link
            'refereelink' => $previousUrl, // Save the referring user's registration link
        ]);

        return $user;
    }


}
