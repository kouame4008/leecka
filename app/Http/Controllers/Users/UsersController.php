<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Socialite;

class UsersController extends Controller
{
    
    /**
     * Connection des utilisateurs
     * 
     * @return JSON  
     */
    public function login() {

        /**
         * 
         * Validation des données requis !
         * 
         */

        $required = ['email_user', 'password_user'];

        for($i=0; $i<count($required); $i++) {

            if(request($required[$i]) == NULL) {
                return response()->json([
                    'status' => 'erreur',
                    'message' => $required[$i].' est requis !'
                ]);
            }

        }

        /**
         * 
         * Effectuer une tentative de connexion
         * 
         */

        $verif_auth = auth()->attempt(['email_user' => request('email_user'), 'password' => request('password_user')]);

        if($verif_auth) {

            $data = auth()->user();

            $accessToken = $data->createToken('authToken')->accessToken;

            return response()->json([
                'resultat' => $data,
                'status' => 'succes',
                'message' => 'Authentification effectuée !',
                'accessToken' => $accessToken
            ]);


        } else {
            return response()->json([
                'status' => 'erreur',
                'message' => 'Email ou mot de passe incorrect !'
            ]);
        }

    }



    /**
     * Lien de connexion avec github
     * 
     * @return string  
     */
    public function github() {

        return Socialite::driver('github')->redirect();

    }


    /**
     * Authentification avec github
     * 
     * @return JSON  
     */
    public function githubRedirect() {


        $user_git = Socialite::driver('github')->stateless()->user();

        // dd($user_git);

        $user = User::firstOrCreate([
            'email_user' => $user_git->email
        ], [
            'nom_user' => $user_git->nickname,
            'email_user' => $user_git->email,
            'password_user' => bcrypt($user_git->nickname)
        ]);

        $connect = Auth::loginUsingId($user->id);


        if($connect) {
            $data = auth()->user();

            $accessToken = $data->createToken('authToken')->accessToken;

            return response()->json([
                'resultat' => $data,
                'status' => 'succes',
                'message' => 'Authentification effectuée !',
                'accessToken' => $accessToken
            ]);
        } else {
            return response()->json([
                'status' => 'erreur',
                'message' => "Une erreur est survenue lors de 'opération",
            ]);
        }

    }


}
