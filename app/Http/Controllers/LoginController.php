<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  public function index(){
		return view('login', [
			'title' => 'Login',
			'active' => 'login'
		]);
	}

	public function auth(Request $request){
		$credentials = $request->validate([
			'email' => 'required|email:dns',
			'password' => 'required|min:5'
		]);
		// dd($request);

		if(Auth::attempt($credentials)){
			$request->session()->regenerate();
			return redirect('/dashboard');
		}

		return back()->with('failed', 'Login failed !!!');
	}

	public function logout(Request $request){
		Auth::logout();
		
		$request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
	}
}
