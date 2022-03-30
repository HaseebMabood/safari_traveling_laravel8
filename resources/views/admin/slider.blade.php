
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
                        <h1 class="h3 mb-2 text-gray-800 d-flex justify-content-between">Banner 
                            <a href="{{url('/add_slider')}}" class="btn btn-outline-primary btn-lg  ">Add Banner(s)</a>
                            
                        </h1>

                         {{-- success flash message--}}
                        @include('admin.success_msg')

                            {{-- Error flash message--}}
                            @include('admin.error_msg')


                        {{-- table start --}}

                               <!-- DataTales Example -->
                               <div class="card shadow mb-4 mt-5">

                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                               
                                                    <th>Banners</th>    
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($data as $data )
                                                <tr>
                                           
                                                   
                                                  <td>
                                                        <img src="slider_images/{{ $data->slider_img}}" alt=""  class="text-center" style=" width: 600px;
                                                        height:200px ; margin-left: auto; margin-right: auto;" >
                                                    </td>
                                 
                                                  <td><a href="{{url('/edit_banner', $data->id)}}" class="btn btn-success mt-5">Edit</a></td>
                                                    <td ><a href="{{url('/delete_banner', $data->id)}}" class="btn btn-danger mt-5">Remove</a></td> 
                                                </tr>
                                                @endforeach


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        {{-- end table --}}

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
