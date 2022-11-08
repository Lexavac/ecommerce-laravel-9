

<!DOCTYPE html>
<html lang="en">
  <head>
    <title> TeBe </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('frontend/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('frontend/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>


  </head>
  <body class="goto-here">

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="http://127.0.0.1:8000">My Profile</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">

                @foreach($menu_categories as $menu_category)
                <a class="dropdown-item" href="{{ route('shop.index', $menu_category->slug) }}">{{ $menu_category->name }}</a>
                @endforeach
              </div>
            </li>
	          <li class="nav-item"><a href="" class="nav-link">My Order</a></li>
	          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
	          <li class="nav-item"><a href="cart.html" class="nav-link"></a</li>

				@guest
					<li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
					<li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>
				@else
					<li class="nav-item"><a href="/admin" class="nav-link">{{ auth()->user()->username }}</a></li>
					<li class="nav-item"><a href="#" class="nav-link" onclick="event.preventDefault();document.querySelector('#logout-form').submit()">Logout</a></li>
					<form action="{{ route('logout') }}" id="logout-form" method="POST">
				@csrf
					</form>
				@endguest


	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->




    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(https://images5.alphacoders.com/750/750713.png);">
    	<div class="container">
    		<div class="row justify-content-center py-5">
    			<div class="col-md-10">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="10000">0</strong>
		                <span>Happy Customers</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="100">0</strong>
		                <span>Branches</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="1000">0</strong>
		                <span>Partner</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="100">0</strong>
		                <span>Awards</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>


        <section class="section">
            <div class="section-header">
            </div>
        </section>
                    <div class="card">
                        <div class="card-body ">
                                <div class="row">
                                <div class="col-12 col-md-12 col-lg-12">
                                    <div class="card">
                                    <div class="card-header">
                                        <h4>Edit Profile</h4>
                                    </div>

                                    <form method="POST" action="{{ route('register') }}" class="card-body">
                                        @csrf
                                        <div class="alert alert-warning">
                                        <b>Note!</b> Please Input valid
                                        </div>

                                    <div class="form-group">
                                        <label for="name">First Name</label>
                                        <input type="text" name="name" value="{{ old('firstname', auth()->user()->firstname) }}" class="form-control">
                                        </div>

                                    <div class="form-group">
                                        <label for="name">Lastt Name</label>
                                        <input type="text" name="name" value="{{ old('lastname', auth()->user()->lastname) }}" class="form-control">
                                        </div>


                                        <div class="form-group">
                                            <label for="price">Email</label>
                                            <input type="text" name="price" value="{{ old('email', auth()->user()->email) }}" class="form-control">
                                            </div>

                                        <div class="form-group">
                                            <label for="quantity">Number</label>
                                            <input type="number" name="quantity" value="{{ old('phoneNumber', auth()->user()->phoneNumber) }}" class="form-control">
                                            </div>

                                        <div class="form-group">
                                            <label for="quantity">Adress</label>
                                            <input type="text" name="quantity" value="{{ old('adress', auth()->user()->adress) }}" class="form-control">
                                            </div>

                                        <div class="form-group">
                                            <label for="gallery">Profile</label>
                                            <div class="needsclick dropzone" id="gallery-dropzone"></div>
                                            </div>

                                        <div class="card-footer text-right">
                                            <button class="btn btn-primary mr-1" type="submit">Submit</button>
                                            <button class="btn btn-secondary" type="reset">Reset</button>
                                        </div>
                                    </form>


                                </tbody>
                            </table>


                            <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />


                            <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>

                            <script>
                                var uploadedGalleryMap = {}
                             Dropzone.options.galleryDropzone = {
                                 url: "{{ route('admin.products.storeImage') }}",
                                 maxFilesize: 2, // MB
                                 acceptedFiles: '.jpeg,.jpg,.png,.gif',
                                 addRemoveLinks: true,
                                 headers: {
                                   'X-CSRF-TOKEN': "{{ csrf_token() }}"
                                 },
                                 success: function (file, response) {
                                   $('form').append('<input type="hidden" name="gallery[]" value="' + response.name + '">')
                                   uploadedGalleryMap[file.name] = response.name
                                 },
                                 removedfile: function (file) {
                                   file.previewElement.remove()
                                   var name = ''
                                   if (typeof file.file_name !== 'undefined') {
                                     name = file.file_name
                                   } else {
                                     name = uploadedGalleryMap[file.name]
                                   }
                                   $('form').find('input[name="gallery[]"][value="' + name + '"]').remove()
                                 },
                                 init: function () {
                             @if(isset($product) && $product->gallery)
                                   var files =
                                     {!! json_encode($product->gallery) !!}
                                       for (var i in files) {
                                       var file = files[i]
                                       this.options.addedfile.call(this, file)
                                       this.options.thumbnail.call(this, file, file.original_url)
                                       file.previewElement.classList.add('dz-complete')
                                       $('form').append('<input type="hidden" name="gallery[]" value="' + file.file_name + '">')
                                     }
                             @endif
                                 },
                                  error: function (file, response) {
                                      if ($.type(response) === 'string') {
                                          var message = response //dropzone sends it's own error messages in string
                                      } else {
                                          var message = response.errors.file
                                      }
                                      file.previewElement.classList.add('dz-error')
                                      _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
                                      _results = []
                                      for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                                          node = _ref[_i]
                                          _results.push(node.textContent = message)
                                      }
                                      return _results
                                  }
                             }
                             </script>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
  <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('frontend/js/aos.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('frontend/js/bootstrap-datepicker.js') }}"></script>
  <script src="{{ asset('frontend/js/scrollax.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('frontend/js/google-map.js') }}"></script>
  <script src="{{ asset('frontend/js/main.js') }}"></script>
  {{-- <script src="{{ asset('js/app.js') }}"></script> --}}


  </body>
</html>
