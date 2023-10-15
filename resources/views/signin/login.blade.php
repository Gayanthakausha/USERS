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
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                     <div class="card mt-2 p-2 bg-light">

                        <form action="{{route('login.post')}}" method="POST" class="ms-auto me-auto mt-3" style="width:500px">
                            @csrf
                            <div class="text-right">
                                <a href="{{route("home")}}" ><img src="/homeicon/home.jpg" class="rounded-circle" width="15%"/></a>
                            </div>
                            <div class="center">
                                <img src="/loginphoto/4.jpeg" class="rounded-circle" width="55%"/>
                            </div>

                            <div class="mb-2">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" placeholder="Enter Email" name="email" required>
                            </div>

                            <div class="mb-2">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
                            </div>

                            <div>
                                <a href="{{route("forget.password")}}" >Forgot Your Password?</a>
                            </div>

                            <div class="center">
                                <button type="submit" class="btn btn-success btn-sm btn-block">Login</button>
                            </div>

                            <div class="center">
                                <label class="form-label">Don't have an account yet?</label>
                                <a href="{{route("regi")}}"class="btn btn-primary btn-sm btn-block" >Sign Up</a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
