
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
                        <h1 class="h3 mb-2 text-gray-800">Add details </h1>

                         {{-- success flash message--}}
                        @include('admin.success_msg')



                        {{-- form start --}}

                        <div class="container  text-black mt-5" >
                            <form action="{{url('/detail_insert')}}" method="post"  >

                                @csrf


                          <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" value="{{old('title')}}" placeholder="" class="form-control"  required>
                          </div>



                            <div class="form-group">
                                <label for="">Details</label>
                        
                                <textarea name="description" id="ck"></textarea>
                              </div>

                              <input type="submit" value="Submit" class="btn btn-lg btn-success">

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
