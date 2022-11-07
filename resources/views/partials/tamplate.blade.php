
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Dashboard TeBe</title>

  <!-- General CSS Files -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <link rel="stylesheet" href="{{ asset('backend/dist/assets/modules/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/dist/assets/modules/fontawesome/css/all.min.css') }}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('backend/dist/assets/modules/jqvmap/dist/jqvmap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/dist/assets/modules/summernote/summernote-bs4.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/dist/assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/dist/assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('backend/dist/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/dist/assets/css/components.css') }}">

  @stack('style-alt')
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <section>
      @include('partials.sidebar')
      <!-- Main Content -->
      <div class="main-content">
        @if(session()->has('message'))
        <div class="alert alert-{{ session()->get('type') }} alert-dismissible fade show">
            {{ session()->get('message') }}
            <button type="button" class="close" data-dismiss="alert">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

            <button class="close" type="button" data-dismiss="alert">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

          @yield('content')
      </div>


        </section>
      </div>

        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

  <script src="{{ asset('backend/dist/assets/modules/jquery.min.js') }}"></script>
  <script src="{{ asset('backend/dist/assets/modules/popper.js') }}"></script>
  <script src="{{ asset('backend/dist/assets/modules/tooltip.js') }}"></script>
  <script src="{{ asset('backend/dist/assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('backend/dist/assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('backend/dist/assets/modules/moment.min.js') }}"></script>
  <script src="{{ asset('backend/dist/assets/js/stisla.js') }}"></script>
  <script src="{{ asset('backend/dist/assets/js/page/prism.js') }}"></script>
  <script src="{{ asset('backend/dist/assets/js/page/bootstrap-modal.js') }}"></script>

  <!-- JS Libraies -->
  <script src="{{ asset('backend/dist/assets/modules/jquery.sparkline.min.js') }}"></script>
  <script src="{{ asset('backend/dist/assets/modules/chart.min.js') }}"></script>
  <script src="{{ asset('backend/dist/assets/modules/owlcarousel2/dist/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('backend/dist/assets/modules/summernote/summernote-bs4.js') }}"></script>
  <script src="{{ asset('backend/dist/assets/modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

  <!-- Page Specific JS File -->
  <script src="{{ asset('backend/dist/assets/js/page/index.js') }}"></script>

  <!-- Template JS File -->
  <script src="{{ asset('backend/dist/assets/js/scripts.js') }}"></script>
  <script src="{{ asset('backend/dist/assets/js/custom.js') }}"></script>

  @stack('js-alt')
</body>
</html>
