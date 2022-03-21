<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Offer;
use App\Models\Booking;
use App\Models\Contact;
use App\Models\AdminModel;
use Illuminate\Http\Request;
use App\Models\Welcome_message;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use AmrShawky\LaravelCurrency\Facade\Currency;



class AdminController extends Controller
{
    public function login(){
        return view('backend/login');
    }

    public function submit_login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = AdminModel::where('email', '=', $request->email)->first();

        if($user){

            if (Hash::check($request->password, $user->password)) {

                    if($user->usertype == '1'){

                         $request->session()->put('loggedin_user',$user->id);
                         return redirect('admin/dashboard')->with('success','You are Loggedin successfully!');
                        }else{

                            $request->session()->put('loggedin_user',$user->id);
                            return redirect('user')->with('success','You are Loggedin successfully!');
                        }

            } else {
                 return back()->with('error','Invalid password.');
            }


        }else{
                return back()->with('error','No account found for this email.');
        }
    }

    public function dashboard(){
        if (session()->has('loggedin_user')) {
            $user = AdminModel::where('id', '=', session('loggedin_user'))->first();
            $data = [
                'userinfo' =>$user
            ];
        }
        return view('admin/admin_dash',$data);
    }


    public function registration(){
        return view('backend/register');
    }



    //registeration process
    public function create(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admin_models',
            'password' => 'required|min:5|max:12'
        ]);

        $data = new AdminModel();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $query = $data->save();

        if ($query) {
            return redirect('admin/login')->with('success','You have been registered successfully. You can log in now!');
        }else{
            return back()->with('error','Registration failed!');
        }
    }



    //  logout
    public function logout(){
        if (session()->has('loggedin_user')) {
                session()->pull('loggedin_user');
                return redirect('admin/login')->with('error','Logout Successfully!');
        }
    }



        //  show users in admin dashboard
        public function show_users(Request $request){

            if ($request->search) {
                $data = AdminModel::where('name','like','%' . $request->search . '%')->
                orWhere('email','like','%' . $request->search . '%')->latest()->simplepaginate(4);
            }
            else{
                $data = AdminModel::all();
            }

                    return view('admin.showuser',compact('data'));

        }



         //  delete users in admin dashboard
         public function delete_users($id){

            $data = AdminModel::find($id);
            $data->delete();
              return redirect('users_show')->with('success','User deleted successfully!');

             }




                //  store booking data from user view
         public function booking(Request $request){

                $data = new Booking();

                $data->name = $request->name ;
                $data->email = $request-> email;
                $data->contact = $request->contact ;
                $data->adults = $request->adults ;
                $data->children = $request->children ;
                $data->interest = $request->interest;
                $data->date = $request->date;
                $data->message = $request->message;

                $data->save();

                return redirect()->back()->with('success2', 'Booking Submitted Successfully!');


             }




               //  show booking in admin dashboard
        public function show_booking(Request $request){
            if ($request->search) {
                $data = Booking::where('name','like','%' . $request->search . '%')->
                orWhere('email','like','%' . $request->search . '%')->
                orWhere('contact','like','%' . $request->search . '%')
                ->latest()->simplepaginate(4);
            }
            else{
                $data = Booking::all();
            }

            
              return view('admin.showbooking',compact('data'));

  }




            //  delete users in admin dashboard
         public function delete_booking($id){

            $data = Booking::find($id);
            $data->delete();
              return redirect()->back()->with('success','Booking deleted successfully!');

             }




//  welcome message start

          //  Putting welcome message in admin dashboard
         public function put_welcome_msg(){

                $data = Welcome_message::all();
                 return view('admin.input_welcome_msg',compact('data'));


             }


            //  add message button
             public function add_message(){

                return view('admin.addmsg');

                 }




                 //  Inserting welcome message in admin dashboard
         public function inserting_msg(Request $request){

            $data= new Welcome_message();


            $data->title = $request->title;
            $data->description = $request->description;
            $data->save();

            return redirect('welcomemessage')->with('success','Message added successfully!');


        }



          //  delete users in admin dashboard
          public function delete_message($id){

            $data = Welcome_message::find($id);
            $data->delete();
              return redirect()->back()->with('success','Message deleted successfully!');

             }


             public function edit_message($id){

                $data= Welcome_message::find($id);
                return view("admin.edit_msg", compact('data'));

                 }



                 public function edited_message(Request $request,$id){

                    $data = Welcome_message::find($id);

                    $data->title = $request->title;
                    $data->description = $request->description;
                    $data->save();

                    return redirect('welcomemessage')->with('success','Message Updated successfully!');

                     }

                    //  welcome message end




                    //  offers start

          //  Putting offers in admin dashboard
         public function input_offers(Request $request){

            if ($request->search) {
                $data = Offer::where('title','like','%' . $request->search . '%')->
                orWhere('country','like','%' . $request->search . '%')->
                orWhere('description','like','%' . $request->search . '%')->
                orWhere('price','like','%' . $request->search . '%')
                ->latest()->simplepaginate(4);
            }
            else{
                $data = Offer::all();
            }
             
             return view('admin.input_offers',compact('data'));
         }



         public function add_offer(){

            $codes = Currency::rates()->latest()->get();
            return view('admin.addoffer',compact('codes'));

             }



         public function inserting_offer(Request $request){



            // $request->validate([

            //     'image' => 'required | image',

            // ]);
            $data= new Offer();


            $thumbnail = $request->thumbnail;

            if ($thumbnail) {

                $imagename = time().'.'. $thumbnail->getClientOriginalExtension();

                $request->thumbnail->move('offer_images', $imagename);

                $data->thumbnail = $imagename;
                // dd('osho');

            }


            $data->title = $request->title;
            $data->country = $request->country;
            $data->description = $request->description;
            $data->price = $request->price;
            $data->currency = $request->currency;
            $data->save();




            // now storing multiple images
            if ($request->hasfile('images')) {

                    foreach($request->file('images') as $img){

                        // $name = time().'.'. $img->getClientOriginalExtension();

                        $name = time().rand(1,1000).'.'.$img->extension();

                        $img->move(public_path('offer_images'), $name);

                        Image::create([

                            'offer_id' => $data->id,
                            'images' =>$name

                        ]);
                        // dd('osho');

                    }



            }




            return redirect('offers')->with('success','Offer added successfully!');


        }



        public function delete_offer($id){

            $data = Offer::find($id);
            $data->delete();
              return redirect()->back()->with('success','Offer deleted successfully!');

             }




             public function delete_multi($id){

                $data = Image::find($id);
                $data->delete();
                  return redirect()->back()->with('success','Image deleted successfully!');

                 }

                 public function edit_multi($id){

                    $data = Image::find($id);
                    // $offer = $data->offers;
                    // dd($data);

                    return view('admin.edit_multi_image',compact('data'));
                     }



                     public function editing_multi(Request $request,$id){

                        $data = Image::find($id);

                        // $request->validate([

               //     'image' => 'required | image',

               // ]);



               $image = $request->image;

               if ($image) {

                   $imagename = time().'.'. $image->getClientOriginalExtension();

                   $request->image->move('offer_images', $imagename);

                   $data->images = $imagename;
                   // dd('osho');

               }
                       $data->save();
                       return redirect()->back()->with('success','Image Updated successfully!');

                         }




             public function edit_offer($id){

                $data= Offer::find($id);

                return view("admin.edit_offer", compact('data'));

                 }




                 public function edited_offer(Request $request,$id){

                    $data = Offer::find($id);

                     // $request->validate([

            //     'image' => 'required | image',

            // ]);



            $thumbnail = $request->thumbnail;

            if ($thumbnail) {

                $imagename = time().'.'. $thumbnail->getClientOriginalExtension();

                $request->thumbnail->move('offer_images', $imagename);

                $data->thumbnail = $imagename;
                // dd('osho');

            }



                    $data->title = $request->title;
                    $data->country = $request->country;
                    $data->description = $request->description;
                    $data->price = $request->price;
                    $data->currency = $request->currency;
                    $data->save();




                     // now updating multiple images
            if ($request->hasfile('images')) {

                foreach($request->file('images') as $img){

                    // $name = time().'.'. $img->getClientOriginalExtension();

                    $name = time().rand(1,1000).'.'.$img->extension();

                    $img->move(public_path('offer_images'), $name);


                    // dd($data->id);
                    // $img_id = $data->id;
                    // dd($img_id); //working
                    // $img_row = Image::find($data->id);
                    // dd($img_row);

                    // $data2 = Image::select('*')
                    // ->where('offer_id' , '=', $img_id)
                    // ->get();
                    // dd($data2);//working

                    // dd($img_row);
                    // $data2->offer_id = $img_id;
                    // $data2->images = $name;

                    Image::create([

                        'offer_id' => $data->id,
                        'images' =>$name

                    ]);


                }



        }

                    return redirect('offers')->with('success','Offer Updated successfully!');

                     }




                     public function view_offer_images($id){

                        $data= Offer::find($id);
                        $images = $data->images;
                        return view("admin.view_offer_images", compact('images','data'));

                         }


                    //  end-offer





                    // User message
                    public function user_messages(Request $request){

                        if ($request->search) {
                            $dataa = Contact::where('name','like','%' . $request->search . '%')->
                            orWhere('email','like','%' . $request->search . '%')->latest()->simplepaginate(4);
                        }
                        else{
                             // $data= Contact::latest()->paginate(3);
                        $dataa = DB::table('contacts')->simplePaginate(4);

                        }

                       
                        return view("admin.user_messages", compact('dataa'));

                         }


                         public function delete_usermessage($id){

                            $data = Contact::find($id);
                            $data->delete();
                              return redirect()->back()->with('success','Message deleted successfully!');

                             }

                            //  end-user message



                            public function currency_conversion(Request $request){
                                $converted = Currency::convert()
                                ->from($request->from)
                                ->to($request->to)
                                ->amount($request->amount)
                                ->round(2)
                                ->get();
                                return back()->with([
                                    'conversion' => $request->amount . ' ' . $request->from . ' is equal to ' . $converted . ' ' . $request->to,
                                    'amount' => $request->amount,
                                    'from' => $request->from,
                                    'to' => $request->to
                                ]);
    
                                 }
    





}
