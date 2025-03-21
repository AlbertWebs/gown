<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Kopokopostk;
use Kopokopo;
use Illuminate\Support\Facades\Response;
use DB;

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
        $Random  = \App\Models\Gown::inRandomOrder()->limit('4')->get();
        $Page_title = "home";
        return view('front.index', compact('Page_title','Random'));
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

    public function gown_hire_single($slung)
    {
        $Page_title = "gown-for-hire";
        $Gown = \App\Models\Gown::where('gown_class', $slung)->first();
        $Gowns = \App\Models\Gown::where('gown_class', $slung)->get();
        return view('front.gown-for-hire', compact('Gown','Page_title','Gowns','slung'));
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

    public function privacy_policy(){
        $Page_title = "legal-attire";
        return view('front.privacy_policy', compact('Page_title'));
    }

    public function return_policy(){
        $Page_title = "legal-attire";
        return view('front.return-policy', compact('Page_title'));
    }

    public function terms_and_conditions(){
        $Page_title = "legal-attire";
        return view('front.terms-and-conditions', compact('Page_title'));
    }

    public function copyright(){
        $Page_title = "legal-attire";
        return view('front.copyright', compact('Page_title'));
    }





    public function legal_attire ()
    {
        $Category = \App\Models\Category::find(2);
        $Gowns = \App\Models\Gown::where('category_id', '2')->limit('3')->get();
        $Page_title = "legal-attire";
        return view('front.legal-attire', compact('Page_title','Gowns','Category'));
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

    public function shop_attire ($id)
    {
        $Category = \App\Models\Category::where('slung',$id)->first();
        $Gowns = \App\Models\Gown::where('category_id',$Category->id)->get();
        $Page_title = "shop";
        return view('front.products', compact('Page_title','Category','Gowns'));
    }

    public function shop_attire_collection ($category,$subcategory)
    {
        $Category = \App\Models\Category::where('slung',$category)->first();
        $SubCategory =  \App\Models\SubCategory::where('slung',$subcategory)->first();
        $Gowns = \App\Models\Gown::where('category_id',$Category->id)->where('sub_category_id',$SubCategory->id)->get();
        $Page_title = "shop";
        return view('front.product_subcategory', compact('Page_title','Category','Gowns','SubCategory'));
    }




    public function buy_with_m_pesa ($slung)
    {
        $Gown = \App\Models\Gown::where('slung', $slung)->first();
        $Page_title = "shop";
        return view('front.stk', compact('Page_title','Gown'));
    }

    public function our_products ($slung)
    {
        $Gown = \App\Models\Gown::where('slung', $slung)->first();
        $Category = \App\Models\Category::find($Gown->category_id);
        $Page_title = "shop";
        return view('front.product', compact('Page_title','Gown','Category'));
    }


    public function church_wear ()
    {
        $Category = \App\Models\Category::find(3);
        $Gown = \App\Models\Gown::where('category_id', '3')->get();
        $Page_title = "church-wear";
        return view('front.church-wear', compact('Page_title','Gown','Category'));
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
        $Blog = DB::table('blogs')->get();
        return view('front.blog', compact('Page_title','Blog'));
    }

    public function mobile_stk_received(Request $request){
        Log::info($request->getContent());
        $content=json_decode($request->getContent(), true);

        $TransID = $content['event']['resource']['id'];
        $TransAmount = $content['event']['resource']['amount'];
        $TransStatus = $content['event']['resource']['status'];
        $TransSystem = $content['event']['resource']['system'];
        $TransCurrency = $content['event']['resource']['currency'];
        $TransReference = $content['event']['resource']['reference'];
        $TransTill = $content['event']['resource']['till_number'];
        $TransPhoneNumber = $content['event']['resource']['sender_phone_number'];
        $TransLastName = $content['event']['resource']['sender_last_name'];
        $TransFirstName = $content['event']['resource']['sender_first_name'];
        $TransMiddleName = $content['event']['resource']['sender_middle_name'];

        $Kopokopostk = new Kopokopostk;
        $Kopokopostk->TransID = $TransID;
        $Kopokopostk->TransAmount = $TransAmount;
        $Kopokopostk->TransStatus = $TransStatus;
        $Kopokopostk->Transsystem = $TransSystem;
        $Kopokopostk->TransCurrency =$TransCurrency;
        $Kopokopostk->TransReference = $TransReference;
        $Kopokopostk->TransTill = $TransTill;
        $Kopokopostk->TransPhoneNumber = $TransPhoneNumber;
        $Kopokopostk->TransLastName = $TransLastName;
        $Kopokopostk->TransFirstName = $TransFirstName;
        $Kopokopostk->TransMiddleName = $TransMiddleName;
        $Kopokopostk->save();

    }

    public function getAccessToken(){
        $token=Kopokopo::getAccessToken();
        return $token;
    }

    public function checklast($phone){
        $TableData = DB::table('kopokopostks')->where('TransPhoneNumber', $phone)->where('status','0')->orderBy('id','DESC')->first();
        if($TableData==null){
            sleep(10);
            return $this->checklast($phone);
        }else{
            $UpdateDetail = array(
                'status'=>1,
            );
            DB::table('kopokopostks')->where('TransPhoneNumber', $phone)->update($UpdateDetail);
            return "Success";
        }
    }

    public function mobile_stk_initiate_post(Request $request){

        $res= Kopokopo::authenticate($this->getAccessToken())->stkPush(
            amount:  $request->amount,
            phone: $request->phone,
            first_name: 'null',//optional
            last_name: 'null',//optional
            email: 'info@gownsea.com',//optional
            metadata: [
                'user_id'=>1,
                'action'=>'deposit'
            ]//optional
        );
        // dd($res);.
        Log::info($res);
        // dd($res['status']);
        $phone = $request->phone;
        $CheckLast = $this->checklast($phone);
        if($CheckLast == "Success"){
            if($res['status'] == 'success')
            {
                return Response::json(array(
                    'response' => $res['status'],
                ));
            }else{
                return response()->json(['response' => 'Oups!! Something went wrong']);
            }
        }else{
            return response()->json(['response' => 'Oups!! Something went wrong']);
        }
    }

    public function mobile_payment_received ()
    {
        $Page_title = "shop";
        return view('front.success', compact('Page_title'));
    }

    public function mobile_payment_failed ()
    {
        $Page_title = "shop";
        return view('front.failed', compact('Page_title'));
    }




    public function mobile_stk_initiate(){
        // dd($this->getAccessToken());
        $res= Kopokopo::authenticate($this->getAccessToken())->stkPush(
            amount:  1,
            phone: '+254723014032',
            first_name: 'Albert',//optional
            last_name: 'Muhatia',//optional
            email: 'albertmuhatia@gmail.com',//optional
            metadata: [
                'user_id'=>1,
                'action'=>'deposit'
            ]//optional
        );
        dd($res);

        if($res['status'] == 'success')
        {
            dump ("The resource location is:" . json_encode($res['location']));
            // => 'https://sandbox.kopokopo.com/api/v1/incoming_payments/247b1bd8-f5a0-4b71-a898-f62f67b8ae1c'
        }
    }





}
