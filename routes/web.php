<?php
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', "HomeController@index")->name('home');
Route::get('/vision/mission', "HomeController@vision")->name('vision');
Route::get('/about', "HomeController@about")->name('about');
Route::get('/project', "HomeController@project")->name('project');
Route::get('/project-details/2021{id}0606', "HomeController@projectDetails")->name('projectdetails');
Route::get('/product', "HomeController@product")->name('product');
Route::get('/shop/21DEYFy{cat}igIG/{subcat}Y89YYTr', "HomeController@subcatitems")->name('subcatitems');
Route::get('/product-details/2021{id}0606', "HomeController@productDetails")->name('productdetails');
Route::get('/testimonials', "HomeController@testimonials")->name('testimonials');
Route::get('/services', "HomeController@services")->name('services');
Route::get('/contact', "HomeController@contact")->name('contact');
Route::get('/resources', "HomeController@resources")->name('resources');
Route::post('/contact', "HomeController@sendMsg")->name('sendMsg');

Auth::routes();

Route::middleware(['user'])->group(function(){
Route::get('/dashboard', "UserController@index")->name('user.dashboard');
Route::get('/user/profile', 'UserController@indexProfile')->name('user.viewprofile');
Route::post('/user/update-profile', 'UserController@updateProfile')->name('user.updateprofile');

Route::get('/user/documents', 'UserController@viewDocument')->name('user.viewdocument');
Route::post('/store-document', 'UserController@storeDocument')->name('user.storedocument');
Route::post('/update-document', 'UserController@updateDocument')->name('user.updatedocument');
Route::get('/delete-document/{id}', 'UserController@deleteDocument')->name('user.deletedocument');
   });
   
Route::middleware(['customer'])->group(function(){
Route::get('/cs/dashboard', "CustomerController@index")->name('customer.dashboard');
Route::get('/cs/profile', 'CustomerController@indexProfile')->name('customer.viewprofile');
Route::post('/cs/update-profile', 'CustomerController@updateProfile')->name('customer.updateprofile');

Route::get('/cs/view-review', 'CustomerController@viewReview')->name('customer.viewreview');
Route::get('/cs/create-review', 'CustomerController@createReview')->name('customer.createreview');
Route::post('/cs/store-review', 'CustomerController@storeReview')->name('customer.storereview');
Route::post('/cs/update-review', 'CustomerController@updateReview')->name('customer.updatereview');
Route::get('/cs/delete-review/{id}', 'CustomerController@deleteReview')->name('customer.deletereview');
   });
   

Route::middleware(['super'])->group(function(){ 
Route::get('/sp/profile/65FD2{id}USR2021', 'SuperController@indexProfile')->name('super.viewprofile');
Route::get('/sp/dashboard', "SuperController@index")->name('super.dashboard');
Route::get('/sp/setting', "SuperController@setting")->name('super.setting');
Route::post('/sp/update-profile', 'SuperController@updateProfile')->name('super.updateprofile');
Route::post('/sp/update-setting', 'SuperController@updateSetting')->name('super.updatesetting');

Route::get('/sp/user/{type}', 'SuperController@viewUser')->name('super.viewuser');
Route::post('/store-user', 'SuperController@storeUser')->name('super.storeuser');
Route::post('/update-user', 'SuperController@updateUser')->name('super.updateuser');
Route::post('/delete-user', 'SuperController@deleteUser')->name('super.deleteuser');

Route::get('/sp/view-product', 'SuperController@viewProduct')->name('super.viewproduct');
Route::post('/sp/store-product', 'SuperController@storeProduct')->name('super.storeproduct');
Route::post('/sp/update-product', 'SuperController@updateProduct')->name('super.updateproduct');
Route::get('/sp/delete-product/{id}', 'SuperController@deleteProduct')->name('super.deleteproduct');


Route::get('/sp/services', 'SuperController@viewService')->name('super.viewservice');
Route::post('/store-service', 'SuperController@storeService')->name('super.storeservice');
Route::post('/update-service', 'SuperController@updateService')->name('super.updateservice');
Route::get('/delete-service/{id}', 'SuperController@deleteService')->name('super.deleteservice');

Route::get('/sp/projects', 'SuperController@viewProject')->name('super.viewproject');
Route::post('/store-project', 'SuperController@storeProject')->name('super.storeproject');
Route::post('/update-project', 'SuperController@updateProject')->name('super.updateproject');
Route::get('/delete-project/{id}', 'SuperController@deleteProject')->name('super.deleteproject');

Route::get('/sp/banners', 'SuperController@viewBanner')->name('super.viewbanner');
Route::post('/store-banner', 'SuperController@storeBanner')->name('super.storebanner');
Route::post('/update-banner', 'SuperController@updateBanner')->name('super.updatebanner');
Route::get('/delete-banner/{id}', 'SuperController@deleteBanner')->name('super.deletebanner');

Route::get('/sp/documents/{id}', 'SuperController@viewDocument')->name('super.viewdocument');
Route::post('/store-document', 'SuperController@storeDocument')->name('super.storedocument');
Route::post('/update-document', 'SuperController@updateDocument')->name('super.updatedocument');
Route::get('/delete-document/{id}', 'SuperController@deleteDocument')->name('super.deletedocument');

Route::get('/sp/testimonials', 'SuperController@viewTestimonial')->name('super.viewtestimonial');
Route::post('/store-testimonial', 'SuperController@storeTestimonial')->name('super.storetestimonial');
Route::post('/update-testimonial', 'SuperController@updateTestimonial')->name('super.updatetestimonial');
Route::get('/delete-testimonial/{id}', 'SuperController@deleteTestimonial')->name('super.deletetestimonial');

Route::get('/sp/messages', 'SuperController@viewMessage')->name('super.viewmessage');
Route::post('/store-message', 'SuperController@storeMessage')->name('super.storemessage');
Route::post('/update-message', 'SuperController@updateMessage')->name('super.updatemessage');
Route::get('/delete-message/{id}', 'SuperController@deleteMessage')->name('super.deletemessage');

Route::get('/sp/view-cat', 'SuperController@viewCat')->name('super.viewcat');
Route::post('/sp/store-cat', 'SuperController@storeCat')->name('super.storecat');
Route::post('/sp/update-cat', 'SuperController@updateCat')->name('super.updatecat');
Route::get('/sp/delete-cat/{id}', 'SuperController@deleteCat')->name('super.deletecat');

Route::get('/sp/view-subcat', 'SuperController@viewSubcat')->name('super.viewsubcat');
Route::post('/sp/store-subcat', 'SuperController@storeSubcat')->name('super.storesubcat');
Route::post('/sp/update-subcat', 'SuperController@updateSubcat')->name('super.updatesubcat');
Route::get('/sp/delete-subcat/{id}', 'SuperController@deleteSubcat')->name('super.deletesubcat');
   });


Route::middleware(['admin'])->group(function(){
Route::get('/admin', "AdminController@index")->name("admin.dashboard");
Route::get('/profile', 'AdminController@indexProfile')->name('admin.viewprofile');
Route::post('/update-profile', 'AdminController@updateProfile')->name('admin.updateprofile');
    
    
Route::get('/setting', 'AdminController@setting')->name('admin.viewsetting');
Route::post('/update-setting', 'AdminController@updateSetting')->name('admin.updatesetting');


Route::get('/view-blog', 'AdminController@viewBlog')->name('admin.viewblog');
Route::post('/store-blog', 'AdminController@storeBlog')->name('admin.storeblog');
Route::post('/update-blog', 'AdminController@updateBlog')->name('admin.updateblog');
Route::get('/delete-blog/{id}', 'AdminController@deleteBlog')->name('admin.deleteblog');

Route::get('/view-staff', 'AdminController@viewStaff')->name('admin.viewstaff');
Route::post('/store-staff', 'AdminController@storeStaff')->name('admin.storestaff');
Route::post('/update-staff', 'AdminController@updateStaff')->name('admin.updatestaff');
Route::get('/delete-staff/{id}', 'AdminController@deleteStaff')->name('admin.deletestaff');

Route::get('/view-album', 'AdminController@viewAlbum')->name('admin.viewalbum');
Route::post('/store-album', 'AdminController@storeAlbum')->name('admin.storealbum');
Route::post('/update-album', 'AdminController@updateAlbum')->name('admin.updatealbum');
Route::get('/delete-album/{id}', 'AdminController@deleteAlbum')->name('admin.deletealbum');

Route::get('/view-event', 'AdminController@viewEvent')->name('admin.viewevent');
Route::post('/store-event', 'AdminController@storeEvent')->name('admin.storeevent');
Route::post('/update-event', 'AdminController@updateEvent')->name('admin.updateevent');
Route::get('/delete-event/{id}', 'AdminController@deleteEvent')->name('admin.deleteevent');

Route::get('/view-gallery/{id}', 'AdminController@viewGallery')->name('admin.viewgallery');
Route::post('/store-gallery', 'AdminController@storeGallery')->name('admin.storegallery');
Route::post('/update-gallery', 'AdminController@updateGallery')->name('admin.updategallery');
Route::get('/delete-gallery/{id}', 'AdminController@deleteGallery')->name('admin.deletegallery');
   
/* Route::get('/view-testimonial', 'AdminController@viewTestimonial')->name('admin.viewtestimonial');
Route::post('/store-testimonial', 'AdminController@storeTestimonial')->name('admin.storetestimonial');
Route::post('/update-testimonial', 'AdminController@updateTestimonial')->name('admin.updatetestimonial');
Route::get('/delete-testimonial/{id}', 'AdminController@deleteTestimonial')->name('admin.deletetestimonial'); */
   
Route::get('/view-resource', 'AdminController@viewResource')->name('admin.viewresource');
Route::post('/store-resource', 'AdminController@storeResource')->name('admin.storeresource');
Route::post('/update-resource', 'AdminController@updateResource')->name('admin.updateresource');
Route::get('/delete-resource/{id}', 'AdminController@deleteResource')->name('admin.deleteresource');

Route::get('/view-message', 'AdminController@viewMessage')->name('admin.viewmessage');
//Route::get('/delete-message/{id}', 'AdminController@deleteMessage')->name('admin.deletemessage');

Route::get('/view-volunteer', 'AdminController@viewVolunteer')->name('admin.viewvolunteer');
Route::get('/delete-volunteer/{id}', 'AdminController@deleteVolunteer')->name('admin.deletevolunteer');

});