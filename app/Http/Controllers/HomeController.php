<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\inquiry;
use App\schedule;
use App\newsletter;
use App\post;
use App\banner;
use App\imagetable;
use DB;
use Mail;use View;
use Session;
use App\Http\Helpers\UserSystemInfoHelper;
use App\Http\Traits\HelperTrait;
use Auth;
use App\Profile;


class HomeController extends Controller
{   
    use HelperTrait;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     // use Helper;
     
    public function __construct()
    {
        //$this->middleware('auth');

        $logo = imagetable::
                     select('img_path')
                     ->where('table_name','=','logo')
                     ->first();

        $favicon = imagetable::
                     select('img_path')
                     ->where('table_name','=','favicon')
                     ->first(); 
        
        View()->share('logo',$logo);
        View()->share('favicon',$favicon);

    } 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $banner = DB::table('banners')->get();  

        $information = DB::table('pages')->where('id', 2)->first(); 
        
        $mission = DB::table('pages')->where('id', 1)->first();

        $products = DB::table('products')->get()->take(10);

        return view('welcome', compact('banner', 'mission', 'information'));
    }

    public function services()
    {
        $ourservices = DB::table('pages')->where('id', 3)->first(); 
        $services = DB::table('services')->get();
        return view('services', ['ourservices'=>$ourservices,'services'=>$services]);
    }

    public function about()
    {
        $idea = DB::table('pages')->where('id', 8)->first();
        $whysp = DB::table('pages')->where('id', 9)->first();

        return view('about',compact('idea','whysp'));
    }

    public function work_with_us()
    {
        return view('workwithus');
    }

    public function team()
    {
        $members = DB::table('pages')->where('id', 10)->first();
        $teams = DB::table('teams')->get();
        return view('team', ['members'=>$members,'teams'=>$teams]);
    }

    public function partners()
    {
         $partners = DB::table('partners')->get();
           return view('partners', ['partners'=>$partners]);
    }

    public function clients()
    {
        $clients = DB::table('clients')->get();
           return view('clients', ['clients'=>$clients]);
    }

    public function contact()
    {
        $contactus = DB::table('pages')->where('id', 11)->first();
        return view('contact',compact('contactus'));
    } 

    public function blog()
    {
        $blogs= DB::table('blogs')->get();
        $allnews = DB::table('newssections')->limit(3)->get();
        return view('blog',['allnews'=>$allnews, 'blogs'=>$blogs]);
    }

    public function showblogdetail($id)
    {
        $detail = DB::table('blogs')->find($id);
        $allnews = DB::table('newssections')->limit(3)->get();

        return view('blogdetail',['detail' => $detail, 'allnews' => $allnews]);
    }

    public function contactUsSubmit(Request $request)
    {
        $inquiry = new inquiry;
        $inquiry->inquiries_fname = $request->fname;
        //$inquiry->inquiries_lname = $request->lname;
        $inquiry->inquiries_email = $request->email;
        $inquiry->inquiries_phone = $request->phone;
        $inquiry->extra_content = $request->message;
        $inquiry->save();
            
        Session::flash('message', 'Thank you for contacting us. We will get back to you asap'); 
        Session::flash('alert-class', 'alert-success'); 
        return back();
    }

    public function newsletterSubmit(Request $request)
    {
        $is_email = newsletter::where('newsletter_email',$request->email)->count();
        
        if($is_email == 0) {
            
        $inquiry = new newsletter;
        //$inquiry->newsletter_name = $request->name;
        $inquiry->newsletter_email = $request->email;
        //$inquiry->newsletter_message = $request->comment;
        $inquiry->save();
        Session::flash('message', 'Thank you for contacting us. We will get back to you asap'); 
        Session::flash('alert-class', 'alert-success'); 
        return redirect('/');
        
        } else {
            Session::flash('flash_message', 'email already exists'); 
            Session::flash('alert-class', 'alert-success'); 
            return redirect('/');
        }
        
    }
   
}
