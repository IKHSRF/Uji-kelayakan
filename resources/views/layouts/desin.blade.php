<html lang="en" class="fullscreen-bg">
  <head>
    <title>Login</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"
    />
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}" />
    <link
      rel="stylesheet"
      href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}"
    />
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/style.css')}}" />
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}" />
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}" />
    <!-- GOOGLE FONTS -->
    <link
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700"
      rel="stylesheet"
    />
    <!-- ICONS -->
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="{{asset('admin/assets/img/apple-icon.png')}}"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="96x96"
      href="{{asset('admin/assets/img/favicon.png')}}"
    />
  </head>

  <body>
  @if ($message = Session::get('success'))
  <div class="alert alert-danger alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
      <i class="fa fa-times-circle"></i> Data yang anda masukan invalid
    </div>
  @endif
    <!-- WRAPPER -->

    <div id="wrapper">
      <div class="vertical-align-wrap">
        <div class="vertical-align-middle">
          <div class="auth-box ">
            <div class="left">
              <div class="content">
                <div class="header">
                  <div class="logo text-center">
                    <img src="{{asset('admin/assets/img/barber.png')}}" alt="Klorofil Logo" />
                  </div>
                  <p class="lead">Login to your account</p>
                </div>
                @csrf
                @yield('content')
              </div>
            </div>
            <div class="right">
              <div class="overlay"></div>
              <div class="content text">
                <h1 class="heading">Wikrama</h1>
                <p>Selamat Datang</p>
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    <!-- END WRAPPER -->
    <script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/toastr/toastr.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin/assets/scripts/klorofil-common.js')}}"></script>
    <div id="toast-container" class="toast-top-right"><div class="toast toast-error" aria-live="assertive" style="display: block;"><button type="button" class="toast-close-button" role="button">×</button><div class="toast-message">Data yang anda masukan salah</div></div></div>
  </body>
</html>