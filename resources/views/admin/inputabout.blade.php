
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
                        <h1 class="h3 mb-2 text-gray-800 d-flex justify-content-between">

                            {{--back button  --}}

                            <a href="{{route('aboutus.index')}}" class="btn btn-outline-dark btn-lg  ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                             <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                             </svg>
                                 <b>Back</b>
                             </a>

                             {{-- end back button --}}
                             
                            <a href="{{route('aboutus.create')}}" class="btn btn-outline-primary btn-lg  ">Add Content</a>
                            
                        </h1>

                         {{-- success flash message--}}
                        @include('admin.success_msg')


                           {{-- form start --}}

                           <div class="container  text-black mt-5" >
                            <form action="{{route('aboutus.store')}}" method="post"  >

                                @csrf



                            <div class="form-group">
                                <label for="">Description</label>
                        
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
