<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $app_data = [
            'uri'=>Request::path,
            'name'=>ucfirst(env(APP_NAME)).' Location |',
            'title'=>'Welcome to our community platform',
        ];
        var_dump($app_data);
        // return view('home',$app_data);
        // return view('home')->with($data);
    }
}
