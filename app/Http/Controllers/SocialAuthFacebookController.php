<?php

namespace App\Http\Controllers;

//use Socialite;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthFacebookController extends Controller
{
    /*
     * Create a redirect method to facebook api.
     *
     * @return void
     */
      public function redirect()
      {
          return Socialite::driver('facebook')->redirect();
      }

      /**
       * Return a callback method from facebook api.
       *
       * @return callback URL from facebook
       */
      public function callback(\App\Services\SocialFacebookAccountService $service)
      {
        $user = $service->createOrGetUser(Socialite::driver('facebook')->user());
        auth()->login($user);
        return redirect()->to('/dashboard');
      }
}
