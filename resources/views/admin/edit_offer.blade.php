
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
                        <h1 class="h3 mb-2 text-gray-800">Update Message </h1>
                       
                         {{-- success flash message--}}
                        @include('admin.success_msg')



                        {{-- form start --}}
              
                        <div class="container col-md-8 text-black mt-5" >
                            <form action="{{url('/offer_updated',$data->id)}}" method="post" enctype="multipart/form-data" >

                                @csrf


                          <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" value="{{$data->title}}"  class="form-control"  required>
                          </div>

                          <div class="form-group">
                            <label for="">Country</label>
                            <input type="text" name="country" value="{{$data->country}}"  class="form-control"  required>
                          </div>

                          <div class="form-group">
                            <label for="">Description</label>
                    
                            <textarea name="description" class="form-control">{{$data->description}}</textarea>
                          </div>

                          <div class="form-group">
                            <label for="">Price</label>
                            <input  type="num" name="price" value="{{$data->price}}"  class="form-control" required>                          </div>



                            <div class="form-group">
                                <label for="">Currency</label>
                                <input  type="text" name="currency" value="{{$data->currency}}"  class="form-control" >
                                
                                <select name="currency" id="" class="form-control">
                                    <option value="" selected disabled>--Select--</option>
                                    <option value="pkr">Pkr</option>
                                    <option value="aed">Aed</option>
                                    <option value="pound">Pound</option>

                                </select>
                                
                            </div>




                            {{-- <div class="form-group">
                                <label for="">Current Image</label>
                                
                                    <img src="offer_images/{{ $data->image}}" alt=""  class="text-center" style=" width: 100px;
                                    height:100px ; margin-left: auto; margin-right: auto;" >
                            
                              </div> --}}


                          <div class="form-group">
                            <label for="">Thumbnail</label>
                            <input type="file" name="thumbnail"  class="form-control" >
                          </div>


                          <div class="form-group">
                            <label for="">Add More Image(s)</label>
                            <input type="file" name="images[]" multiple  class="form-control"  >
                          </div>


                           

                              <input type="submit" value="Update" class="btn btn-lg btn-success">

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
