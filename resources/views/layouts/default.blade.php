<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
        @include('includes.social-links')

        @include('includes.header')
        <div class="container">
          <div class="row marketing">
                <div class="col-lg-12">
                    @yield('content')
                </div>
          </div>

          @include('includes.footer')
        </div>

</body>
</html>