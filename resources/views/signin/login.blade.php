@extends('layouts.login')
@section('title','Login')
@section('content')
    <div class="container">
        <div class="mt-5">
            @if($errors->any())
                <div class="col-12">
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                </div>
            @endif
            @if(session()->has('error'))
                <div class="alert alert-danger">{{session('error')}}</div>
            @endif

            @if(session()->has('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif
        </div>

            <div class="container d-flex justify-content-center align-items-center min-vh-10">
                <div class="row border rounded-5 p-3 bg-white shadow box-area" style="margin-bottom: 100px; height:560px">
                    <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="width:100px;height:500px;">
                        <div class="featured-image mb-3">
                            <img src="/img/11.jpg" class="img-fluid" style="width: 650px; height:500px; margin-top:100px;">
                        </div>
                        <p class="" style="font-family: 'Courier New', Courier, monospace; font-weight: 600; color: rgb(128, 67, 208);margin-bottom:50px;">WELCOME TO CARELINK</p>
                            <form action="{{route('login.post')}}" method="POST" class="ms-auto me-auto mt-3" style="width:500px">
                             @csrf
                        </div>
                <div class="col-md-6 right-box" style="margin-bottom: 250px;">
                   <div class="row align-items-center" style="margin-left: 10%">
                         <div class="header-text mb-4">
                            <h2 data-text="Hello Welcome" class="Lh2" style="white-space: nowrap;">Hello Welcome</h2>
                         </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" placeholder="Enter Email" name="email" required>
                    </div>

                    <div class="form-group mt-0.1">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
                    </div>


                         <div class="input-group mb-5 d-flex justify-content-between">
                             <div class="form-check">
                                 <input type="checkbox" class="form-check-input" id="formCheck">
                                 <label for="formCheck" class="form-check-label text-secondary"><small>Remember Me</small></label>
                             </div>
                             <div class="forgot">
                                <a href="{{route("forget.password")}}" >Forgot Your Password?</a>
                             </div>
                         </div>
                         <div class="input-group mb-3">
                             <a href=""><button class="btn btn-lg btn-primary w-100 fs-6" style="margin-top: 10%; margin-left: 150%; ">Login</button></a>
                         </div>

                         <div class="row" style="margin-top: 1%; margin-left:10%;">
                             <small>Don't have account? <a href="{{route("regi")}}">Sign Up</a></small>
                         </div>
                        </form>
                   </div>
                </div>

               </div>
             </div>
    </div>
@endsection
