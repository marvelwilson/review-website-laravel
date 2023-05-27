<?php

namespace satlex\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use satlex\Mail\SendInvites;
use Illuminate\Support\Str;
use DB;
use Auth;
use Carbon\Carbon;
use satlex\Player;
use satlex\User;

class HomeController extends Controller
{
    public function index() {
       return view('home');
    }
    public function about() {
        $testimonials= DB::table('testimonials')->latest('testimonials.created_at')->simplePaginate(10);
        return view('about',compact('testimonials'));
    }
    public function contact() {
        $testimonials= DB::table('testimonials')->latest('testimonials.created_at')->simplePaginate(10);
        return view('contact',compact('testimonials'));
    }
  
     public function sendMsg(Request $request){
      DB::table('msgs')->insert([
          "email"           => $request->email,
          "phone"           => $request->phone,
          "name"      => $request->name,
          'message'    =>$request->message,
          'subject'    =>$request->subject,
          'status'    =>'unread',
          'created_at'        => Carbon::now(),
          'updated_at'        => Carbon::now()
     ]);
        /*  $data = [
                        "from"           => $request->email,
                        "phone"           => $request->phone,
                        "full_name"      => $request->name,
                        'Content'    =>$request->content,
                    ];
        Mail::to('globalfootballagency@amalawagroup.co.uk')->send(new MsgAlert($data)); */
    //  return response()->json(['success'=>"message sent"]);
   return view('contact');
    
    }
    
  public function resources() {
$resources= DB::table('resources')->latest('resources.created_at')->simplePaginate(10);
        return view('resources',compact('resources'));
    }
 
 public function vision() {

        return view('vision');
    }
 public function project() {
$projects= DB::table('projects')->latest('projects.created_at')->simplePaginate(10);
        return view('project',compact('projects'));
    }
 public function projectDetails($id) {
  $project=  DB::table('projects')->where('id', $id)->first();
        return view('project_details',compact('project'));
    }
 public function product() {
$products= DB::table('products')->latest('products.created_at')->simplePaginate(10);
        return view('products',compact('products'));
    }
 public function productDetails($id) {
  $product=  DB::table('products')->where('id', $id)->first();
        $products= DB::table('products')->latest('products.created_at')->simplePaginate(10);
        return view('product_details',compact('product','products'));
    }
 public function testimonials() {
$testimonials= DB::table('testimonials')->latest('testimonials.created_at')->simplePaginate(10);
        return view('testimonial',compact('testimonials'));
    }
 public function services() {
$services= DB::table('services')->latest('services.created_at')->simplePaginate(10);
        return view('services',compact('services'));
    }

  
    
}