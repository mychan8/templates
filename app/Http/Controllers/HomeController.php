<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SignIn;
use App\Models\Myblog;

class HomeController extends Controller
{
    public function index(){
    	return view('index');
    }

    public function dashboard(Request $req){
    	/* Alternativa a HTTP_REFERRER */
    	$req->session()->put('referrer', $req->url());

        $db = Myblog::select('username', 'password');

    	return $a = null !== session('username') ? view('dashboard') : view('login', compact('db'));
    }

    public function login(SignIn $req){

    	if(session('referrer') != $req->referrer) { return redirect('/'); }

    	$auth = MyBlog::select('id')->where('username', '=', $req->username)->count();

    	if( empty($auth) ) { return view('login', ['error' => 'error']); }

    	$auth = MyBlog::select('password')->where('username', '=', $req->username)->limit(1)->get();

    	if($req->password == $auth[0]->password){
    		$req->session()->put('username', $req->username);
    	}

    	return redirect('dashboard');
	}

	public function logout(Request $req)
	{
		$req->session()->invalidate();
		return redirect('/');
	}
    	
}
