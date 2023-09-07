<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'layout')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" >
    <style>
        body {
            margin: 0;
            padding: 0;
        }
        .blue-rectangle {
            background-color: rgb(65, 87, 255);
            width: 100%;
            height: 30px;
            margin: 0;
            padding: 0;
        }
        .red-rectangle {
            background-color: rgb(65, 87, 255);
            width: 100%;
            height: 30px;
            position: absolute;
            bottom: 0;
            margin: 0;
            padding: 0;
        }
    </style>
  </head>
  <body>
  <div class="blue-rectangle"></div>
    <div class="red-rectangle"></div>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>