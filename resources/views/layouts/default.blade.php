<html>
  <head>
    <title>@yield('title','weibo lei')-李磊的博客 丢~</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
  </head>
  <body>

    @include('layouts._header')

    <div class="container">
      @include('shared._messages')
      @yield('content')
      @include('layouts._footer')
    </div>

    <script src="{{mix('js/app.js')}}"></script>

  </body>
</html>