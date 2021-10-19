
<!DOCTYPE html>
<html lang="en">
  @include('admin.headscript');
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
  @include('admin.sidebar');
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar');
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            
            <div class="row">
              <div class="col-xl-12 col-sm-12 ">
                <div class="card">
                  <div class="card-body d-flex flex-column justify-content-center">
                   <h1  style="font-size:25px">Products</h1><br>
                    @if(session()->has('msg'))

                      <div class="alert alert-success">

                        <button type='button' class='close' data-dismiss='alert'>x</button>
                        {{session()->get('msg')}}

                      </div>

                    @endif
                    <div class="table-responsive">
                        <table class="table table-dark table-striped">
                            <thead>
                                <tr >
                                <th scope="col" class='text-white' >S:no</th>
                                <th scope="col" class='text-white'>Title</th>
                                <th scope="col" class='text-white'>Description</th>
                                <th scope="col" class='text-white'>Price</th>
                                <th scope="col" class='text-white'>Quantity</th>
                                <th scope="col" class='text-white'>Type</th>
                                <th scope="col" class='text-white'>Image</th>
                                <th scope="col" rowspan='2' class='text-center text-white'>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach($products as $key=>$pro)

                                
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$pro->title}}</td>
                                        <td style=' white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 10ch;}'>{{$pro->description}}</td>
                                        <td>{{$pro->price}}</td>
                                        <td>{{$pro->quantity}}</td>
                                        <td>{{$pro->type}}</td>
                                        <td ><img style='border-radius:0%;width:100px; height:75px' src='productimage/{{$pro->image}}'></td>
                                        <td><a href="{{url('edit_product',$pro->id)}}"><button class='btn btn-sm btn-success'>Edit</button></a></td>
                                        <td><a href="{{url('delete_product',$pro->id)}}"><button class='btn btn-sm btn-danger'>Delete</button></a></td>
                                    </tr>
                                
                                @endforeach
                            
                            </tbody>
                        </table>
                    </div>
                  </div>
                </div>
              </div>
              
              
            </div>
            
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © OYO.co 2020</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="backend-theme/template/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="backend-theme/template/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="backend-theme/template/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="backend-theme/template/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="backend-theme/template/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="backend-theme/template/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="backend-theme/template/assets/js/off-canvas.js"></script>
    <script src="backend-theme/template/assets/js/hoverable-collapse.js"></script>
    <script src="backend-theme/template/assets/js/misc.js"></script>
    <script src="backend-theme/template/assets/js/settings.js"></script>
    <script src="backend-theme/template/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="backend-theme/template/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>