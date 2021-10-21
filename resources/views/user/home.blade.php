@include('user.headscripts')
  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2><em>OYO</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="allproducts">Our Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="aboutoyo">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact">Contact Us</a>
              </li>
              
              @if (Route::has('login'))
                
                    @auth
                    <li class="nav-link">
                    <x-app-layout>
                       
                    </x-app-layout>
                    </li>
                        <!-- <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a></li> -->
                    @else
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                        @if (Route::has('register'))
                            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                        @endif
                    @endauth
                
            @endif
              
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Best Offer</h4>
            <h2>New Arrivals On Sale</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Flash Deals</h4>
            <h2>Get your best products</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Last Minute</h4>
            <h2>Grab last minute deals</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest Products</h2>
              <a href="allproducts">view all products <i class="fa fa-angle-right"></i></a>
              <div class='mb-3 d-flex justify-content-end'>
                <form class='form-inline' method='get' action="{{url('/search')}}">
                  @csrf
                  <input class='form-control' type="text" placeholder="SEARCH" name='search'>
                  <button class="btn btn-sm btn-danger p-2 ml-1" style="border-radius:0%;">Search</button>
                </form>
            </div>
            </div>
           
          </div>
          @foreach($products as $pro)
          <div class="col-md-4 ">
            <div class="product-item shadow">
              <a href="#"><img src="productimage/{{$pro->image}}" height='200px' alt=""></a>
              
            
              <div class="down-content">
                <a href="#"><h4>{{$pro->title}}</h4></a>
                <h6>{{$pro->price}} AED</h6>
                <p>{{$pro->description}}</p>
                

                <ul class="stars">
                @if($pro->rating == '1')
                
                  <li><i class="fa fa-star"></i></li>
                 
                @elseif( $pro->rating == '2')
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                @elseif($pro->rating == '3')
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                @elseif( $pro->rating == '4')
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                @elseif( $pro->rating == '5')
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                @endif
                </ul>
                
                <span>Reviews (32)</span>
              </div>
              <div class='d-flex justify-content-center mb-3 '>
                  <button class='btn btn-sm btn-danger'>Add To Bag</button>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>

    @include('user.about');

    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Creative &amp; Unique <em>Sixteen</em> Products</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla.</p>
                </div>
                <div class="col-md-4">
                  <a href="#" class="filled-button">Purchase Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2020 Sixteen Clothing Co., Ltd.
            
            - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="theme/vendor/jquery/jquery.min.js"></script>
    <script src="theme/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="theme/assets/js/custom.js"></script>
    <script src="theme/assets/js/owl.js"></script>
    <script src="theme/assets/js/slick.js"></script>
    <script src="theme/assets/js/isotope.js"></script>
    <script src="theme/assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
