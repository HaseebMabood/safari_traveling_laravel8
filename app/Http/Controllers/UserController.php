<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Offer;
use App\Models\Contact;
use App\Mail\ContactUser;
use App\Models\AdminModel;
use App\Models\MoreDetail;
use App\Models\Slider_Image;
use Illuminate\Http\Request;
use App\Models\Welcome_message;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function index(){
        if (session()->has('loggedin_user')) {
            $user = AdminModel::where('id', '=', session('loggedin_user'))->first();
            $msg = Welcome_message::all();
            $data = [
                'userinfo' =>$user
            ];
            $offers = Offer::all();
            $details = MoreDetail::all();
            // fetching banners
            $banner = Slider_Image::all();
        }
        return view('guest_user/user',compact('msg','offers','details','banner'),$data);
    }


      //  logout
      public function logout(){
        if (session()->has('loggedin_user')) {
                session()->pull('loggedin_user');
                return redirect('admin/login')->with('error','Logout Successfully!');
        }
    }



       //  contact
       public function contact(){
        $banner = Slider_Image::all()->first(); //used to fetch a single first row and for last we use "last()"
        
        return view('guest_user/contact',compact('banner'));
    }



    public function detail($id){
        $data = Offer::find($id);
        $images = $data->images;
        return view('guest_user.detail',compact('images','data'));
    }



    public function gallery(){    
        $data = Offer::all();
        $banner = Slider_Image::all();
        return view('guest_user.show_gallery',compact('data','banner'));
    }



    public function contact_insert(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:contacts',
            'phone' => 'required',
            'location' => 'required',
            'subject' => 'required',
            'message' => 'required',
            
        ]);

        Mail::to('haseebmabood2017@gmail.com')->send(new ContactUser($data));

        $data = new Contact();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->location = $request->location;
        $data->subject = $request->subject;
        $data->message = $request->message;
        
        $data->save();

        return redirect('contact')->with('success2','Message send successfully!');
    }


    public function aboutus(){    
        $data = About::all();
        $banner = Slider_Image::all();
        return view('guest_user.aboutus',compact('data','banner'));
    }


}
