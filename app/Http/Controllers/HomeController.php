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
        // return view('home');
         return view('frontend.index');

    }
    //  public function index1()
    // {
    //     return view('frontend.index');
    // }
    public function error()
    {
        return view('frontend.404');
    }
    public function aboutus()
    {
        return view('frontend.aboutus');
    }
    public function blog()
    {
        return view('frontend.blog');
    }
    public function blogdeatils()
    {
        return view('frontend.blogdeatils');
    }
    public function contact()
    {
        return view('frontend.contact');
    }

}
