<?php

namespace App\Http\Controllers\Auth;



use App\Http\Requests;
use App\Http\Controllers\Controller;
use Socialite;
use App\User;
use Auth;

class AuthController extends Controller
{
    //
     /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->user();

        $data = [
            'sid'   => $user->getId(),
            'email' => $user->getEmail(),
            'nick'  => $user->getNickname(),
            'name'  => $user->getName(),
            'avatar'=> $user->getAvatar(),
            'password'=> 'Google'
        ];

        Auth::login(User::firstOrCreate($data));
        return redirect()->to('/home');
        // $user->token;
       
    }
}
