<html>
  <head>
    <title>@yeild('title','weibo lei')-李磊的博客 丢~</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
  </head>
  <body>

    @include('layouts._header')

    <div class="container">
      @yield('content')
      @include('layouts._footer')
    </div>
  </body>
</html>