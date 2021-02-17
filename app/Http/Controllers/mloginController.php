<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class mloginController extends Controller
{
    public function index()
    {
        return view('mlogin');
    }

    public function authenticate(Request $request)
    {

//        $credentials = $request->only('email', 'password');
//
//        if (Auth::attempt($credentials)) {       // Böyle bir kullanıcı varsa true değeri döndürüyor
//
//            return redirect()->intended('home');
//            // 'intended'  yapılmak isteneni hafızada tutuyor. örn bir şey satın almak isterken giriş yapmanı istiyor ve yarıda kesiyor giriş yaptıktan sonra kaldığı yerden devam ediyor
//        } else {
//            echo "kayıt yok";
//        }

        $remember=$request->has('remember') ? true : false;

        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ],$remember)) {

            return redirect()->intended('home');
// 'intended'  yapılmak isteneni hafızada tutuyor. örn bir şey satın almak isterken giriş yapmanı istiyor ve yarıda kesiyor giriş yaptıktan sonra kaldığı yerden devam ediyor

        } else {
            echo "böyle bir kayıt yok";
        }
    }

    public function mlogout()
    {
        Auth::logout();
        return redirect('mlogin');
    }
}
