<?php

namespace satlex\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Carbon\Carbon;
use satlex\Plan;
use satlex\User;

class UserController extends Controller
{
      public function index(){
        return view('user.index'); 
    }


    public function indexProfile(){
   $user= DB::table('users')->where('id', '=', Auth::user()->id)->first();
        //$users = Account::simplePaginate(10);
         return view('user.profile', compact('user'));
    }


     public function updateProfile(Request $request){
        $user = User::findOrFail(Auth::user()->id);
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


      //Document group...........................
//........................................
 
   //All Document
  public function viewDocument(){
   $documents= DB::table('documents')->where('user_id', Auth::user()->id)->latest('documents.created_at')->get();
   $recentdoc= DB::table('documents')->where('user_id', Auth::user()->id)->latest('documents.created_at')->get();
        //$documents = Document::simplePaginate(10);
    $user= DB::table('users')->where('id', '=', Auth::user()->id)->first();   

         return view('user.documents.view', compact('documents','user','recentdoc'));
    }

 
  /*   public function createDocument(){
        return view('user.documents.create');
    } */
 public function storeDocument(Request $request){
          DB::table('documents')->insert([
          'user_id'          => Auth::user()->id,
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



      public function invest(){
    $invests= DB::table('plans')->simplePaginate(10);
        return view('user.invest',compact('invests')); 
    }

      public function investForm($id){
          $plan= DB::table('plans')->where('id', $id)->first();
        //$users = Account::simplePaginate(10);
         return view('user.invest-form', compact('plan'));
    }
}