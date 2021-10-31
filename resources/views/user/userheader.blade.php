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
            <li class="nav-item">
                <a class="nav-link" href="user.favourite"><i style='font-size:20px;' class='fa fa-heart'></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact"><i style='font-size:20px;' class="fa fa-shopping-cart"></i></a>
            </li>
              
            </ul>
          </div>
        </div>
      </nav>
    </header>