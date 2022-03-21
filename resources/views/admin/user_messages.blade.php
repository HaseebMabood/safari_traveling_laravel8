
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
                        <h1 class="h3 mb-2 text-gray-800 d-flex justify-content-between">User Messages


                        </h1>

                         {{-- success flash message--}}
                        @include('admin.success_msg')


                        {{-- table start --}}

                               <!-- DataTales Example -->
                               <div class="card shadow mb-4 mt-5">

                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Username</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Location</th>
                                                    <th>Subject</th>
                                                    <th>Message</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($dataa as $data )
                                                <tr>
                                                    <td>{{$data->name}}</td>
                                                    <td>{{$data->email}}</td>
                                                    <td>{{$data->phone}} </td>
                                                    <td>{{$data->location}}</td>
                                                    <td>{{$data->subject}}</td>
                                                    <td>{{$data->message}}</td>


                                                    <td ><a href="{{url('/deletemessage', $data->id)}}" class="btn btn-danger">Remove</a></td>
                                                </tr>
                                                @endforeach


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        {{-- end table --}}
                        <div class=" d-flex justify-content-center align-items-center ">
                            <div>{{ $dataa->links() }}</div>
                        </div>
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
