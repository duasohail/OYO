<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>ecommerce store laravel</title>

    <!-- Bootstrap core CSS -->
    <link href="/theme/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/theme/assets/css/fontawesome.css">
    <link rel="stylesheet" href="/theme/assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="/theme/assets/css/owl.css">

  </head>
  <style>
      button.inline-flex.items-center.px-3.py-2.border.border-transparent.text-sm.leading-4.font-medium.rounded-md.text-gray-500.bg-white.hover\:text-gray-700.focus\:outline-none.transition {
    margin: 0 -31px !important;
}
</style>
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
                <a class="nav-link" href="{{url('/')}}">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="{{url('allproducts')}}">Our Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('aboutoyo')}}">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('contact')}}">Contact Us</a>
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

            <li class="nav-item">
                <a class="nav-link" href="contact"><i style='font-size:20px;' class='fa fa-heart'></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact"><i style='font-size:20px;' onclick="openNav()" class="fa fa-shopping-cart"></i></a>
            </li>
              
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text" id="main">
      <!-- <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Best Offer</h4>
            <h2>Product Details</h2>
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
      </div> -->
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products" style='margin-top:38px !important'>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Product Details</h2>
              <a href="{{url('allproducts')}}">view all products <i class="fa fa-angle-right"></i></a>
              
            </div>
           
          </div>

         
          
          <div class='row'>
              <div class='col-6'>
                    <img class='img-fluid px-1' src="/productimage/{{$products->image}}" width='100%' style='height:auto;'>
              </div>
              <div class='col-6'>

                 <div>
                     <h1 class='text-danger h1'> {{strtoupper($products->title)}}</h1>
                     <p class='pt-1 w-75 text-danger'>
                        
                            @if($products->rating == '1')
                            
                                <i class="fa fa-star"></i>
                            
                            @elseif( $products->rating == '2')
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            @elseif($products->rating == '3')
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            @elseif( $products->rating == '4')
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            @elseif( $products->rating == '5')
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            @endif
                            <span class='ml-2'>Reviews (32)</span>
                     </p>
                     <p class='pt-2 w-75'>{{$products->description}}</p>
                     <h6 class='pt-2 pb-5 h6 font-weight-bold'>PRICE: {{$products->price}} AED &nbsp;</h6>
                     <p class='pt-2 w-75 text-dark'><b>Available colors: &nbsp;&nbsp;</b>
                         <a href='#'><i class="fa fa-circle text-primary"></i></a>&nbsp;&nbsp;
                         <a href='#'><i class="fa fa-circle text-danger"></i></a>&nbsp;&nbsp;
                         <a href='#'><i class="fa fa-circle text-warning"></i></a>&nbsp;&nbsp;
                         <a href='#'><i class="fa fa-circle text-dark"></i></a>&nbsp;&nbsp;
                         <a href='#'><i class="fa fa-circle text-success"></i></a>&nbsp;&nbsp;
                    </p>
                     <p class='pt-2 w-75 text-dark'><b>Available Size: &nbsp;&nbsp;</b>
                     
                     @foreach($sizes=explode(" ", $products->size) as $size)
                        <input type='button'class='btn btn-sm'  value='{{$size}}' name='sizes' style='color:#dc3545; font-weight:600;'>&nbsp;&nbsp;
                     @endforeach
                         
                         
                    </p>
                    <p class='pt-3 w-75 text-dark'><b>No of Items:</b> 
                        <select class='ml-2' name='no_of_items' min='1' style='width:70px;height:35px;border:1px solid #dc3545!important;'>
                            <option value='1'>1</option>
                            <option value='2'>2</option>
                            <option value='3'>3</option>
                            <option value='4'>4</option>
                            <option value='5'>5</option>
                            <option value='6'>6</option>
                            <option value='7'>7</option>
                            <option value='8'>8</option>
                            <option value='9'>9</option>
                            <option value='10'>10</option>
                        </select>
                    </p>
                    <div class="d-flex ">
                      <button style="border-rdius:0px;" data-toggle="tooltip" data-placement="bottom" title="add to cart" class='btn btn-danger btn-sm p-2 mt-3 rounded-0' >ADD TO CART</button>
                      <form action="{{url('favourite')}}" method='post' enctype='multipart/form-data'>
                      @csrf 
                        <input type="hidden" value="{{$products->id}}" name='id' >
                        
                        <?php if($favs){ ?>

                          <a href="{{url('delete_fav',$products->id)}}" style="border-rdius:0px;" data-toggle="tooltip" data-placement="bottom" title="Favourite"  class='btn btn-outline-danger btn-sm ml-2 p-2 mt-3 rounded-0' > <i class="fa fa-heart text-danger"></i> </a>

                    <?php }else{?>
                        <button style="border-rdius:0px;" data-toggle="tooltip" data-placement="bottom" title="Favourite"  class='btn btn-danger btn-sm ml-2 p-2 mt-3 rounded-0' > <i class="fa fa-heart-o" aria-hidden="true"></i> </button>
                    <?php } ?>
                      </form>
                    </div>
                    
                     
                 </div>

              </div>
          </div>
         
          
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
                  <h4>Creative &amp; Unique <em>OYO</em> Products</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla.</p>
                </div>
                <div class="col-md-4">
                  <a href="allproducts" class="filled-button">View All Products</a>
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
              <p>Copyright &copy; 2020 oyo Clothing Co., Ltd.
            
            - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="/theme/vendor/jquery/jquery.min.js"></script>
    <script src="/theme/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="/theme/assets/js/custom.js"></script>
    <script src="/theme/assets/js/owl.js"></script>
    <script src="/theme/assets/js/slick.js"></script>
    <script src="/theme/assets/js/isotope.js"></script>
    <script src="/theme/assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }


function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>


  </body>

</html>
