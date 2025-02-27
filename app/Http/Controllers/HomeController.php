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


    public function bulk_inquiry ()
    {
        $Page_title = "gown-for-hire";
        $Gowns = \App\Models\Gown::where('category_id', 1)->get();
        return view('front.bulk-inquiry', compact('Gowns','Page_title'));
    }


    public function gown_hire ()
    {
        $Page_title = "gown-for-hire";
        $Gowns = \App\Models\Gown::where('category_id', 1)->get();
        return view('front.gown-for-hire-page', compact('Gowns','Page_title'));
    }

    public function gown_hire_single ($slung)
    {
        $Page_title = "gown-for-hire";
        $Gown = \App\Models\Gown::where('slung', $slung)->first();
        return view('front.gown-for-hire', compact('Gown','Page_title'));
    }

    public function shop_church_attires ()
    {
        $Gown = \App\Models\Gown::where('category_id', '3')->get();
        $Page_title = "church-wear";
        return view('front.products', compact('Page_title','Gown'));
    }

    public function shop_graduation_attires ()
    {
        $Gown = \App\Models\Gown::where('category_id', '1')->get();
        $Page_title = "legal-attire";
        return view('front.products', compact('Page_title','Gown'));
    }


    public function legal_attire ()
    {
        $Gowns = \App\Models\Gown::where('category_id', '2')->limit('3')->get();
        $Page_title = "legal-attire";
        return view('front.legal-attire', compact('Page_title','Gowns'));
    }


    public function shop_legal_attires ()
    {
        $Gown = \App\Models\Gown::where('category_id', '2')->get();
        $Page_title = "legal-attire";
        return view('front.products', compact('Page_title','Gown'));
    }

    public function shop_legal_attire ($slung)
    {
        $Gown = \App\Models\Gown::where('slung', $slung)->get();
        $Page_title = "legal-attire";
        return view('front.product', compact('Page_title','Gown'));
    }

    public function our_products ($slung)
    {
        $Gown = \App\Models\Gown::where('slung', $slung)->get();
        $Page_title = "church-wear";
        return view('front.product', compact('Page_title','Gown'));
    }


    public function church_wear ()
    {
        $Gown = \App\Models\Gown::where('category_id', '3')->get();
        $Page_title = "church-wear";
        return view('front.church-wear', compact('Page_title','Gown'));
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
