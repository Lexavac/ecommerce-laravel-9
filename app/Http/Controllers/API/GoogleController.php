<?php

namespace App\Http\Controllers\API;
use Exception;



use App\Models\Google_user;
use App\Models\Tb_google;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\SocialAccount;
use PhpParser\Node\Stmt\Catch_;
use App\Http\Controllers\Controller;
use App\Models\Tb_customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProvideCallback($provider)
    {
        try {

            $user = Socialite::driver($provider)->stateless()->user();
        } catch (Exception $e) {
            return redirect()->back();
        }

        $authUser = $this->findOrCreateUser($user, $provider);


        Auth()->login($authUser, true);


        return redirect()->intended('/');
    }

    public function findOrCreateUser($socialUser, $provider)
    {


            $user = Tb_customer::where('email', $socialUser->getEmail())->first();


            if (!$user) {


                $user = Tb_customer::create([
                    'username'  => $socialUser->getName(),
                    'password' => Hash::make('password'),
                    'firstname'  => $socialUser->getName(),
                    'lastname'  => $socialUser->getName(),
                    'email' => $socialUser->getEmail(),
                    'phoneNumber'  => $socialUser->getName(),
                    'adress'  => $socialUser->getName(),


                ]);
            }

            return $user;
        }
    }


