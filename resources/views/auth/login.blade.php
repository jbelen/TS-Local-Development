@extends('layouts.login')

@section('content')
<section>
    <!--
    <div class="page-header align-items-start min-vh-50 pt-8 pb-11 m-3 border-radius-lg" style="background-image: url('assets/img/page-background/LoginBkgdImage.jpg');">
      <span class="mask bg-gradient-dark opacity-6"></span>
    -->
      
    <div  style="background-image: url('assets/img/page-background/LoginBkgdImage.jpg');">
      
        <div class="row justify-content-center">
          <div class="col-lg-4 text-center mx-auto">

            <a class="navbar-brand  text-dark " href="index.php" rel="tooltip" title="TravelSpires" data-placement="bottom" target="_blank">
              <img class="w-80" src="assets/img/logos/TravelSpires_Logo_BIG_Transparent.png" alt="logo">
            </a>
            <!--
            <img class="w-80" src="assets/img/logos/TravelSpires_Logo_BIG_Transparent.png" alt="logo">
              <a href="index.php"> </a>
            -->
            <p class="text-lead text-black">Experience the World!</p>
          </div>
        </div>        
    </div>
      
  </section>
    
  <section>
    <div class="container">
      <div class="row mt-lg-n1 mt-md-n5 mt-n3">
        <div class="card-header text-center pt-4">
          
        </div>
      </div>  
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row mt-lg-n1 mt-md-n5 mt-n3">
        <div class="card-header text-center pt-4">
          
        </div>
      </div>  
    </div>
  </section>

  <section>
    <div class="container">
    
      <div class="row mt-lg-n1 mt-md-n5 mt-n3">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0">

            
            <div class="card-header text-center pt-4">
              <h7>Sign in with</h7>
            </div>
           
            <div class="col-lg-8 mx-auto text-center mb-1 mt-0">
              <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                <span class="text-lg fab fa-facebook"></span>
              </a>
              <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                <span class="text-lg fab fa-twitter"></span>
              </a>
              <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                <span class="text-lg fab fa-instagram"></span>
              </a>
              <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                <span class="text-lg fab fa-linkedin"></span>
              </a>
            </div>

            <div class="row px-xl-5 px-sm-4 px-3">
              
            </div>
            <div class="card-body">

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3">
                        <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-1">
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Forget Password?
                    </a>
                    </div>

                    <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>

                    <div class="text-center">
                    </div>
                    <button type="submit" class="btn bg-gradient-info w-100 my-4 mb-2">Sign in</button>
                    </div>

                    <!--
                    <div class="mb-2 position-relative text-center">
                    <p class="text-sm font-weight-bold mb-2 text-secondary text-border d-inline z-index-2 bg-white px-3">
                        or
                    </p>
                    </div>
                    <div class="text-center">
                    <a href="signup.php" class="btn bg-gradient-dark w-100 mt-2 mb-4">Sign Up</a>
                    </div>
                    -->

                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- START Services Section -->
  <section>
      <div class="row mt-5">
        
        <div class="col-md-2 mb-md-0 mb-7">
          <!-- <div class="card"> -->
            <div class="text-center mt-n0 z-index-1">
              <div class="position-relative">
                <div class="blur-shadow-avatar">
                  <img class="avatar avatar-xl shadow-lg" src="assets/img/services/Languages.jpg" alt="avatar">
                </div>
              </div>
            </div>
            <div class="card-body text-center pb-0">
              <h4 class="mb-0">Languages</h4>
              <p class="mt-2"> </p>
              <button type="button" class="btn btn-outline-danger btn-sm">Learn More</button>
            </div>
          <!-- </div> -->
        </div>

        <div class="col-md-2 mb-md-0 mb-7">
          <!-- <div class="card"> -->
            <div class="text-center mt-n0 z-index-1">
              <div class="position-relative">
                <div class="blur-shadow-avatar">
                  <img class="avatar avatar-xl shadow-lg" src="assets/img/services/Visa.jpg" alt="avatar">
                </div>
              </div>
            </div>
            <div class="card-body text-center pb-0">
              <h4 class="mb-0">Visas</h4>
              <p class="mt-2"> </p>
              <button type="button" class="btn btn-outline-danger btn-sm">Learn More</button>
            </div>
          <!-- </div> -->
        </div>

        <div class="col-md-2 mb-md-0 mb-7">
          <!-- <div class="card"> -->
            <div class="text-center mt-n0 z-index-1">
              <div class="position-relative">
                <div class="blur-shadow-avatar">
                  <img class="avatar avatar-xl shadow-lg" src="assets/img/services/travel.jpg" alt="avatar">
                </div>
              </div>
            </div>
            <div class="card-body text-center pb-0">
              <h4 class="mb-0">Travel</h4>
              <p class="mt-2"> </p>
              <button type="button" class="btn btn-outline-danger btn-sm">Learn More</button>
            </div>
          <!-- </div> -->
        </div>

        <div class="col-md-2 mb-md-0 mb-7">
          <!-- <div class="card"> -->
            <div class="text-center mt-n0 z-index-1">
              <div class="position-relative">
                <div class="blur-shadow-avatar">
                  <img class="avatar avatar-xl shadow-lg" src="assets/img/services/integration.jpg" alt="avatar">
                </div>
              </div>
            </div>
            <div class="card-body text-center pb-0">
              <h4 class="mb-0">Integration</h4>
              <p class="mt-2"> </p>
              <button type="button" class="btn btn-outline-danger btn-sm">Learn More</button>
            </div>
          <!-- </div> -->
        </div>

        <div class="col-md-2 mb-md-0 mb-7">
          <!-- <div class="card"> -->
            <div class="text-center mt-n0 z-index-1">
              <div class="position-relative">
                <div class="blur-shadow-avatar">
                  <img class="avatar avatar-xl shadow-lg" src="assets/img/services/keyinfo.jpg" alt="avatar">
                </div>
              </div>
            </div>
            <div class="card-body text-center pb-0">
              <h4 class="mb-0">Key Information</h4>
              <p class="mt-2"> </p>
              <button type="button" class="btn btn-outline-danger btn-sm">Learn More</button>
            </div>
          <!-- </div> -->
        </div>

        <div class="col-md-2 mb-md-0 mb-7">
          <!-- <div class="card"> -->
            <div class="text-center mt-n0 z-index-1">
              <div class="position-relative">
                <div class="blur-shadow-avatar">
                  <img class="avatar avatar-xl shadow-lg" src="assets/img/services/helpdesk.jpg" alt="avatar">
                </div>
              </div>
            </div>
            <div class="card-body text-center pb-0">
              <h4 class="mb-0">Help Desk</h4>
              <p class="mt-2"> </p>
              <button type="button" class="btn btn-outline-danger btn-sm">Learn More</button>
            </div>
          <!-- </div> -->
        </div>

      </div>
    </div>
  </section>
  <!-- END Services Section -->
@endsection
