
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




    {{-- success2 flash message--}}

    @if(Session::has('success2'))
    <div class="alert alert-success">
    {{Session::get('success2')}}
     </div>
     @endif





<div class="banner_area">
<div  id="top" class="callbacks_container">
			      <ul class="rslides" id="slider4">
			        <li><img src="{{asset('safari/images/banner.jpg')}}" alt="" class="img-responsive" /></li>
                     <li><img src="{{asset('safari/images/banner2.jpg')}}" alt="" class="img-responsive" /></li>
                     <li><img src="{{asset('safari/images/banner3.jpg')}}" alt="" class="img-responsive" /></li>
			      </ul>
        </div><!--END OF ON BANNER BOX-->


</div><!--END OF BANNER AREA-->
<div class="clearfix"></div>

<div class="welcome">
	<div class="container">
<h1>About us</h1>
<ol class="breadcrumb">
	<li><a href="/user">Home</a></li>
    <li>About Us</li>
</ol>

    <div class="clearfix"></div>

    <div class="welcome_text">
        @foreach ($data as $d)
        <p>{!!$d->description!!}</p>
        @endforeach

        <ul class="list-unstyled">
            <li>- 3 to 10 Years Kids @ 39 AED</li>
            <li>- Join us at Direct Camp point only @ 39 AED</li>
            <li>- Per person pickup & Drop by bus From Dubai / Sharjah @ 60 AED</li>
            <li>Dubai's No.1 Company - Call us for Group Discount (+971- 55-828 90 14 )We are offering best family & kids deals.</li>
        </ul>
    </div><!--END OF WELCOME TEXT--->


    </div><!--END OF CONTAINER0-->
</div><!--END OF WELCOME-->

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
		$( "#datepicker_sec" ).datepicker();
    });
    </script>

</body>
</html>
