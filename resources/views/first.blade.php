@extends('layout')

@section('content')
    <!doctype html>
    <html>
    <head>
    <style>
        .form {
            
            border: 2px soild #ff5733;
            border-radius:20px;
            backdrop-filter:blur(10000px);
            width: 500px;
            height: 550px;
            margin: auto;
            display: flex;
            align-items: center;
            padding: 80px;
            box-sizing: border-box;
            position: relative;
           margin: top;
           float: right;  
        }

        .p1{
            float: left;
        }

        .body{ background-image :url('/img/img/loginbg.jpeg');
               background-repeat: no-repeat;
               background-size:cover;
               display:flex;
               min-height:100vh;
               
          }

        .center-image {

                 text-align:center;
        }
       
    </style>

    
    <div class="body">

       <div class="p1">
           <br><br><br><br>
             <h1 style= "color:dark blue" class="mx-5"> Welcome  to Our Page</h1><br>
             <h2 style="color:blueviolet"  class="mx-5"> Care Link</h2><br>
             <pre>HealthCare.gov is a health insurance exchange website
               operated by the United States federal government
               under the provisions of the Affordable Care Act or ACA,
                commonly referred to as “Obamacare”, which currently
                serves the residents of the U.S. states which
                 have opted not to create their own state exchanges.
                  Wikipedia</pre>
                  <br><br>
                  <div class="image mb-10"  >
                  <img src="{{ asset('img/img/facebook.jpeg') }}" alt="" width="40px" height="40px" class="mx-4">
                  <img src="{{ asset('img/img/instragrame.jpeg') }}" alt="" width="40px" height="40px" class="mx-4">
                  <img src="{{ asset('img/img/youtube.jpeg') }}" alt="" width="40px" height="40px" class="mx-4">
                  <img src="{{ asset('img/img/tiktok.jpeg') }}" alt="" width="40px" height="40px" class="mx-4">
                  </div>
       </div>
         
     <div class="form">
        <form>
            <div class="container center-image mb-4">
            <img src="{{ asset('img/img/admindb.jpeg') }}" alt="" width="100px" height="100px" class="mx-auto">
           </div>

           <div class="from-group mb-9">
                    
                        <table border="0">
                        
                            <tr style="padding-bottom:40px;">
                   <td> <label for="email" >Email</label></td>
                  
                 
                   <td>  <input type="email" name="email" value="email" class="form-control"> </td>
    </tr>
                  
    
    </div>
                 
          
                <div class="from-group mb-5">
                    
                    
                   <tr > 
                  <td> <br><label for="password" > Password</label></td>
                 
                  <div class="input-group-append">
                    <button class="btn btn-outline-secondry" type="button" >
                        <img src="{{asset('img/eve1.jpeg')}}" alt="" >
                    </button>
                   </div>
    
                  <td> <br><input type="password" name="password" value="password" class="form-control "> 
                
                </td>
                  </tr>
    </div>
                 </table>
                
    
              <br><br>
            <input type="checkbox" name="Active">  <label> Remember me </label> 
            <br><br>
            <a href=""> Forgot Password? </a>
            
            <br><br><br>
            <div class="text-right">
            <button type="button" class="btn btn-primary float-right"> Log in </button>
             </div> 
    
        </form>
    </div>
    </div>

    
    </body>
    </html>
    @endsection
