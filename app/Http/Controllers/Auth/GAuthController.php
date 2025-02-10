<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;




class GAuthController extends Controller
{
    public function redirectgoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googlecallback()
    {
        try {
            $user = Socialite::driver('google')->user();

            $findUser = User::where("google_id", $user->id)->orWhere('email', $user->email)->first();

            if (!is_null($findUser)) {
                Auth::login($findUser);
            } else {
                $findUser =
                    User::create([
                        "name" => $user->name,
                        "email" => $user->email,
                        "google_id" => $user->id,
                        "password" => encrypt("123456")
                    ]);
                Auth::login($findUser);
            }
            return redirect("/");
        } catch (\Throwable $th) {

            return redirect()->route('login')->with('error', 'Error Occurred');
        }
    }
}
