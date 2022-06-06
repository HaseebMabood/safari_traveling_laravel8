



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
                        {{-- <h1 class="h3 mb-2 text-gray-800">View Images </h1> --}}

                    {{-- success flash message--}}
                    @include('admin.success_msg')

                    {{--back button  --}}

<a href="/offers" class="btn btn-outline-dark btn-lg mb-5">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
    </svg>
        <b>Back</b>
    </a>

    {{-- end back button --}}


                        {{-- Images show start --}}

                        {{-- @foreach ($images as $image)

                        <a href="{{url('/delete_multi',$image->id)}}" class="btn btn-danger">delete</a>
                        <img src="/offer_images/{{ $image->images}}" alt=""  class="text-center" style=" width: 100px;
                        height:100px ; margin-left: auto; margin-right: auto;" >


                        @endforeach --}}



                <div class="list row">

                    @foreach ($images as $image)

                            <div class="col-md-6">


                                <div class="row ">
                                    <div class="card d-flex justify-content-between" style="width: 18rem; margin-left:50px">
                                        <img src="/offer_images/{{ $image->images}}" alt=""  class="text-center" style=" width: auto;
                                        height:230px ; " >
                                        <div class="card-body">
                                        <h5 class="card-title">{{$data->title}}</h5>
                                        <a href="{{url('/delete_multi',$image->id)}}" class="btn btn-danger">delete</a>
                                        <a href="{{url('/edit_multi',$image->id)}}" class="btn btn-success">Edit</a>
                                        </div>
                                    </div>
                                 </div><br>


                            </div><!--END OF COL MD 6-->


                    @endforeach

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
