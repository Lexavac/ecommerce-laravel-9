@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                       <div class="flex items-center justify-end mt-4 align-middle ">
                <a href="/auth/google">
                    <img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png" style="margin-left: 3em;">
                </a>
            </div>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section: Design Block -->
<section class="text-center text-lg-start">
    <style>
      .cascading-right {
        margin-right: -50px;
      }

      @media (max-width: 991.98px) {
        .cascading-right {
          margin-right: 0;
        }
      }
    </style> --}}





{{--
  <section class="vh-100" style="background-color: #508bfc;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <h3 class="mb-5">{{ __('Login') }}</h3>

                <form method="POST" action="{{ route('login') }} class="form-outline mb-4">
                    @csrf
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus id="email" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX-2">{{ __('Email Address') }}</label>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
              </div>

              <div class="form-outline mb-4">
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" id="password" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX-2">{{ __('Password') }}</label>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
              </div>

              <!-- Checkbox -->
              <div class="form-check d-flex justify-content-start mb-4">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                <label class="form-check-label" for="form1Example3"> {{ __('Remember Me') }} </label>
              </div>

              <button class="btn btn-primary btn-lg btn-block" type="submit">{{ __('Login') }}</button>

              <hr class="my-4">

              <button class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;"
                type="submit"><i class="fab fa-google me-2"></i> Sign in with google</button>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}


  <main>
    <div class="box">
      <div class="inner-box">
        <div class="forms-wrap">
          <form action="" method="post" autocomplete="off" class="sign-in-form" id="log">
            <div class="logo">
              <h4>Garou</h4>
            </div>

            <div class="heading">
              <h2>Welcome Back</h2>
              <h6>Not registred yet?</h6>
            </div>

            <div class="actual-form">
              <div class="input-wrap">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                <input
                type="email" class="input-field @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus id="email"
                />
                <label>{{ __('Email Address') }}</label>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
              </div>

              <div class="input-wrap">
                <input
                id="password" type="password" class="input-field @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"

                />
                <label>{{ __('Password') }}</label>

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
              </div>

              <div class="form-check d-flex justify-content-start mb-4">
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                  <label class="form-check-label" for="form1Example3">  </label>
              </div>

              <button type="submit" value="Login" class="sign-btn" id="butlogin"/>{{ __('Login') }}</button>

              </form>
              <div class="flex items-center justify-end mb-4 align-middle ">
                <a href="/auth/google">
                    <img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png" style="margin-left: 3em;">
                </a>
            </div>


            <!-- REGISTER  -->


              <p class="text">
                Forgotten your password or you login datails?
                <a href="#">Get help</a> signing in
              </p>
            </div>
          </form>

          <form action="" method="POST" autocomplete="off" class="sign-up-form" id="Sig">
            <div class="logo">
              <!-- <img src="assets/img/logo.png" alt="easyclass" /> -->
              <h4>Garou</h4>
            </div>

            <div class="heading">
              <h2>Get Started</h2>
              <h6>Already have an account?</h6>
              <a href="#" class="toggle">Sign in</a>
            </div>


            <div class="actual-form">
              <div class="input-wrap">
                <input
                  type="text"
                  minlength="4"
                  class="input-field"
                  autocomplete="off"

                  name="fullname"
                  id="fullname"
                />
                <label>Full Name</label>
                <small id="q1" style="display:none;">Username Cannot Be Blank</small>
              </div>



              <div class="input-wrap">
                <input
                  type="text"
                  class="input-field"
                  autocomplete="off"
                  name="username"
                  id="username"
                />
                <label>Username</label>
                <small id="q2" style="display:none;">Password Cannot Be Blank</small>
              </div>

              <div class="input-wrap">
                <input
                  type="password"
                  class="input-field"
                  autocomplete="off"
                  name="password"
                  id="password"
                />
                <label>Password</label>
                <small id="q2" style="display:none;">Password Cannot Be Blank</small>
              </div>

              <input type="submit" value="Signup" class="sign-btn" id="buts"/>

              <p class="text">
                By signing up, I agree to the
                <a href="#">Terms of Services</a> and
                <a href="#">Privacy Policy</a>
              </p>
            </div>
          </form>
        </div>

        <div class="carousel">
          <div class="images-wrapper">
            <img src="" class="image img-1 show" alt="" />
            <img src="" class="image img-2" alt="" />
            <img src="" class="image img-3" alt="" />
          </div>

          <!-- <div class="text-slider">
            <div class="text-wrap">
              <div class="text-group">
                <h2>Create your own courses</h2>
                <h2>Customize as you like</h2>
                <h2>Invite students to your class</h2>
              </div>
            </div> -->

            <div class="bullets">
              <span class="active" data-value="1"></span>
              <span data-value="2"></span>
              <span data-value="3"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>


@endsection



