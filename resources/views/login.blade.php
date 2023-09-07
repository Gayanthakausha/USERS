@extends('layout')
@section('title','login')
@section('content')
<!DOCTYPE HTML>
<head>
    <style>
        .container{
            position:absolute;
            left: 25%;
            top: 10%;
            bottom: 10%;
            padding: 30px;
            width: 600px; height: 450px; 
            background: #D9D9D9
        }
        
        </style>
    
    

<div class="container",>
<form action="{{route('login.post')}}" method="POST" class="ms-auto me-auto mt-auto mb-auto">
    @csrf
    <h1>LOG IN</h1>
   
  <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email" class="form-control" name="email">
    
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <div class="mb-3 form-remember">
    <input type="checkbox" class="form-remember-input" id="Remember1">
    <label class="form-remember-label" for="Remember1">Remember Me</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection