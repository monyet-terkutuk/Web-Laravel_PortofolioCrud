<?php

namespace App\Http\Controllers;

use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;

class authController extends Controller
{
    function index()
    {
        return view('auth.index');
    }

    function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    function callback()
    {
        $user = Socialite::driver('google')->user();
        $id = $user->id;
        $name = $user->name;
        $email = $user->email;

        $cek = User::where('email', $email)->count();
        if ($cek > 0) {
            $user = User::updateOrCreate(
                ['email' => $email],
                [
                    'google_id' => $id,
                    'name' => $name
                ]
            );
            return "Selamat Datang";
        } else {
            return redirect('auth')->with('error', 'Maaf anda tidak di ijinkan masuk!');
        }


        // $user->token
    }
}
