
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
                        {{-- <h1 class="h3 mb-2 text-gray-800">Update Message </h1> --}}
                       
                         {{-- success flash message--}}
                        @include('admin.success_msg')


                        {{--back button  --}}

<a href="/offers" class="btn btn-outline-dark btn-lg  ">
  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
  </svg>
      <b>Back</b>
  </a>

  {{-- end back button --}}

                        {{-- form start --}}
              
                        <div class="container col-md-8 text-black mt-5" >

                             {{-- validation message --}}
                             @include('admin.validation_msg')


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

                          {{-- <div class="form-group">
                            <label for="">Price</label>
                            <input  type="num" name="price" value="{{$data->price}}"  class="form-control" required>   
                           </div> --}}

                            <div class="row align-items-center">
                                <div class="col-md-4">
                           
        
                                    <input type="number" class = "form-control" name="price" id="myinput" value="{{$data->price}}" min="0"><br>
        
        
        
                                        <label for="" class="text-info"><b>In Dollars: </label>
                                        <div id="dollarid" class="text-success"></div>
        
        
                                        <label for="" class="text-info">In Pounds:</label>
                                        <div id="poundid" class="text-success"></div>
        
        
        
                                        <label for="" class="text-info"><b>In Euros:</b> </label>
                                        <div id="eurosid" class="text-success"></div>
        
                
                                </div>
        
                            </div>

                            {{-- <div class="form-group">
                                <label for="">Currency</label>
                                <input  type="text" name="currency" value="{{$data->currency}}"  class="form-control" >
                                
                                <select name="currency" id="" class="form-control">
                                    <option value="" selected disabled>--Select--</option>
                                    <option value="pkr">Pkr</option>
                                    <option value="aed">Aed</option>
                                    <option value="pound">Pound</option>

                                </select>
                                
                            </div> --}}




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



   <script>

    const inserted = document.getElementById('myinput')

    inserted.addEventListener('input',function(event)
      {
                let converted=event.target.value

                let dollarValue=document.getElementById('dollarid')
                dollarValue.innerHTML = (converted /181.30).toFixed(2);

                let poundsValue=document.getElementById('poundid')
                poundsValue.innerHTML = (converted /240.45).toFixed(2);

                let euroValue=document.getElementById('eurosid')
                euroValue.innerHTML = (converted /199.85).toFixed(2);
       })

</script>

</body>

</html>
