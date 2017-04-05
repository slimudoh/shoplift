<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\SocialAccountService;

use Socialite;

use Auth;

class FacebookController extends Controller
{
    //
    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callback(SocialAccountService $service)
    {
        // when facebook calls with token
        $user = $service->createOrGetUser(Socialite::driver('facebook')->user());

        auth()->login($user);
        
        /*
         *  @author Houdini
         * 
         *  process the single sign on on eFront
         */
        Auth::User()->eF_process();

        return redirect()->to('/');
    }
    
    
    
    
    public function callback9(SocialAccountService $service)
    {
        // when facebook calls with token
        $user = $service->createOrGetUser9(Socialite::driver('linkedin')->user());

        auth()->login($user);
        
        /*
         *  @author Houdini
         * 
         *  process the single sign on on eFront
         */
        Auth::User()->eF_process();

        return redirect()->to('/');
    }
    
    
}
