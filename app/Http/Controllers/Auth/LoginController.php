<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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
  // protected $redirectTo = '/cliente/dashboard';

  /*     public function redirectTo() {
        $role = Auth::user()->type; 
        switch ($role) {
          case 'Admin':
            return '/admin/dashboard';
            break;
          case 'Client':            
            return '/cliente/dashboard';
            break; 
      
          default:
            return '/home'; 
          break;
        }
      } */

  protected function authenticated(Request $request, $user)
  {
    
    if ($user->type == 'Admin') {    
      return redirect('/admin/dashboard');

    } else if ($user->type == 'Client') {
      return redirect('/cliente/dashboard');

    } else {
      return redirect('/');
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
}
