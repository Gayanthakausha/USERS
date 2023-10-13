<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareLink</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <style>
        body {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height:100vh;
            background-image: url('/img/as-1.jpg');
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
        }
        .txt{
            font-family: 'Times New Roman', Times, serif;
            color: yellow;
        }
    </style>
</head>
<body>

    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;">
        <a href="C:\Users\ASUS\Desktop\laravel\example-app1/login/seven"><button type="button" class="btn btn-success"><h2 class="txt">Register as nurse</h2></button></a>
        <br><br>
        <a href=""><button type="button" class="btn btn-success"><h2 class="txt">Register as patient</h2></button></a>
    </div>


    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img class="logo" src="/img/logo.jpg" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#portfolio">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#team">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
              <li class="nav-item">
                <i class="bi bi-globe2" style="display: inline-block; vertical-align: middle;margin-left:30px;"></i>
                <select class="nav-link" style="display: inline-block; vertical-align: middle;">
                    <option value=""><a href="">English</a></option>
                    <option value=""><a href="">Sinhala</a></option>
                </select>
            </li>


            </ul>
          </div>
        </div>
      </nav>
</body>

