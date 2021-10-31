
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
                   <h1  style="font-size:25px">Products Add here</h1><br>
                    @if(session()->has('msg'))

                      <div class="alert alert-success">

                        <button type='button' class='close' data-dismiss='alert'>x</button>
                        {{session()->get('msg')}}

                      </div>

                    @endif
                    <form action="{{url('uploadproducts')}}" method='post' enctype='multipart/form-data'>
                    @csrf
                        <label >
                            Product Title
                     </label>
                        <input class='form-control w-50 mb-2 text-dark' name='p_title' type='text'>

                        <label >
                            Product Description
                        </label>
                        <textarea class='form-control w-50 mb-2 bg-white text-dark' name='p_desc' cols='50' rows='5'></textarea>

                        <label >
                            Price
                        </label>
                        <input class='form-control w-50 mb-2 text-dark' type='text' name='price'>

                        <label >
                            Quantity
                        </label>
                        <input class='form-control w-50 mb-2 text-dark' type='number' name='quantity'>
                        <label >
                            Type
                        </label>
                        <input class='form-control w-50 mb-2 text-dark' type='text' name='type'>
                        <label >
                            Rating
                        </label>
                        <input class='form-control w-50 mb-2 text-dark' type='text' name='rating'>
                        <label >
                            Size
                        </label>
                        <input class='mb-2 ml-3 text-dark' type='checkbox' name='sizes[]' value='XS'> XS
                        <input class='mb-2 ml-3 text-dark' type='checkbox' name='sizes[]' value='S'> S
                        <input class='mb-2 ml-3 text-dark' type='checkbox' name='sizes[]' value='M'> M
                        <input class='mb-2 ml-3 text-dark' type='checkbox' name='sizes[]' value='L'> L
                        <input class='mb-2 ml-3 text-dark' type='checkbox' name='sizes[]' value='XL'> XL
                        <br>
                        <label >
                            Color
                        </label>
                        <input class='form-control w-50 mb-2 text-dark' type='text' name='color'>
                        <label >
                            Brand
                        </label>
                        <input class='form-control w-50 mb-2 text-dark' type='text' name='brand'>

                        <label >
                            Product Image
                        </label>
                        <input class='form-control w-50 mb-2' name='file' type='file'>
                        
                        <input class='btn w-50 pt-2 pb-2 btn-success btn-block' name='submit' value='SUBMIT' type='submit'>
                    </form>
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