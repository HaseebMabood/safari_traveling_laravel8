
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dubai Safari Trip</title>
<link rel="stylesheet" href="{{asset('safari/css/bootstrap.css')}}" type="text/css" media="screen">
<link rel="stylesheet" href="{{asset('safari/css/style.css')}}" />
<link rel="stylesheet" href="{{asset('safari/css/font-awesome.min.css')}}" />
<link rel="stylesheet" href="{{asset('safari/css/jquery-ui.css')}}" />

</head>
<div id="top"></div>
<body>
<div class="container">
	<div class="row">
    	<div class="col-md-3">
        	<div class="logo">
            	<img src="{{asset('safari/images/logo.jpg')}}" alt="" class="img-responsive" />
            </div><!--END LOGO-->
        </div><!--END OF COL MD 3-->


       {{-- topbar started --}}


       @include('guest_user.topbar')


       {{-- topbar started --}}





    </div><!--END OF ROW-->
</div><!--END OF CONTAINER-->

                                        <div class="ml-5">
                                            {{-- success flash message--}}

                                            @if(Session::has('success'))
                                           <div class="alert alert-success">
                                           Welcome {{$userinfo->name}} {{Session::get('success')}}
                                            </div>
                                            @endif

                                        </div>




                                             {{-- success2 flash message--}}

                                             @if(Session::has('success2'))
                                             <div class="alert alert-success">
                                             {{Session::get('success2')}}
                                              </div>
                                              @endif

                                          </div>



<div class="banner_area">
<div  id="top" class="callbacks_container">
			      <ul class="rslides" id="slider4">
			        <li><img src="{{asset('safari/images/banner.jpg')}}" alt="" class="img-responsive" /></li>
                     <li><img src="{{asset('safari/images/banner2.jpg')}}" alt="" class="img-responsive" /></li>
                     <li><img src="{{asset('safari/images/banner3.jpg')}}" alt="" class="img-responsive" /></li>
			      </ul>
        </div><!--END OF ON BANNER BOX-->




        @include('guest_user.bookingForm')




</div><!--END OF BANNER AREA-->
<div class="clearfix"></div>

<div class="welcome">
	<div class="container">
    	<div class="welcome_text text-center">
            @foreach ($msg as $msg)

        	<h3>{{$msg->title}}</h3>

            <p>{!!$msg->description!!}</p>
            <ul class="list-unstyled">
            	<li>- 3 to 10 Years Kids @ 39 AED</li>
                <li>- Join us at Direct Camp point only @ 39 AED</li>
                <li>- Per person pickup & Drop by bus From Dubai / Sharjah @ 60 AED</li>
                <li>Dubai's No.1 Company - Call us for Group Discount (+971- 55-828 90 14 )We are offering best family & kids deals.</li>
            </ul>
            @endforeach
        </div><!--END OF WELCOME TEXT--->
<div class="clearfix"></div>

<div class="list row" >
    @foreach ($offers as $off )
	<div class="col-md-6" >


            <div class="col-md-6 no_padding view">
            	<img src="offer_images/{{ $off->thumbnail}}" alt="" class="img-responsive" />
                <h4>
                    {{-- displaying currency --}}

                    {{$off->currency}}


                    {{$off->price}}/-</h4>
            </div><!--END OF COL MD 6-->

            <div class="col-md-6 no_padding details">
            	<h3>{{$off->title}} <span>{{$off->country}}</span></h3>
                <p>{{$off->description}}</p>
                <a href="{{url('/detail',$off->id)}}" class="btn">Detail</a>
            </div><!--END OF COL MD 6-->


    </div><!--END OF COL MD 6-->
    @endforeach

    </div><!--END OF COL MD 6-->
</div><!--END OF LIST-->
    </div><!--END OF CONTAINER0-->
</div><!--END OF WELCOME-->
<div class="container">
<div class="bottom_detail text-center">
	<h3>DESERT SAFARI DUBAI</h3>
            <p>Desert Safari Dubai is a crazy Desert safari ride from Arabian Company that will bring you here and there in the sand hills. You will enjoy the Dune Bashing in the middle of the desert safari and you will get a chance to take photos and taking a gander at the delightful encompassing around you. After that, you proceed with the excursion and land into a camp to see the desert and walk in the desert, do the camel ride. Then you will go to the Camp for Amazing Traditional Entertainment and BBQ + Boofa Dinner with unlimited soft drinks. The Arabian Desert covers the majority of Arab Emirates. Desert Dubai known as largest desert in the world and also the hottest. The borders of the Desert include Dubai, Sharjah, Ajman, We know after your desert safari Dubai and dune bashing in your Dubai trip you will not forget it in all of your life, it is unforgettable journey. Most interesting word is not enough for Desert Safari Dubai , you can say it is Awesome exciting activity.</p>
            <ul class="list-unstyled">
            	<li>- 3 to 10 Years Kids @ 39 AED</li>
                <li>- Join us at Direct Camp point only @ 39 AED</li>
                <li>- Per person pickup & Drop by bus From Dubai / Sharjah @ 60 AED</li>
                <li>Dubai's No.1 Company - Call us for Group Discount (+971- 55-828 90 14 )We are offering best family & kids deals.</li>
            </ul>

            <h3>DESERT SAFARI NIGHTS</h3>
            <p>Desert Safari Dubai is a crazy Desert safari ride from Arabian Company that will bring you here and there in the sand hills. You will enjoy the Dune Bashing in the middle of the desert safari and you will get a chance to take photos and taking a gander at the delightful encompassing around you. After that, you proceed with the excursion and land into a camp to see the desert and walk in the desert, do the camel ride. Then you will go to the Camp for Amazing Traditional Entertainment and BBQ + Boofa Dinner with unlimited soft drinks. The Arabian Desert covers the majority of Arab Emirates. Desert Dubai known as largest desert in the world and also the hottest. The borders of the Desert include Dubai, Sharjah, Ajman, We know after your desert safari Dubai and dune bashing in your Dubai trip you will not forget it in all of your life, it is unforgettable journey. Most interesting word is not enough for Desert Safari Dubai , you can say it is Awesome exciting activity.</p>
            <ul class="list-unstyled">
            	<li>- 3 to 10 Years Kids @ 39 AED</li>
                <li>- Join us at Direct Camp point only @ 39 AED</li>
                <li>- Per person pickup & Drop by bus From Dubai / Sharjah @ 60 AED</li>
                <li>Dubai's No.1 Company - Call us for Group Discount (+971- 55-828 90 14 )We are offering best family & kids deals.</li>
            </ul>
            <p>ment and BBQ + Boofa Dinner with unlimited soft drinks. The Arabian Desert covers the majority of Arab Emirates. Desert Dubai known as largest desert in the world and also the hottest. The borders of the Desert include Dubai, Sharjah, Ajman, We know after your desert safari Dubai and dune bashing in your Dubai trip you will not forget it in all of your life, it is unforgettable journey. Most interesting word is not enough for Desert Safari Dubai , you can say it is Awesome exciting activity.</p>
</div><!--END OF BOTTOM DETAIL-->
</div><!--END OF CONTAINER-->
<div class="back_top"><a href="#top"><img src="{{asset('safari/images/back_top.png')}}" alt="" class="img-responsive" /></a></div><!--END OF BACK TOP-->
<div class="footer">
	<div class="container">
    	<div class="col-md-3">
        	<div class="footer_left">
            	<img src="{{asset('safari/images/footer_logo.png')}}" alt="" class="img-responsive" />
                <ul class="list-unstyled">
                	<li>8/27 Cathey House, 7th Floor, Silom,</li>
                    <li>Bangrak, Bangkok 10500, THAILAND</li>
                    <li>Tel: +662 696 8770 (10 channels)</li>
                    <li>E-mail: ambika@ambikatours.com</li>
                </ul>
            </div><!--END OF FOOTER LEFT-->
        </div><!--EMD OF COL MD 3-->

        <div class="col-md-9">
        	<div class="top_footer">
             <h4><span>Call today:</span> +662 696 8770</h4>
            	<ul class="list-inline">
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                	<li><a href="#"><i class="fa fa-facebook"></i></a></li>
                </ul>

            </div><!--END OF TOP FOOTER-->
            <div class="links">
            	<ul class="list-inline">
                	<li><a href="#">Home</a></li>
                    <li><a href="#">Air Tickets</a></li>
                    <li><a href="#">Hotels</a></li>
                    <li><a href="#">Transpotation</a></li>
                    <li><a href="#">City Tours</a></li>
                    <li><a href="#">Packages</a></li>
                    <li><a href="#">Golf Tourism</a></li>
                    <li><a href="#">Special Promotions</a></li>
                    <li><a href="#">Testomonial</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Sitemap</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
                <p>&copy; Ambika tours all rights reserved</p>
            </div><!--END OF LINKS-->
        </div><!--END OF COL MD 9-->
    </div><!--END OF CONTAINER0-->
</div><!--END OF FOOTER-->
<script type="text/javascript" src="{{asset('safari/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('safari/js/bootstrap.min.js')}}"></script>
<script src="{{asset('safari/js/responsiveslides.min.js')}}"></script>
<script type="text/jscript" src="{{asset('safari/js/custom.js')}}"></script>
<script src="{{asset('safari/js/jquery-ui.js')}}"></script>
    <script>
    $(function() {
        $( "#datepicker" ).datepicker();
    });
    </script>
</body>
</html>
