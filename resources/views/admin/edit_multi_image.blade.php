



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
                        <h1 class="h3 mb-2 text-gray-800 mb-5">Edit Image </h1>

                    {{-- success flash message--}}
                    @include('admin.success_msg')



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
                                        <img src="/offer_images/{{ $data->images}}" alt=""  class="text-center" style=" width: auto;
                                        height:auto ; " >
                                        <div class="card-body">


                                              {{-- form start --}}

                        <div class="container col-md-12 text-black mt-5" >
                            <form action="{{url('/editing_multi_image',$data->id)}}" method="post" enctype="multipart/form-data" >

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
