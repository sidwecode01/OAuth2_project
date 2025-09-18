<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class SocialiteAuthController extends Controller
{
    // Liste des providers autorisés
    protected $allowedProviders = ['github', 'google', 'twitter'];

    // Redirection vers le provider OAuth
    public function redirect(string $provider)
    {
        if (!in_array($provider, $this->allowedProviders)) {
            return response()->json(['error' => 'Provider invalide'], 400);
        }

        return Socialite::driver($provider)->redirect();
    }

    // Callback après authentification OAuth
    public function callback(string $provider)
    {
        if (!in_array($provider, $this->allowedProviders)) {
            return response()->json(['error' => 'Provider invalide'], 400);
        }

        try {
            // Utiliser stateless() pour API sans session
            $socialiteUser = Socialite::driver($provider)->stateless()->user();


            // Créer ou récupérer l'utilisateur
            $user = User::updateOrCreate(
                ['email' => strtolower($socialiteUser->getEmail())],
                [
                    'name' => $socialiteUser->getName() ?? $socialiteUser->getNickname(),
                    'password' => Hash::make(time()),
                   'provider' => $provider
                ]
            );

            // Authentifier l'utilisateur
            Auth::login($user);

            // return response()->json(['user' => $user]);
            
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Échec du callback OAuth',
                'message' => $e->getMessage()
            ], 500);
        }
    }


}
