<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Enums\Provider;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class SocialiteAuthController extends Controller
{
    //
    public function redirect (Provider $provider){
        
        return Socialite::driver($provider->value)->redirect();
            
             
    }

    public function provider(){
        $provider = Provider::values();
        return response()->json([
            "provider" => $provider,
        ]);
    }

    public function authenticate(){
        try{
            $socialiteUser = Socialite::drive('github')->user();
            $user = User::firstOrCreate(
               [ "email" => strtolower($socialiteUser)],
               ["name" => $socialiteUser->getName(), "password" => Hash::make(time())]
            );

            Auth::login($user);
            // return response()->json([
            //     "user" => $socialiteUser->getName(),
            // ]);

        }catch(Exception $exception){
            return to_route('login')->with('erreur');
        }
    }

  
    
}
