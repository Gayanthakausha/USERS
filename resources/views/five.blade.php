@extends('layout')
@section('content')
    <style>
        .form {
            border: 2px soild #ff5733;
            border-radius:20px;
            backdrop-filter:blur(10px);
            width: 1400px;
            height: 700px;
            margin: auto;
            display: flex;
            align-items: center;
            padding: 80px;
            box-sizing: border-box;
            position: relative;
           
        }

        .body{
            background-image: url('/img/nurse2.jpg');
            background-repeat: no-repeat;
               background-size:cover;
               display:flex;
               min-height:100vh;
        }

        

        .right-side{ float:left;
                    width:50%;
                    
        }

        .left-side{ float:right;
                    width: 50%;
                    
                    
                    
        }

        .button{
                 float: right;
        }




        </style>
      <div class="body">
        <div class="form">
             
             <form action="">
                   <h4><b><u>Personal Details</u></b><h4>
                <br>
                    
                    <label><b>First Name*</b></label>
                    <input type="text" name="name" placeholder="First Name" class="form-control" >
          
                    <br>
                
                    <label><b>Last Name*</b></label>
                    <input type="text" name="last name" placeholder="Last Name" class="form-control">
            
                    <br>

                    <label><b>Date of Birth*</b></label>
                    <input type="Date" name="DoB" placeholder="Date of Birth" class="form-control">
                   <br>

                    <label><b>Gender*</b></label>
                    <select name="gender" class="form-select" required class="form-control">
                   <br>

                <option value="male">male</option>
                <option value="female">female</option>
             </select>
             <br>
           
        
           
             <label><b>Last </b></label>
            <textarea class="form-control" raws="3" class="form-control">
            </textarea>
            
      
     
       
      <label><b>Email*</b></label>
                    <input type="text" name="name" placeholder="Email" class="form-control" >
         
     <label><b><br>Phone Number*</b></label>
                    <input type="text" name="phoneNumber" placeholder="Phone Number" class="form-control"  >
           <br><br><br><br>            
    
          
          <div class ="button">          
        <center><a href="/six"> <button type="button" class="btn btn-primary float-right">Next</button></a></center>
    </div>
    
      
            

    </div>
    
            
    @endsection