<?php

namespace App;

use Laravel\Socialite\Contracts\User as ProviderUser;

class SocialAccountService
{
    public function createOrGetUser(ProviderUser $providerUser)
    {
        $account = Social::whereProvider('facebook')
            ->whereProviderUserId($providerUser->getId())
            ->first();

        if ($account) {
            return $account->user;
        } else {

            $account = new Social([
                'provider_user_id'  => $providerUser->getId(),
                'provider'          => 'facebook',
                'avatar'            => $providerUser->getAvatar(),
            ]);

            $user = User::whereEmail($providerUser->getEmail())->first();

            if (!$user) {

                $user = User::create([
                    'email'     => $providerUser->getEmail(),
                    'name'      => $providerUser->getName(),
                ]);
            }

            $account->user()->associate($user);
            $account->save();

            return $user;

        }

    }
    
    
   ////////////////////////////////
   public function createOrGetUser9(ProviderUser $providerUser)
    {
        $account = Social::whereProvider('linkedin')
            ->whereProviderUserId($providerUser->getId())
            ->first();

        if ($account) {
            return $account->user;
        } else {

            $account = new Social([
                'provider_user_id'  => $providerUser->getId(),
                'provider'          => 'linkedin',
                'avatar'            => $providerUser->getAvatar(),
            ]);

            $user = User::whereEmail($providerUser->getEmail())->first();

            if (!$user) {

                $user = User::create([
                    'email'     => $providerUser->getEmail(),
                    'name'      => $providerUser->getName(),
                ]);
            }

            $account->user()->associate($user);
            $account->save();

            return $user;

        }

    } 
  //////////////////////////////
    
}
