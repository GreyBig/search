<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', '五行数理')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>


    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto  flex-column">
      @include('layouts._header')
        @yield('content')
        @include('layouts._footer')
    </div>
    


    <script src="{{ mix('js/app.js') }}"></script>
  </body>
</html>