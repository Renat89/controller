<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css" type="text/css" />
  </head>
  <body>

    <div class="container">

      <div class="page-header">
        <h1>@yield('page-header-content')</h1>
      </div>

      @yield('content')

    </div>

    <script src="/js/app.js" type="text/javascript"></script>
  </body>
</html>
