<?php

use App\Http\Controllers\AboutUs;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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

Route::get('/', function () {
    return view('backend/login');
});



Route::get('admin/login',[AdminController::class,'login'])->middleware('Alreadylogged');

Route::post('admin/login',[AdminController::class,'submit_login'])->name('auth.login');




Route::get('admin/dashboard',[AdminController::class,'dashboard'])->middleware('islogged');

//user dashboard
Route::get('user',[UserController::class,'index'])->middleware('isUserLogged');




Route::get('admin/register',[AdminController::class,'registration'])->middleware('Alreadylogged');

Route::post('registeration',[AdminController::class,'create'])->name('auth.registeration');




//admin logout
Route::get('logout/admin',[AdminController::class,'logout']);


//user logout

Route::get('logout',[UserController::class,'logout']);



//show users in admin dashboard
Route::get('users_show',[AdminController::class,'show_users'])->middleware('isUserLogged');

//Delete users in admin dashboard
Route::get('deleteuser/{id}',[AdminController::class,'delete_users'])->middleware('isUserLogged');


//show booking in admin dashboard
Route::get('booking_show',[AdminController::class,'show_booking'])->middleware('isUserLogged');

//Delete booking in admin dashboard
Route::get('deletebooking/{id}',[AdminController::class,'delete_booking'])->middleware('isUserLogged');


// fill booking  form by user
Route::post('booking',[AdminController::class,'booking'])->middleware('isUserLogged');




//input welcome message fields in admin dashboard
Route::get('welcomemessage',[AdminController::class,'put_welcome_msg'])->middleware('isUserLogged');


//inserting welcome message fields in admin dashboard
Route::post('message_insert',[AdminController::class,'inserting_msg'])->middleware('isUserLogged');


//Delete welcome message in admin dashboard
Route::get('deletemessage/{id}',[AdminController::class,'delete_message'])->middleware('isUserLogged');

//Edit welcome message in admin dashboard
Route::get('editmessage/{id}',[AdminController::class,'edit_message'])->middleware('isUserLogged');

//Updated welcome message in admin dashboard
Route::post('message_updated/{id}',[AdminController::class,'edited_message'])->middleware('isUserLogged');



// offers start

//input welcome message fields in admin dashboard
Route::get('offers',[AdminController::class,'input_offers'])->middleware('isUserLogged');

//inserting welcome message fields in admin dashboard
Route::post('offer_insert',[AdminController::class,'inserting_offer'])->middleware('isUserLogged');


//Delete offer in admin dashboard
Route::get('deleteoffer/{id}',[AdminController::class,'delete_offer'])->middleware('isUserLogged');


//editing in multi images in admin dashboard
Route::get('edit_multi/{id}',[AdminController::class,'edit_multi'])->middleware('isUserLogged');

//Updating multi images in admin dashboard
Route::post('editing_multi_image/{id}',[AdminController::class,'editing_multi'])->middleware('isUserLogged');


//Delete in multi images in admin dashboard
Route::get('delete_multi/{id}',[AdminController::class,'delete_multi'])->middleware('isUserLogged');

//Edit offer in admin dashboard
Route::get('editoffer/{id}',[AdminController::class,'edit_offer'])->middleware('isUserLogged');


//Updated offer in admin dashboard
Route::post('offer_updated/{id}',[AdminController::class,'edited_offer'])->middleware('isUserLogged');

//View offer multiple images in admin dashboard
Route::get('viewofferimages/{id}',[AdminController::class,'view_offer_images'])->middleware('isUserLogged');


//Add Offer fields in admin dashboard
Route::get('add_offer',[AdminController::class,'add_offer'])->middleware('isUserLogged');


//Add welcome message fields in admin dashboard
Route::get('add_message',[AdminController::class,'add_message'])->middleware('isUserLogged');

// end offer



//Detail in offer at user view
Route::get('/detail/{id}',[UserController::class,'detail'])->middleware('isUserLogged');


//contact us at user view
Route::get('/contact',[UserController::class,'contact'])->middleware('isUserLogged');


//contact insert at user view
Route::post('/contact_insert',[UserController::class,'contact_insert'])->middleware('isUserLogged');


//Gallery display at user view
Route::get('/gallery',[UserController::class,'gallery'])->middleware('isUserLogged');


// Admin panel
//Show user messages
Route::get('/user_messages',[AdminController::class,'user_messages'])->middleware('isUserLogged');



//Delete user message in admin dashboard
Route::get('deletemessage/{id}',[AdminController::class,'delete_usermessage'])->middleware('isUserLogged');



// Admin panel
//Show user messages
Route::resource('aboutus', AboutUs::class);;

//input welcome message fields in admin dashboard
Route::get('about',[UserController::class,'aboutus'])->middleware('isUserLogged');


//currency conversion at admin side
// Route::post('/currency_conversion',[AdminController::class,'currency_conversion'])->middleware('isUserLogged');



// More details started

//input welcome message fields in admin dashboard
Route::get('moredetails',[AdminController::class,'moredetails'])->middleware('isUserLogged');


//Add add details fields in admin dashboard
Route::get('add_details',[AdminController::class,'add_details'])->middleware('isUserLogged');

//inserting welcome message fields in admin dashboard
Route::post('detail_insert',[AdminController::class,'detail_insert'])->middleware('isUserLogged');

//Delete welcome message in admin dashboard
Route::get('deletedetails/{id}',[AdminController::class,'delete_details'])->middleware('isUserLogged');

//Edit welcome details in admin dashboard
Route::get('editdetails/{id}',[AdminController::class,'edit_details'])->middleware('isUserLogged');

//Updated details in admin dashboard
Route::post('details_updated/{id}',[AdminController::class,'edited_details'])->middleware('isUserLogged');


// More details ended


// slider started

Route::get('slider',[AdminController::class,'slider'])->middleware('isUserLogged');

// Route::get('/slider', function () {
//     return view('admin.slider');
// });

Route::get('add_slider',[AdminController::class,'add_slider'])->middleware('isUserLogged');


Route::post('inserting_sliders',[AdminController::class,'inserting_sliders'])->middleware('isUserLogged');


Route::get('edit_banner/{id}',[AdminController::class,'edit_banner'])->middleware('isUserLogged');


Route::post('editing_banner/{id}',[AdminController::class,'editing_banner'])->middleware('isUserLogged');


Route::get('delete_banner/{id}',[AdminController::class,'delete_banner'])->middleware('isUserLogged');

//slider ended

