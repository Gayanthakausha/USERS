@extends('layout')
@section('title','register')
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
<form action="{{route('register.post')}}" method="POST">
    @csrf
    <h1>REGISTER</h1>
   
  <div class="mb-3">
    <label class="form-label">Full Name</label>
    <input type="text" class="form-control" name="name">
   
  </div>
  <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email" class="form-control" name="email">
   
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  
  <button type="submit" class="btn btn-primary">Register</button>
</form>
</div>
@endsection