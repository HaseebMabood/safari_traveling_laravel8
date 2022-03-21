
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
                        <h1 class="h3 mb-2 text-gray-800">Offers </h1>

                         {{-- success flash message--}}
                        {{-- @include('admin.success_msg') --}}



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

                          <div class="form-group">
                            <label for="">Price</label>
                            <input  type="num" name="price" value="{{old('price')}}" placeholder="" class="form-control" required>                          </div>


                            <div class="form-group">
                                <label for="">Currency</label>
                                <select name="currency" id="" class="form-control">
                                    <option value="" selected disabled>--Select--</option>
                                    <option value="pkr">Pkr</option>
                                    <option value="aed">Aed</option>
                                    <option value="pound">Pound</option>

                                </select>
                            </div>

                    
                    
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
                           
<br>

@if (session('conversion'))
<div class="text-black-500 text-center pt-12 font-bold text-5xl w-4/5 mx-auto">
    {{ session('conversion') }}
</div>
@endif --}}
                          {{-- End currency conversion --}}

                          <div class="form-group">
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

</body>

</html>
