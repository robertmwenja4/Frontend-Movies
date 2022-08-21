    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="csrf-token" content="{{ csrf_token() }}">

            <title>Movies</title>

            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

            <link rel="stylesheet" href="{{ asset('css/app.css') }}">
            <style>
                .custom-product{
                    height: 450px;
                }
            </style>
            <script src="{{ asset('js/app.js') }}" defer></script>
        </head>
        <body>
            <nav class="navbar navbar-expand-lg bg-success">
                <div class="container">
                <a class="navbar-brand text-white fw-bold fs-1" href="#">{{ config('', 'Movies') }}</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                @auth
            <nav class="navbar sub-nav navbar-expand-lg">
                <div class="container">
            
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                            <a class="nav-link text-dark fw-normal fs-6" href="{{ url('index') }}">Movies Upload</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark fw-normal fs-6" href="#">View Movies</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav> 
            @else
            <div class="" id="navbarText">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link text-dark fw-normal fs-6" href="{{ url('/') }}">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark fw-normal fs-6" href="#">LATEST</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark fw-normal fs-6" href="#">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark fw-light fs-6" href="#">CONTACT US</a>
                </li>
                </ul>
            </div>
            @endauth
                
                    <div class="form-check-inline my-2 my-lg-0">
                        
                        @if (Route::has('login'))
                            <div>
                                @auth
                                    <a href="#">Profile</a>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                                        @csrf
                                    </form>
                                @else
                                    <a class="border text-dark p-lg-2 shadow p-3 mb-5 bg-white rounded fw-bolder" href="{{ route('login') }}">LOG IN</a>
            
                                    @if (Route::has('register'))
                                        <a class="border bg-primary m-lg-1 p-lg-2 text-white fw-bold shadow p-3 mb-5 bg-blue rounded" href="{{ route('register') }}">REGISTER</a>
                                        {{-- <button class="border bg-primary" style="color: #f5f5f5;" href="{{ route('register') }}">REGISTER</button> --}}
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>
                </div>
            </nav>
            
            <main class="container" >
                @yield('content')
            </main>
        </body>
        <!-- Remove the container if you want to extend the Footer to full width. -->


    <!-- Footer -->
    <footer
            class="text-center text-lg-start text-white mt-5"
            style="background-color: #1c2331"
            >
      <!-- Section: Social media -->
      <section
               class="d-flex justify-content-between p-4"
               style="background-color: #6351ce"
               >
        <!-- Left -->
        <div class="me-5">
          <span>Get connected with us on social networks:</span>
        </div>
        <!-- Left -->
  
        <!-- Right -->
        <div>
          <a href="" class="text-white me-4">
            <i class="bi bi-facebook"></i>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
              </svg>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-twitter"></i>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
              </svg>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-google"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-linkedin"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-github"></i>
          </a>
        </div>
        <!-- Right -->
      </section>
      <!-- Section: Social media -->
  
      <!-- Section: Links  -->
      <section class="">
        <div class="container text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <!-- Content -->
              <h6 class="text-uppercase fw-bold">Company name</h6>
              <hr
                  class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 60px; background-color: #7c4dff; height: 2px"
                  />
              <p>
                Here you can use rows and columns to organize your footer
                content. Lorem ipsum dolor sit amet, consectetur adipisicing
                elit.
              </p>
            </div>
            <!-- Grid column -->
  
            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold">Products</h6>
              <hr
                  class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 60px; background-color: #7c4dff; height: 2px"
                  />
              <p>
                <a href="#!" class="text-white">MDBootstrap</a>
              </p>
              <p>
                <a href="#!" class="text-white">MDWordPress</a>
              </p>
              <p>
                <a href="#!" class="text-white">BrandFlow</a>
              </p>
              <p>
                <a href="#!" class="text-white">Bootstrap Angular</a>
              </p>
            </div>
            <!-- Grid column -->
  
            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold">Useful links</h6>
              <hr
                  class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 60px; background-color: #7c4dff; height: 2px"
                  />
              <p>
                <a href="#!" class="text-white">Your Account</a>
              </p>
              <p>
                <a href="#!" class="text-white">Become an Affiliate</a>
              </p>
              <p>
                <a href="#!" class="text-white">Shipping Rates</a>
              </p>
              <p>
                <a href="#!" class="text-white">Help</a>
              </p>
            </div>
            <!-- Grid column -->
  
            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold">Contact</h6>
              <hr
                  class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 60px; background-color: #7c4dff; height: 2px"
                  />
              <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
              <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
              <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
              <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Links  -->
  
      <!-- Copyright -->
      <div
           class="text-center p-3"
           style="background-color: rgba(0, 0, 0, 0.2)"
           >
        © 2022 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/"
           >MDBootstrap.com</a
          >
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
  
  <!-- End of .container -->
    </html>
