

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
<div class="banner_area">                
<img src="{{asset('safari/images/inner.jpg')}}" alt="" class="img-responsive" /></li>      
</div><!--END OF BANNER AREA-->
<div class="clearfix"></div>

<div class="welcome">
	<div class="container">
<h1>Contact Us</h1>
<ol class="breadcrumb">
	<li><a href="/user">Home</a></li>
    <li>Contact Us</li>
</ol>
    
   {{-- Validation errors --}}

   @if($errors)
   @foreach($errors->all() as $error)
   <p class="alert alert-danger">{{$error}}</p>
   @endforeach
  @endif

       {{-- success2 flash message--}}

       @if(Session::has('success2'))
       <div class="alert alert-success">
       {{Session::get('success2')}}
        </div>
        @endif


    <div class="contact row">
        <div class="col-md-7">
        	<h4>Send us a message</h4>
            <div class="row">


                <form action="{{url('/contact_insert')}}" method="post">
                    @csrf
            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="Username" {{old('name')}} >
            </div> <!--END OF COL MD 6-->
           
           <div class="col-md-6">
              <input type="email"  name="email" class="form-control" placeholder="Email" {{old('email')}} >
            </div> <!--END OF COL MD 6-->
            
            <div class="col-md-6">
              <input type="num"  name="phone" class="form-control" placeholder="Phone" {{old('num')}} >
            </div> <!--END OF COL MD 6-->
            <div class="col-md-6">
              <input type="text"  name="location" class="form-control" placeholder="Location" {{old('location')}}>
            </div> <!--END OF COL MD 6-->
            <div class="clearfix"></div>
            <div class="col-md-12">
              <input type="text"  name="subject" class="form-control" placeholder="Subject" {{old('subject')}} >
            </div> <!--END OF COL MD 12-->
            <div class="col-md-12">
              <textarea class="form-control" placeholder="Message"  name="message" ></textarea>

            <input type="submit" value="Submit" class="btn">
            </div> <!--END OF COL MD 12-->
        </form>





            </div><!--END OF ROW-->
        </div><!--END OF COL MD 6-->
                <div class="col-md-5">
         <h4>Address Info</h4>
         
         <ul class="list-unstyled">
         	<li><i class="fa fa-map-marker"></i> Office# FF132 Deas Trade Center Peshawar Pakistan</li>
            <li><i class="fa fa-phone"></i>+92 91 52505 60</li>
            <li><i class="fa fa-mobile"></i>+92 316 95014 00</li>
            <li><i class="fa fa-envelope"></i><a href="mailto:info@hostshowroom.ae">info@hostshowroom.ae</a></li>
         </ul>
         
         <h4>Our Land Mark</h4>
         <div class="map">
         <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d13229.747278058661!2d71.5071088!3d34.00699675!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1477386599895" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
         </div><!--END OF MAP-->
          </div><!--END OF COL MD 6-->
    </div><!--END OF HOTEL DETAIL-->  
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
    });
    </script>

</body>
</html>
