
<!DOCTYPE html>
<html lang="en">

<head>

@include('admin.admincss')

</head>





<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       @include('admin.sidebar')
        <!-- End of Sidebar -->


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('admin.topbar')
                <!-- End of Topbar -->







                     <!-- Begin Page Content -->
                     <div class="container-fluid">

                        <!-- Page Heading -->
                      

                         {{-- success flash message--}}
                        {{-- @include('admin.success_msg') --}}


{{--back button  --}}

<a href="/offers" class="btn btn-outline-dark btn-lg  ">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
    </svg>
        <b>Back</b>
    </a>

    {{-- end back button --}}


                        {{-- form start --}}

                        <div class="container col-md-12 text-black mt-5" >
                            <form action="{{url('/offer_insert')}}" method="post" enctype="multipart/form-data" >

                                @csrf


                          <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" value="{{old('title')}}" placeholder="" class="form-control"  required>
                          </div>

                          <div class="form-group">
                            <label for="">Country</label>
                            <input type="text" name="country" value="{{old('country')}}" placeholder="" class="form-control"  required>
                          </div>

                          <div class="form-group">
                            <label for="">Description</label>

                            <textarea name="description" class="form-control"></textarea>
                          </div>






                            {{-- <div class="form-group">
                                <label for="">Currency</label>
                                <select name="currency" id="" class="form-control">
                                    <option value="" selected disabled>--Select--</option>
                                    <option value="pkr">Pkr</option>
                                    <option value="aed">Aed</option>
                                    <option value="pound">Pound</option>

                                </select>
                            </div> --}}



                            {{-- currency conversion --}}

                            {{-- <form action="{{url('/currency_conversion')}}" method="post" >

                                @csrf
                       <div class="row">

                            <div class="col-3">
                                <div class="form-group">
                                    <label for="">Amount</label>
                                    <input  type="text" name="amount" value="{{old('amount')}}" placeholder="1.00" class="form-control" required>
                                </div>
                            </div>


                            <div class="col-3">
                                <div class="form-group">
                                    <label for="">From</label>
                                    <select name="from" id="" class="form-control">


                                        @foreach ($codes as $code => $value )
                                        <option {{$code == 'PKR' ? 'selected' : ''}}>{{$code}}</option>
                                        @endforeach

                                    </select>
                                </div>

                             </div>

                             <div class="col-3">
                                 <div class="form-group">
                                <label for="">To</label>
                                <select name="to" id="" class="form-control">

                                    @foreach ($codes as $code => $value )
                                    <option {{$code == 'USD' ? 'selected' : ''}}>{{$code}}</option>
                                    @endforeach


                                </select>
                            </div>
                                </div>

                            <div class="col-3">
                            <button type="submit" class="btn btn-info mt-4">Convert</button>
                             </div>
                     </div>
                            </form>


                            <div class="form-group">
                                <label for="">Price</label>
                                @if (session('conversion'))
                                <input  type="text" value="{{ session('conversion') }}" placeholder="" class="form-control" required>
                                @endif
                            </div> --}}

<br>

{{-- @if (session('conversion'))
<div class="text-black-500 text-center pt-12 font-bold text-5xl w-4/5 mx-auto">
    {{ session('conversion') }}
</div>
@endif --}}
                          {{-- End currency conversion --}}





{{-- start  --}}
                          {{-- <div class="row align-items-center">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Price</label>

                                        <input  type="num" value="{{ old('price') }}" placeholder="" class="form-control" required>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <h5 class="text-success">PKR</h5>
                                </div>
                        </div>

                        <div class="row align-items-center">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5 for="">Please select currency to show</h5>
                                    <input type="radio" name="season" value="winter" checked>&nbsp; USD &nbsp;
                                    <input type="radio" name="season" value="spring"> &nbsp; EUR &nbsp;
                                    <input type="radio" name="season" value="summer">&nbsp; AED &nbsp;
                                    <input type="radio" name="season" value="autumn">&nbsp; POUND
                                </div>
                            </div>

                            <div class="col-md-6">
                                <h5>Currency:</h5>
                            </div>
                    </div> --}}

{{-- end --}}



                    <div class="row align-items-center">
                        <div class="col-md-4">
                   

                            <input type="number" class = "form-control" name="price" id="myinput" placeholder="Enter price in pkr" min="0"><br>



                                <label for="" class="text-info"><b>In Dollars: </label>
                                <div id="dollarid" class="text-success"></div>


                                <label for="" class="text-info">In Pounds:</label>
                                <div id="poundid" class="text-success"></div>



                                <label for="" class="text-info"><b>In Euros:</b> </label>
                                <div id="eurosid" class="text-success"></div>

        
                        </div>

                    </div>


                          <div class="form-group mt-3">
                            <label for="">Thumbnail</label>
                            <input type="file" name="thumbnail" class="form-control"  required>
                          </div>


                          <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" name="images[]" multiple  class="form-control"  required>
                          </div>






                              <input type="submit" value="Submit" class="btn btn-lg btn-success" >

                      </form>
                        </div>
                        {{-- end-form --}}


                    </div>
                    <!-- /.container-fluid -->






            <!-- Footer -->
       @include('admin.adminfooter')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
   @include('admin.logout_modal')

   @include('admin.adminscript')
{{-- script start --}}






                        {{-- script end --}}

          <script>

                const inserted = document.getElementById('myinput')

                inserted.addEventListener('input',function(event)
                  {
                            let converted=event.target.value

                            let dollarValue=document.getElementById('dollarid')
                            dollarValue.innerHTML = (converted /181.30).toFixed(2);

                            let poundsValue=document.getElementById('poundid')
                            poundsValue.innerHTML = (converted /240.45).toFixed(2);

                            let euroValue=document.getElementById('eurosid')
                            euroValue.innerHTML = (converted /199.85).toFixed(2);
                   })

          </script>


</body>

</html>
