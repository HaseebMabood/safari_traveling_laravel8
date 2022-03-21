
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
                        <h1 class="h3 mb-2 text-gray-800">Bookings</h1>
                       
                         {{-- success flash message--}}
                        @include('admin.success_msg')


                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                           
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Contact</th>
                                                <th>Adults</th>
                                                <th>Children</th>
                                                <th>Interest</th>
                                                <th>Date</th>
                                                <th>Message</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                            @foreach ($data as $data )
                                            <tr>
                                                <td>{{$data->name}}</td>
                                                <td>{{$data->email}} </td>
                                                <td>{{$data->contact}}</td>
                                                <td>{{$data->adults}}</td>
                                                <td>{{$data->children}}</td>
                                                <td>{{$data->interest}}</td>
                                                <td>{{$data->date}}</td>
                                                <td>{{$data->message}}</td>
                                                <td ><a href="{{url('/deletebooking', $data->id)}}" class="btn btn-danger">Delete</a></td>
                                            </tr>
                                            @endforeach
                                           
                                
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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
