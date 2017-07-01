<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laratrust\LaratrustFacade as Laratrust;


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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Laratrust::hasRole('owner')) return $this->ownerDash();
        if(Laratrust::hasRole('admin')) return $this->adminDash();

        return view('member.dashboard');  
    }

    public function ownerDash() {
        return view('owner.dashboard');
    }

    public function adminDash() {
        return view('admin.dashboard');
    }   

    public function profile() {
        return view('member.profile');
    }
}

