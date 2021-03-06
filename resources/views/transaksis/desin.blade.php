<head>
    <title>Tambahan</title>
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
    <!-- WRAPPER -->

    <div id="wrapper">
      <div class="vertical-align-wrap">
        <div class="vertical-align-middle">
          <div class="auth-box ">
            <div class="left">
              <div class="content">
                <div class="header">
                  <div class="logo text-center">
                    <img src="{{asset('admin/assets/img/resto.jpg')}}" width="70%" alt="Klorofil Logo" />
                  </div>
                  <p class="lead">Data Tambahan</p>
                </div>
                @csrf
              </div>
            </div>
            <div class="right">
              <div class="overlay"></div>
              <div class="content text">
            @csrf
            @yield('content')
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- END WRAPPER -->
  </body>