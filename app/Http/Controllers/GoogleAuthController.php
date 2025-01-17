<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Socialite;
use Auth;
use Exception;
class GoogleAuthController extends Controller
{
  
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback()
    {
        
         try {
            $googleUser = Socialite::driver('google')->user();
            $existUser = User::where('email', $googleUser->email)->first();

            if ($existUser) {
                Auth::loginUsingId($existUser->id);
            } else {
                $user = new User;
                $user->name = $googleUser->name;
                $user->email = $googleUser->email;
                $user->google_id = $googleUser->id;
                $user->password = md5(rand(1, 10000));
                $user->save();
                Auth::loginUsingId($user->id);
            }
            return redirect()->to('/home');
        } catch (Exception $e) {
            return 'error';
        }
        
        // try {
      
        //     $user = Socialite::driver('google')->user();
       
        //     $finduser = User::where('email', $user->email)->first();
       
        //     if($finduser){
       
        //         Auth::login($finduser);
      
        //       return redirect()->to('/home');
       
        //     }else{
        //         $newUser = User::create([
        //             'name' => $user->name,
        //             'email' => $user->email,
        //             'google_id'=> $user->id,
        //             'password' => encrypt('123456dummy')
        //         ]);
      
        //         Auth::login($newUser);
      
        //         return redirect()->to('/home');
        //     }
      
        // } catch (Exception $e) {
        //     dd($e->getMessage());
        // }
    }
    
    
}
