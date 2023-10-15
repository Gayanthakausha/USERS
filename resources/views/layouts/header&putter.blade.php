<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel CRUD</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

        <style>
            body {
                margin: 0;
                padding: 0;
            }
            .header {
                background-color: rgb(65, 87, 255);
                width: 100%;
                height: 25px;
                margin: 0;
                padding: 0;
            }
            .footer {
                background-color: rgb(65, 87, 255);
                width: 100%;
                height: 25px;
                position: absolute;
                bottom: 0;
                margin: 0;
                padding: 0;
            }

            .card{
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                transition: 0.3s;
                border-radius: 12px;

            }
            .card:hover{
                box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
                        }
            .center{
                display:block;
                margin-left: auto;
                margin-right:auto;
                width:50%;
            }

        </style>


    </head>
  <body>

    <div class="header"></div>
    <div class="footer"></div>

        @if($message=Session::get('success'))
            <div class="alert alert-success alert-block">
                         <strong>{{  $message }}</strong>
            </div>
     @endif

     @yield('admin')
  </body>
</html>
