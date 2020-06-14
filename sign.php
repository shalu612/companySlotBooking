<!doctype html>
<html lang="en">
  <head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Registeration form</title>

    <style>
      *{
        margin: 0;
        padding:0;
      }
          .container{
            margin-left: 10px;
            margin-top: -20px;
          }
          .header
          {
            background-color:rgba(112, 112, 236, 0.87);
              color: whitesmoke;
              padding-left: 150px;
              font-size: 10px;
              font-weight: bold;
              margin: 10px;
              top:0;
              border-radius: 5px;
              
          }
        .photo{
          border-radius: 10px;
        }

         

            h2
            {
              font-size:40px;
              position:absolute;
              top:130px;
              left:1070px;
              color:rgb(31, 31, 34);
              font-weight: bold;
            }
            form
            {
              position:absolute;
              top:210px;
              left:990px;
              color:rgb(173, 173, 173);
              font-weight: bold;
              font-size:20px;
            }
            form input
            {
              font-size:15px;
              border: none;
              border-bottom: 3px gray solid;
              width:350px;
              height:40px;
              border-radius: 5px;
              padding-left: 10px;
            }
            button
            {
              position:relative;
              left:50px;
              top:610px;
              width:350px;
           
              font-size:20px;
            
              cursor: pointer;
            }
              .hm
              {
                  font-size:27px;
                  position :absolute;
                  left:0px;
                  top:470px;
                  color:black;
                  text-decoration:none;
                  
              }
              .error{
                color:rgba(209, 29, 29, 0.801);
                font-size: 15px;
                font-weight: bold;
              }
              #icon{
                position:absolute;
                 top:20px;
                  right: 88px; 
                   color: rgb(53, 50, 49);
                   font-size: 20px; 
                   text-decoration: none;
              }

              #loginicon  {
                font-size: 45px;
              }
    </style>

             <script language="javascript" type="text/javascript">
             
             function check()
            {
               var name = document.getElementById("name");
               var email = document.getElementById("mail");
               var password = document.getElementById("password");
               var number = document.getElementById("Number");
               var valid = true;
     
     
             if(name.value.length==0)
                {
                   name.className = "wrong";
                    name.style.border="solid 1px red";
                   document.getElementById("er1").innerHTML= "Please Enter Name";
                      return false;
                }
             if(email.value.length==0)
               {
                  document.getElementById("er2").innerHTML= "Please Enter Email";
                  email.style.border="solid 1px red";
                  return false;
               }
             if(password.value.length==0 )
               {
                document.getElementById("er3").innerHTML= "Passward enter passward";
                  password.style.border="solid 1px red";
                  return false;
               }
               if(password.value.length<8)
               {
                  document.getElementById("er3").innerHTML= "Passward at least 8 digit is Required";
                  password.style.border="solid 1px red";
                  return false;
               }
             if(number.value.length==0 )
               {
                document.getElementById("er4").innerHTML= "please enter Mobile Number";
                number.style.border="solid 1px red";	
                   return false;
               }
               if( number.value.length>10 || number.value.length<10)
               {
                document.getElementById("er4").innerHTML= "10 digit mobile is required";
                number.style.border="solid 1px red";	
                   return false;
               }
           }
             </script>	

  </head>
 


  <body>

    <div class=" header">
        <h1>BookMySlot  <i style="font-size: 25px; color: rgb(53, 50, 49); " class="fas fa-calendar-alt" ></i> </h1>
        <p>book your slot  in easy way</p>
        <a href="login.php"  id="icon"><i id="loginicon" class="fa fa-user" aria-hidden="true"></i>Sign in</a>
  </div>


      <div class=" container ">
        
        <img class="photo" src="fever.png" width=1400 height=700>


       
            <h2> <i class="fa fa-user" aria-hidden="true"></i> Sing Up</h2>
            <form action="signup.php" method="GET" class="simpleform mb-4" onsubmit="return check()">
            
             <i class="fa fa-user">
            Full Name</i> <i style="color:rgba(173, 42, 42, 0.719);">*</i> <br>
             <input type = "name" Id="name" placeholder="  Name" class="wrong" name="N" ><br>
             <p class="error " Id="er1" ></p><br>
   

              <i class="fas fa-envelope"> Email </i> <i style="color:rgba(173, 42, 42, 0.719);">*</i><br>
            <input type = "email" Id="mail" placeholder="  Email Id" class="wrong" name="E" ><br>
            <p class="error" Id="er2"></p><br>
   
           <i class="fa fa-lock"> Password </i><i style="color:rgba(173, 42, 42, 0.719);">*</i><br>
            <input type = "password" Id="password" placeholder="  Password" class="wrong" name="P"><br>
            <p class="error" Id="er3"></p><br>
   
            <i class="fas fa-phone-square-alt"> Mobile Number</i><i style="color:rgba(173, 42, 42, 0.719);">*</i> <br>
            <input type = "text" Id="Number" placeholder="  Mobile Number" class="wrong" name="M"><br>
            <p class="error" Id="er4"></p><br>
   
            <button class="btn btn-success btn-lg hm" >Signup</button>
            </form >


          
      </div>
      <div class="footer" style="background-color:rgba(112, 112, 236, 0.87); text-align: Center; border-radius: 5px; right:20px; margin: 10px;">
        <h1 style="font-size: 20px;">BookMySlot</h1><i class="fa fa-users" aria-hidden="true"></i> 
        more information : kum.ayushi2019@vitbhopal.ac.in 
        <p>@copyright 2020</p>


      </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>