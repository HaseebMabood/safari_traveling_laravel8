



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

                       

                    {{-- success flash message--}}
                    @include('admin.success_msg')

                    {{--back button  --}}

<a href="/slider" class="btn btn-outline-dark btn-lg mb-5 ">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
    </svg>
        <b>Back</b>
    </a>

    {{-- end back button --}}


     <!-- Page Heading -->
     <h1 class="h3 mb-2 text-gray-800 mb-5">Edit Image </h1>

                        {{-- Images show start --}}

                        {{-- @foreach ($images as $image)

                        <a href="{{url('/delete_multi',$image->id)}}" class="btn btn-danger">delete</a>
                        <img src="/offer_images/{{ $image->images}}" alt=""  class="text-center" style=" width: 100px;
                        height:100px ; margin-left: auto; margin-right: auto;" >
                        
    
                        @endforeach --}}
                     
                     
                     
                <div class="list row">
                      
                  
                       
                            <div class="col-md-6">
                
                                              
                                <div class="row ">
                                    <div class="card d-flex justify-content-between" style="width: 18rem;">
                                        <img src="/slider_images/{{ $data->slider_img}}" alt=""  class="text-center" style=" width: 600px;
                                        height:200px ; " >
                                        <div class="card-body">


                                              {{-- form start --}}

                        <div class="container col-md-12 text-black mt-5" >
                            <form action="{{url('/editing_banner',$data->id)}}" method="post" enctype="multipart/form-data" >

                                @csrf

                          <div class="form-group">
                            
                            <input type="file" name="image" >
                          </div>

                              <input type="submit" value="Update" class="btn btn-sm btn-success">

                      </form>
                        </div>
                        {{-- end-form --}}
                                       




                                        </div>
                                    </div>
                                 </div><br>
                            
                    
                            </div><!--END OF COL MD 6-->
                        
            
               
                </div>


                        {{-- end-show images --}}


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
