<?php

namespace satlex\Http\Controllers;

use Illuminate\Http\Request;
use satlex\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use satlex\Mail\SendInvites;
use Illuminate\Support\Str;
use DB;
use Auth;
use Carbon\Carbon;
use satlex\Plan;
use satlex\User;
use satlex\Setting;

class AdminController extends Controller
{
    //
     public function index(){
    $users= DB::table('users')->simplePaginate(10);
        return view('admin.index',compact('users')); 
    }
public function indexProfile(){
   $user= DB::table('users')->where('id', '=', Auth::user()->id)->first();
        //$users = Account::simplePaginate(10);
         return view('admin.profile', compact('user'));
    }


     public function updateProfile(Request $request){
        $user = User::findOrFail(Auth::user()->id);
        $user->full_name = $request->full_name;
        $user->username = $request->username;
        $user->phone = $request->phone;
         if($request->hasFile('image')) {
            $img_path = $request->image->store('public/images');
             $user->image = $img_path;
        }
        $user->update();
   return response()->json(['success'=>"Changes saved successfully"]);
    }



    public function setting(){
   $setting= DB::table('settings')->where('id', '=', 1)->first();
        //$users = Account::simplePaginate(10);
         return view('admin.settings', compact('setting'));
    }


     public function updateSetting(Request $request){
        $setting = Setting::findOrFail($request->id);
        $setting->email = $request->email;
        $setting->phone = $request->phone;
        $setting->address = $request->address;
        $setting->fb = $request->fb;
        $setting->instagram = $request->instagram;
        $setting->twitter = $request->twitter;
       
        $setting->update();
   return response()->json(['success'=>"Changes saved successfully"]);
    }

      //Plan group...........................
//........................................
 
   //All Plan
  public function viewPlan(){
   $plans= DB::table('plans')->latest('plans.created_at')->get();
        //$plans = Plan::simplePaginate(10);
       

         return view('admin.plans.view', compact('plans'));
    }

 
  /*   public function createPlan(){
        return view('user.plans.create');
    } */
 public function storePlan(Request $request){
     
     DB::table('plans')->insert([
          'content'          => $request->content,
          'name'          => $request->name,
          'interest'          => $request->interest,
          'days'          => $request->days,
          'deposit'          => $request->deposit,
          'return'          => $request->return,
          'duration'          => $request->duration,
          'total_return'          => $request->total_return,
          'created_at'        => Carbon::now(),
          'updated_at'        => Carbon::now()
     ]);
       
    return response()->json(['success'=>"Changes saved successfully"]);
    }
    
     public function updatePlan(Request $request){
        $plan = Plan::findOrFail($request->id);
          $plan->content         = $request->content;
          $plan->name       = $request->name;
          $plan->interest          = $request->interest;
          $plan->days         = $request->days;
          $plan->deposit         = $request->deposit;
          $plan->return          = $request->return;
          $plan->duration         = $request->duration;
          $plan->total_return         = $request->total_return;
        $plan->update();
    
    return response()->json(['success'=>"Changes updated successfully"]);
}
    
      public function deletePlan($id){
         DB::table('plans')->where('id', $id)->delete();
        //Plan::destroy($id);
    return redirect()->route('admin.viewplan')->with(['success'=>'Plan deleted successfully']);
    }

 //Gallery group...........................
//........................................
 
   //All Gallery
  public function viewGallery($id){
$album_id=$id;
   $gallerys= DB::table('gallerys')->latest('gallerys.created_at')->where('gallerys.album_id', $id)->get();
        //$gallerys = Gallery::simplePaginate(10);
       

         return view('admin.gallery.view', compact('gallerys','album_id'));
    }

 
  /*   public function createGallery(){
        return view('user.gallerys.create');
    } */
 public function storeGallery(Request $request){
     
     DB::table('gallerys')->insert([
          'album_id'          => $request->album_id,
          'image'=>$request->image->store('public/images'),
          'created_at'        => Carbon::now(),
          'updated_at'        => Carbon::now()
     ]);
       
    return response()->json(['success'=>"Changes saved successfully"]);
    }
    
     public function updateGallery(Request $request){
        $gallery = Gallery::findOrFail($request->id);
        $gallery->title = $request->title;
         $gallery->content = $request->content;
        $gallery->image = $request->image;
        $gallery->update();
    
    return response()->json(['success'=>"Changes updated successfully"]);
}
    
      public function deleteGallery($id){
         DB::table('gallerys')->where('id', $id)->delete();
        //Gallery::destroy($id);
    return redirect()->route('admin.viewgallery')->with(['success'=>'Gallery deleted successfully']);
    }

   //Testimonial group...........................
//........................................
 
   //All Testimonial
  public function viewTestimonial(){
   $testimonials= DB::table('testimonials')->latest('testimonials.created_at')->get();
        //$testimonials = Testimonial::simplePaginate(10);
       

         return view('admin.testimonials.view', compact('testimonials'));
    }

 
  /*   public function createTestimonial(){
        return view('user.testimonials.create');
    } */
 public function storeTestimonial(Request $request){
          DB::table('testimonials')->insert([
          'content'          => $request->content,
          'name'          => $request->name,
          'company'          => $request->company,
          'position'          => $request->position,
          'image'=>$request->image->store('public/images'),
          'created_at'        => Carbon::now(),
          'updated_at'        => Carbon::now()
     ]);
    return response()->json(['success'=>"Changes saved successfully"]);
    }
    
     public function updateTestimonial(Request $request){
        $testimonial = Testimonial::findOrFail($request->id);
      $testimonial->name = $request->name;
        $testimonial->content = $request->content;
        $testimonial->company = $request->company;
        $testimonial->position = $request->position;
         if($request->hasFile('image')) {
            $img_path = $request->image->store('public/images');
             $testimonial->image = $img_path;
        }
        $testimonial->update();
    
    return response()->json(['success'=>"Changes updated successfully"]);
}
    
      public function deleteTestimonial($id){
         DB::table('testimonials')->where('id', $id)->delete();
        //Testimonial::destroy($id);
    return redirect()->route('admin.viewtestimonial')->with(['success'=>'Testimonial deleted successfully']);
    }



      //Staff group...........................
//........................................
 
   //All Staff
  public function viewStaff(){
   $staffs= DB::table('staffs')->latest('staffs.created_at')->get();
        //$staffs = Staff::simplePaginate(10);
       

         return view('admin.staffs.view', compact('staffs'));
    }

 
  /*   public function createStaff(){
        return view('user.staffs.create');
    } */
 public function storeStaff(Request $request){
          DB::table('staffs')->insert([
          'content'          => $request->content,
          'name'          => $request->name,
          'position'          => $request->position,
          'image'=>$request->image->store('public/images'),
          'created_at'        => Carbon::now(),
          'updated_at'        => Carbon::now()
     ]);
    return response()->json(['success'=>"Changes saved successfully"]);
    }
    
     public function updateStaff(Request $request){
        $staff = Staff::findOrFail($request->id);
      $staff->name = $request->name;
        $staff->content = $request->content;
        $staff->position = $request->position;
         if($request->hasFile('image')) {
            $img_path = $request->image->store('public/images');
             $staff->image = $img_path;
        }
        $staff->update();
    
    return response()->json(['success'=>"Changes updated successfully"]);
}
    
      public function deleteStaff($id){
         DB::table('staffs')->where('id', $id)->delete();
        //Staff::destroy($id);
    return redirect()->route('admin.viewstaff')->with(['success'=>'Staff deleted successfully']);
    }

      //Blog group...........................
//........................................
 
   //All Blog
  public function viewBlog(){
   $blogs= DB::table('blogs')->latest('blogs.created_at')->get();
        //$blogs = Blog::simplePaginate(10);
       

         return view('admin.blogs.view', compact('blogs'));
    }

 
  /*   public function createBlog(){
        return view('user.blogs.create');
    } */
 public function storeBlog(Request $request){
          DB::table('blogs')->insert([
          'content'          => $request->content,
          'title'          => $request->title,
          'tag'          => $request->tag,
          'author'          => $request->author,
          'image'=>$request->image->store('public/images'),
          'created_at'        => Carbon::now(),
          'updated_at'        => Carbon::now()
     ]);
    return response()->json(['success'=>"Changes saved successfully"]);
    }
    
     public function updateBlog(Request $request){
        $blog = Blog::findOrFail($request->id);
      $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->author = $request->author;
        $blog->tag = $request->tag;
         if($request->hasFile('image')) {
            $img_path = $request->image->store('public/images');
             $blog->image = $img_path;
        }
        $blog->update();
    
    return response()->json(['success'=>"Changes updated successfully"]);
}
    
      public function deleteBlog($id){
         DB::table('blogs')->where('id', $id)->delete();
        //Blog::destroy($id);
    return redirect()->route('admin.viewblog')->with(['success'=>'Blog deleted successfully']);
    }

      //Event group...........................
//........................................
 
   //All Event
  public function viewEvent(){
   $events= DB::table('events')->latest('events.created_at')->get();
        //$events = Event::simplePaginate(10);
       

         return view('admin.events.view', compact('events'));
    }

 
  /*   public function createEvent(){
        return view('user.events.create');
    } */
 public function storeEvent(Request $request){
          DB::table('events')->insert([
          'content'          => $request->content,
          'title'          => $request->title,
          'date'          => $request->date,
          'image'=>$request->image->store('public/images'),
          'created_at'        => Carbon::now(),
          'updated_at'        => Carbon::now()
     ]);
    return response()->json(['success'=>"Changes saved successfully"]);
    }
    
     public function updateEvent(Request $request){
        $event = Event::findOrFail($request->id);
      $event->title = $request->title;
        $event->content = $request->content;
        $event->date = $request->date;
         if($request->hasFile('image')) {
            $img_path = $request->image->store('public/images');
             $event->image = $img_path;
        }
        $event->update();
    
    return response()->json(['success'=>"Changes updated successfully"]);
}
    
      public function deleteEvent($id){
         DB::table('events')->where('id', $id)->delete();
        //Event::destroy($id);
    return redirect()->route('admin.viewevent')->with(['success'=>'Event deleted successfully']);
    }

      //Album group...........................
//........................................
 
   //All Album
  public function viewAlbum(){
   $albums= DB::table('albums')->latest('albums.created_at')->get();
        //$albums = Album::simplePaginate(10);
       

         return view('admin.albums.view', compact('albums'));
    }

 
  /*   public function createAlbum(){
        return view('user.albums.create');
    } */
 public function storeAlbum(Request $request){
          DB::table('albums')->insert([
          'title'          => $request->title,
          'image'=>$request->image->store('public/images'),
          'created_at'        => Carbon::now(),
          'updated_at'        => Carbon::now()
     ]);
    return response()->json(['success'=>"Changes saved successfully"]);
    }
    
     public function updateAlbum(Request $request){
        $album = Album::findOrFail($request->id);
      $album->title = $request->title;
         if($request->hasFile('image')) {
            $img_path = $request->image->store('public/images');
             $album->image = $img_path;
        }
        $album->update();
    
    return response()->json(['success'=>"Changes updated successfully"]);
}
    
      public function deleteAlbum($id){
         DB::table('albums')->where('id', $id)->delete();
        //Album::destroy($id);
    return redirect()->route('admin.viewalbum')->with(['success'=>'Album deleted successfully']);
    }


    
      //Msg group...........................
//........................................
 
   //All Msg
  public function viewMessage(){
   $msgs= DB::table('msgs')->latest('msgs.created_at')->get();
        //$msgs = Msg::simplePaginate(10);
       

         return view('admin.messages.view', compact('msgs'));
    }

 
  
    
      public function deleteMessage($id){
         DB::table('msgs')->where('id', $id)->delete();
        //Msg::destroy($id);
    return redirect()->route('admin.viewmessage')->with(['success'=>'Message deleted successfully']);
    }
    
      //Vol group...........................
//........................................
 
   //All Vol
  public function viewVolunteer(){
   $vols= DB::table('vols')->latest('vols.created_at')->get();
        //$vols = Vol::simplePaginate(10);
       

         return view('admin.volunteers.view', compact('vols'));
    }

 
  
    
      public function deleteVolunteer($id){
         DB::table('vols')->where('id', $id)->delete();
        //Vol::destroy($id);
    return redirect()->route('admin.viewvolunteer')->with(['success'=>'Message deleted successfully']);
    }

 //Resource group...........................
//........................................
 
   //All Resource
  public function viewResource(){
   $resources= DB::table('resources')->latest('resources.created_at')->get();
        //$resources = Resource::simplePaginate(10);
       

         return view('admin.resources.view', compact('resources'));
    }

 
  /*   public function createResource(){
        return view('user.resources.create');
    } */
 public function storeResource(Request $request){
          DB::table('resources')->insert([
          'title'          => $request->title,
          'doc'=>$request->doc->store('public/images'),
          'created_at'        => Carbon::now(),
          'updated_at'        => Carbon::now()
     ]);
    return response()->json(['success'=>"Changes saved successfully"]);
    }
    
     public function updateResource(Request $request){
        $resource = Resource::findOrFail($request->id);
      $resource->name = $request->name;
        $resource->content = $request->content;
        $resource->company = $request->company;
        $resource->position = $request->position;
         if($request->hasFile('image')) {
            $img_path = $request->image->store('public/images');
             $resource->image = $img_path;
        }
        $resource->update();
    
    return response()->json(['success'=>"Changes updated successfully"]);
}
    
      public function deleteResource($id){
         DB::table('resources')->where('id', $id)->delete();
        //Resource::destroy($id);
    return redirect()->route('admin.viewresource')->with(['success'=>'Resource deleted successfully']);
    }
}