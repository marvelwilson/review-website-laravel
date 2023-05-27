<?php

namespace satlex\Http\Controllers;

use satlex\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;
use Carbon\Carbon;
use satlex\Plan;
use satlex\User;
use satlex\Order;
use satlex\Testimonial;
use satlex\Service;
use Illuminate\Support\Facades\Hash;
use satlex\Banner;
use satlex\Setting;

class SuperController extends Controller
{
      public function index(){

   $messages= DB::table('msgs')->where('status', '=', 'unread')->latest('msgs.created_at')->get();
        return view('super_admin.index',compact('messages')); 
    }


    public function indexProfile($id){
   $user= DB::table('users')->where('id', '=', $id)->first();
        //$users = Account::simplePaginate(10);
         return view('super_admin.users.profile', compact('user'));
    }
    public function setting(){
   $setting= DB::table('settings')->where('id', '=', 1)->first();
        //$users = Account::simplePaginate(10);
         return view('super_admin.settings.setting', compact('setting'));
    }


     public function updateProfile(Request $request){
        $user = User::findOrFail($request->id);
        $user->full_name = $request->full_name;
        $user->username = $request->username;
        $user->address = $request->address;
        $user->dob = $request->dob;
         if($request->hasFile('image')) {
            $img_path = $request->image->store('public/images');
             $user->image = $img_path;
        }
        $user->update();
   return response()->json(['success'=>"Changes saved successfully"]);
    }

     public function updateSetting(Request $request){
        $setting = Setting::findOrFail($request->id);
        $setting->email = $request->email;
        $setting->phone = $request->phone;
        $setting->address = $request->address;
        $setting->fb = $request->fb;
        $setting->instagram = $request->instagram;
        $setting->update();
   return response()->json(['success'=>"Changes saved successfully"]);
    }


      //User group...........................
//........................................
 
   //All User
  public function viewUser($type){
   $users= DB::table('users')->where('user_type', $type)->latest('users.created_at')->get();
        //$users = User::simplePaginate(10);  

         return view('super_admin.users.view', compact(['users','type']));
    }

 
  /*   public function createUser(){
        return view('user.users.create');
    } */
 public function storeUser(Request $request){
          DB::table('users')->insert([
          'full_name'          => $request->full_name,
          'email'          => $request->email,
          'username'          => $request->username,
          'phone'          => $request->phone,
          'dob'          => $request->dob,
          'user_type'=>$request->user_type,
          'status'=>'Active',
          'password'          => Hash::make($request->password),
          'created_at'        => Carbon::now(),
          'updated_at'        => Carbon::now()
     ]);
    return response()->json(['success'=>"Changes saved successfully"]);
    }
    
     public function updateUser(Request $request){
        $user = User::findOrFail($request->id);
      $user->name = $request->name;
        $user->content = $request->content;
        $user->company = $request->company;
        $user->position = $request->position;
         if($request->hasFile('image')) {
            $img_path = $request->image->store('public/images');
             $user->image = $img_path;
        }
        $user->update();
    
    return response()->json(['success'=>"Changes updated successfully"]);
}
    
      public function deleteUser(Request $request){
          $user = User::findOrFail($request->id);
         $user->status = $request->status;
         $user->updated_at  = Carbon::now();
        $user->update();
   
    return response()->json(['success'=>"Changes updated successfully"]);
       /*   DB::table('users')->where('id', $id)->delete();
        //User::destroy($id);
    return redirect()->route('super_admin.users.view')->with(['success'=>'User deleted successfully']); */
    }



 //Product group...........................
//........................................
 
   //All Product
  public function viewProduct(){
   $products= DB::table('products')->latest('products.created_at')->get();
        //$products = Product::simplePaginate(10);
       

         return view('super_admin.product.view', compact('products'));
    }

 
 public function storeProduct(Request $request){
      $this->validate($request, [
                'image' => 'required',
        ]);


        if($request->hasfile('image'))
         {
            foreach($request->file('image') as $file)
            {
                $data[] = $file->store('public/images');  
            }
         }

     DB::table('products')->insert([
          'name'          => $request->name,
          'desc'          => $request->desc,
          'full_desc'          => $request->full_desc,
          'image'=>json_encode($data,JSON_UNESCAPED_SLASHES),
          'created_at'        => Carbon::now(),
          'updated_at'        => Carbon::now()
     ]);
       
    return response()->json(['success'=>"Changes saved successfully"]);
    }
    
     public function updateProduct(Request $request){
        $product = Product::findOrFail($request->id);
        $product->title = $request->title;
         $product->content = $request->content;
        $product->image = $request->image;
        $product->update();
    
    return response()->json(['success'=>"Changes updated successfully"]);
}
    
      public function deleteProduct($id){
         DB::table('products')->where('id', $id)->delete();
        //Product::destroy($id);
    return redirect()->route('super.viewproduct')->with(['success'=>'Product deleted successfully']);
    }


//Cat group...........................
//........................................
 
   //All Cat
  public function viewCat(){
   $cats= DB::table('cats')->latest('cats.created_at')->get();
        //$cats = Cat::simplePaginate(10);
       

         return view('super_admin.cat.view', compact('cats'));
    }

 
  /*   public function createCat(){
        return view('user.cats.create');
    } */
 public function storeCat(Request $request){
     
     DB::table('cats')->insert([
          'name'          => $request->name,
          'status'          => $request->status,
          'image'=>$request->image->store('public/images'),
          'created_at'        => Carbon::now(),
          'updated_at'        => Carbon::now()
     ]);
       
    return response()->json(['success'=>"Changes saved successfully"]);
    }
    
     public function updateCat(Request $request){
        $cat = Cat::findOrFail($request->id);
        $cat->title = $request->title;
         $cat->content = $request->content;
        $cat->image = $request->image;
        $cat->update();
    
    return response()->json(['success'=>"Changes updated successfully"]);
}
    
      public function deleteCat($id){
         DB::table('cats')->where('id', $id)->delete();
        //Cat::destroy($id);
    return redirect()->route('super_admin.viewcat')->with(['success'=>'Cat deleted successfully']);
    }

//Subcat group...........................
//........................................
 
   //All Subcat
  public function viewSubcat(){
  $cats= DB::table('cats')->latest('cats.created_at')->get();
    $subcats= DB::table('cats')->join('sub_cats','sub_cats.cat_id','cats.id')->select('sub_cats.created_at','cats.name as cat_name','cats.image','sub_cats.name', )
       ->latest('sub_cats.created_at')->get();
       return view('super_admin.subcat.view', compact('subcats','cats'));
    }

 
  /*   public function createSubsubcat(){
        return view('user.subcats.create');
    } */
 public function storeSubcat(Request $request){
     
     DB::table('sub_cats')->insert([
          'name'          => $request->name,
          'cat_id'          => $request->cat_id,
          'status'          => $request->status,
          'created_at'        => Carbon::now(),
          'updated_at'        => Carbon::now()
     ]);
       
    return response()->json(['success'=>"Changes saved successfully"]);
    }
    
     public function updateSubcat(Request $request){
        $subcat = Subsubcat::findOrFail($request->id);
        $subcat->title = $request->title;
         $subcat->content = $request->content;
        $subcat->image = $request->image;
        $subcat->update();
    
    return response()->json(['success'=>"Changes updated successfully"]);
}
    
      public function deleteSubcat($id){
         DB::table('subcats')->where('id', $id)->delete();
        //Subsubcat::destroy($id);
    return redirect()->route('super_admin.viewsubcat')->with(['success'=>'Subsubcat deleted successfully']);
    }



 //Testimonial group...........................
//........................................
 
   //All Testimonial
  public function viewTestimonial(){
   $testimonials= DB::table('testimonials')->latest('testimonials.created_at')->get();
        //$testimonials = Testimonial::simplePaginate(10);  

         return view('super_admin.testimonials.view', compact(['testimonials']));
    }

 
  /*   public function createTestimonial(){
        return view('testimonial.testimonials.create');
    } */
 public function storeTestimonial(Request $request){
          DB::table('testimonials')->insert([
          'name'          => $request->name,
          'content'          => $request->content,
          'company'          => $request->company,
          'sex'          => $request->sex,
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
    return redirect()->route('super.viewtestimonial')->with(['success'=>'Testimonial deleted successfully']);
    }


 //Service group...........................
//........................................
 
   //All Service
  public function viewService(){
   $services= DB::table('services')->latest('services.created_at')->get();
        //$services = Service::simplePaginate(10);  

         return view('super_admin.services.view', compact(['services']));
    }

 
  /*   public function createService(){
        return view('service.services.create');
    } */
 public function storeService(Request $request){
          DB::table('services')->insert([
          'name'          => $request->name,
          'desc'          => $request->desc,
          'created_at'        => Carbon::now(),
          'updated_at'        => Carbon::now()
     ]);
    return response()->json(['success'=>"Changes saved successfully"]);
    }
    
     public function updateService(Request $request){
        $service = Service::findOrFail($request->id);
      $service->name = $request->name;
        $service->content = $request->content;
        $service->company = $request->company;
        $service->position = $request->position;
         if($request->hasFile('image')) {
            $img_path = $request->image->store('public/images');
             $service->image = $img_path;
        }
        $service->update();
    
    return response()->json(['success'=>"Changes updated successfully"]);
}
    
      public function deleteService($id){
         DB::table('services')->where('id', $id)->delete();
        //Service::destroy($id);
    return redirect()->route('super.viewservice')->with(['success'=>'Service deleted successfully']);
    }
 

//Banner group...........................
//........................................
 
   //All Banner
  public function viewBanner(){
   $banners= DB::table('banners')->latest('banners.created_at')->get();
        //$banners = Banner::simplePaginate(10);  

         return view('super_admin.banners.view', compact(['banners']));
    }

 
  /*   public function createBanner(){
        return view('banner.banners.create');
    } */
 public function storeBanner(Request $request){
          DB::table('banners')->insert([
           'name'          => $request->name,
          'full_desc'          => $request->full_desc,
          'image'=>$request->image->store('public/images'),
          'created_at'        => Carbon::now(),
          'updated_at'        => Carbon::now()
     ]);
    return response()->json(['success'=>"Changes saved successfully"]);
    }
    
     public function updateBanner(Request $request){
        $banner = Banner::findOrFail($request->id);
      $banner->name = $request->name;
        $banner->content = $request->content;
        $banner->company = $request->company;
        $banner->position = $request->position;
         if($request->hasFile('image')) {
            $img_path = $request->image->store('public/images');
             $banner->image = $img_path;
        }
        $banner->update();
    
    return response()->json(['success'=>"Changes updated successfully"]);
}
    
      public function deleteBanner($id){
         DB::table('banners')->where('id', $id)->delete();
        //Banner::destroy($id);
    return redirect()->route('admin.viewbanner')->with(['success'=>'Banner deleted successfully']);
    }

    //Document group...........................
//........................................
 
   //All Document
  public function viewDocument($id){
   $documents= DB::table('documents')->where('user_id', $id)->latest('documents.created_at')->get();
   $recentdoc= DB::table('documents')->where('user_id', $id)->latest('documents.created_at')->get();
        //$documents = Document::simplePaginate(10);
    $user= DB::table('users')->where('id', '=', $id)->first();   

         return view('super_admin.documents.view', compact('documents','user','recentdoc'));
    }

 
  /*   public function createDocument(){
        return view('user.documents.create');
    } */
 public function storeDocument(Request $request){
          DB::table('documents')->insert([
          'user_id'          => $request->id,
          'title'          => $request->title,
          'from'          => $request->from,
          'to'          => $request->to,
          'doc'=>$request->doc->store('public/documents'),
          'created_at'        => Carbon::now(),
          'updated_at'        => Carbon::now()
     ]);
    return response()->json(['success'=>"Changes saved successfully"]);
    }
    
     public function updateDocument(Request $request){
        $document = Document::findOrFail($request->id);
      $document->name = $request->name;
        $document->content = $request->content;
        $document->company = $request->company;
        $document->position = $request->position;
         if($request->hasFile('image')) {
            $img_path = $request->image->store('public/images');
             $document->image = $img_path;
        }
        $document->update();
    
    return response()->json(['success'=>"Changes updated successfully"]);
}
    
      public function deleteDocument($id){
         DB::table('documents')->where('id', $id)->delete();
        //Document::destroy($id);
    return redirect()->route('admin.viewdocument')->with(['success'=>'Document deleted successfully']);
    }




  //Project group...........................
//........................................
 
   //All Project
  public function viewProject(){
   $projects= DB::table('projects')->latest('projects.created_at')->get();
        //$projects = Project::simplePaginate(10);  

         return view('super_admin.projects.view', compact('projects'));
    }

 
  /*   public function createProject(){
        return view('user.projects.create');
    } */
 public function storeProject(Request $request){
 $this->validate($request, [
                'image' => 'required',
        ]);


        if($request->hasfile('image'))
         {
            foreach($request->file('image') as $file)
            {
                $data[] = $file->store('public/images');  
            }
         }
          DB::table('projects')->insert([
            'name'          => $request->name,
          'desc'          => $request->desc,
          'image'=>json_encode($data,JSON_UNESCAPED_SLASHES),
          'created_at'        => Carbon::now(),
          'updated_at'        => Carbon::now()
     ]);
    return response()->json(['success'=>"Changes saved successfully"]);
    }
    
     public function updateProject(Request $request){
        $project = Project::findOrFail($request->id);
      $project->title = $request->title;
      $project->user_id = Auth::user()->id;
        $project->amount = $request->amount;
        $project->update();
    
    return response()->json(['success'=>"Changes updated successfully"]);
}
    
      public function deleteProject($id){
         DB::table('projects')->where('id', $id)->delete();
        //Project::destroy($id);
    return redirect()->route('admin.viewproject')->with(['success'=>'Project deleted successfully']);
    }



  //Message group...........................
//........................................
 
   //All Message
  public function viewMessage(){
   $messages= DB::table('msgs')->latest('msgs.created_at')->get();
        //$messages = Message::simplePaginate(10);  

         return view('super_admin.messages.view', compact('messages'));
    }

 
  /*   public function createMessage(){
        return view('user.messages.create');
    } */
 public function storeMessage(Request $request){
          DB::table('messages')->insert([
          'sender'          => Auth::user()->id,
          'receiver'          => $request->receiver,
          'message'          => $request->message,
          'status'          => $request->status,
          'created_at'        => Carbon::now(),
          'updated_at'        => Carbon::now()
     ]);
    return response()->json(['success'=>"Changes saved successfully"]);
    }
    
     public function updateMessage(Request $request){
        $message = Message::findOrFail($request->id);
      $message->status = $request->title;
        $message->update();
    
    return response()->json(['success'=>"Changes updated successfully"]);
}
    
      public function deleteMessage($id){
         DB::table('msgs')->where('id', $id)->delete();
        //Message::destroy($id);
    return redirect()->route('super.viewmessage')->with(['success'=>'Message deleted successfully']);
    }

}