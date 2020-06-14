<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
Use App\User;

use Socialite;



class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    
    // protected $redirectTo = '/';
    protected function redirectTo(){
        $role = Auth::user()->role;
        if($role==1){
            return redirect('/admin/dashboard');
        }
        elseif($role ==0){
            return route('welcome');
        }
    }
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToProvider($provider)
    {
       return Socialite::driver($provider)->redirect();
    }
    public function handleProviderCallback($provider)
    {
       try {
           $user = Socialite::driver($provider)->stateless()->user();
       } catch (Exception $e) {
           return redirect('/login');
       }
       
       $authUser = $this->checkUser($user, $provider);
       Auth::login($authUser, true);
       return $this->redirectTo();
    }
    public function checkUser($providerUser, $provider)
    {
      $account = User::where('provider_name', $provider)
                ->where('provider_id', $providerUser->getId())
                ->first();
                
      if ($account) {
          return $account;
      } 
      else {
        $user = User::where('email', $providerUser->getEmail())->first();
          if (! $user) {
              $user = User::create([
                'email' => $providerUser->getEmail(),
                'name'  => $providerUser->getName(),
                'provider_id'   => $providerUser->getId(),
                'provider_name' => $provider,
              ]);
          }
          return $user;
      }
    }
}

