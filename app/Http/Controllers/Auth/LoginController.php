<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use MongoDB\Driver\Session;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->route('admin.home');
        }
        return redirect()->route('login',['error'=>'erro_login']);
    }

//    public function loginIn(Request $request){
//        $dados = $request->request->all();
//
//        $usuario = User::query()
//                        ->where('email', 'like',$dados['email'])
//                        ->first();
//        $session = null;
//        $session2 = null;
//        if($usuario){
//            if(Hash::check($dados['password'],$usuario->password)){
//                $session = Auth::loginUsingId($usuario);
//                $session2 = Auth::user();
//                var_dump($session2);
//                exit('fim');
//                //return view('testeSession');
//            }else{
//                echo('usuario encontrado senha incorreta!');
//            }
//        }else{
//            echo('nao logou');
//        }
//
//        exit('FIM');
////        var_dump(session()->regenerate());
////        exit();
////        if(Hash::check($dados['password'],$usuario->password)){
////            var_dump('Logar');
////
////        }
//        //var_dump($usuario);
//        //exit();
//
//        //return view('auth.login');
//    }

    public function logout(Request $request){
        Auth::logout();
        return redirect()->intended('login');
    }
}
