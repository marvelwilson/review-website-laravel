<?php

namespace satlex\Providers;

use Illuminate\Support\ServiceProvider;
use DB;
use App\Setting;
use View;
use satlex\Cat;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
  $setting=DB::table('settings')->where('id',1)->first();
         $banners= DB::table('banners')->latest('banners.created_at')->paginate(10);
         $projects= DB::table('projects')->latest('projects.created_at')->paginate(10);
         $projectfooter= DB::table('projects')->latest('projects.created_at')->paginate(3);
         $services= DB::table('services')->latest('services.created_at')->paginate(10);
         $testimonials= DB::table('testimonials')->latest('testimonials.created_at')->paginate(10);
            $cats = Cat::with(['subcategories'])->get();
        View::share(['setting'=> $setting,'banners'=>$banners,'projects'=>$projects,'testimonials'=>$testimonials,'services'=>$services,'cats'=>$cats,'projectfooter'=>$projectfooter]);
        view()->composer('*', function ($view) 
        {
        /*     if(\Auth::check()) {
                $user = \Auth::user();

                $wallet = DB::table('wallets')->where('owner_id', $user->id)->first();

                $view->with(['wallet'=>$wallet]); 
            } */
               
        }); 
    }
}