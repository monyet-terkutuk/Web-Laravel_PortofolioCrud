<?php

namespace App\Http\Controllers;

use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

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
        $avatar = $user->avatar;


        $cek = User::where('email', $email)->count();
        if ($cek > 0) {
            $avatar_files = $id . ".jpg";
            $fileContent = file_get_contents($avatar);
            File::put(public_path("admin/images/faces/$avatar_files"), $fileContent);
            $user = User::updateOrCreate(
                ['email' => $email],
                [
                    'google_id' => $id,
                    'name' => $name,
                    'avatar' => $avatar_files
                ]
            );

            Auth::login($user);
            return redirect('dashboard');
        } else {
            return redirect('auth')->with('error', 'Maaf anda tidak di ijinkan masuk!');
        }


        // $user->token
    }

    function logout()
    {
        Auth::logout();
        return redirect('/auth')->with('success', 'Anda berhasil logout, sampai jumpa lagi!');
    }
}
