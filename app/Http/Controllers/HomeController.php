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
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $Page_title = "home";
        return view('front.index', compact('Page_title'));
        // return view('front.index');
    }

    public function gown_hire_single ($slung)
    {
        $Page_title = "gown-for-hire";
        $Gown = \App\Models\Gown::where('slung', $slung)->first();
        return view('front.gown-for-hire', compact('Gown','Page_title'));
    }

    public function legal_attire ()
    {
        $Page_title = "legal-attire";
        return view('front.legal-attire', compact('Page_title'));
    }

    public function church_wear ()
    {
        $Page_title = "church-wear";
        return view('front.church-wear', compact('Page_title'));
    }

    public function shop_legal_attire ()
    {
        $Page_title = "legal-attire";
        return view('front.legal-attire', compact('Page_title'));
    }

    public function contact_us ()
    {
        $Page_title = "contact-us";
        return view('front.contact-us', compact('Page_title'));
    }

    public function about_us ()
    {
        $Page_title = "about-us";
        return view('front.about-us', compact('Page_title'));
    }

    public function blog ()
    {
        $Page_title = "blog";
        return view('front.blog', compact('Page_title'));
    }







}
