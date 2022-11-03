<?php

namespace App\Http\Controllers\Auth;

use Exception;
use App\Models\Tb_customer;
use Illuminate\Http\Request;
use App\Models\SocialAccount;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;


class SocialiteController extends Controller
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
        // find or create user and send params user get from socialite and provider
        $authUser = $this->findOrCreateUser($user, $provider);

        // login user
        Auth()->login($authUser, true);

        // setelah login redirect ke dashboard
        return redirect()->route('dashboard');
    }

    public function findOrCreateUser($socialUser, $provider)
    {
        // Get Social Account
        $socialAccount = Tb_customer::where('google_id', $socialUser->getId())
            ->where('email', $provider)
            ->first();

        // Jika sudah ada
        if ($socialAccount) {
            // return user
            return $socialAccount->user;

            // Jika belum ada
        } else {

            // User berdasarkan email
            $user = Tb_customer::where('email', $socialUser->getEmail())->first();

            // Jika Tidak ada user
            if (!$user) {
                // Create user baru
                $user = Tb_customer::create([
                    'username'  => $socialUser->getUserame(),
                    'email' => $socialUser->getEmail(),
                    'firstname' => $socialUser->getFirstname(),
                    'lastname' => $socialUser->getLastname(),
                    'phoneNumber' => $socialUser->getphoneNumber(),
                    'adress' => $socialUser->getAdress(),
                ]);
            }

            // Buat Social Account baru
            $user->socialAccounts()->create([
                'google_id'   => $socialUser->getId(),
                'email' => $provider
            ]);

            // return user
            return $user;
        }
    }
}
