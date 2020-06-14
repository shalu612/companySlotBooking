<!doctype html>
<html lang="en">
  <head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>sign in</title>

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
                 position:absolute;
                 left:0px;
                 top:250px;
                 width:350px;
                 height:50px;
                 font-size:25px;
                 background-color:#6495ED;
                 cursor: pointer;
               }
               .error
               {
                 color:red;
                 font-size:15px;
                 height:0px;
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
             function validationform()
             {
                var username = document.getElementById("username");
                var password = document.getElementById("password");
                var valid = true;
               if(username.value.length==0)
             {
                username.className = "wrong";
                username.style.border="solid 1px red";
               document.getElementById("err").innerHTML= "Undefine Email";
               return false;
             }
               if(password.value.length==0)
             {
               document.getElementById("errr").innerHTML= "Please enter Passward ";
               password.style.border="solid 1px red";
               return false;
              }
              if(password.value.length<8)
             {
               document.getElementById("errr").innerHTML= "Please enter Passward at least 8 character";
               password.style.border="solid 1px red";
               return false;
              }

    }
</script>

  </head>
 


  <body>

    <div class=" header">
        <h1>BookMySlot  <i style="font-size: 25px; color: rgb(53, 50, 49); " class="fas fa-calendar-alt" ></i> </h1>
        <p>book your slot  in easy way</p>
        <a href="sign.php"  id="icon"><i id="loginicon" class="fa fa-user" aria-hidden="true"></i>Sign up</a>
  </div>


      <div class=" container ">
        
        <img class="photo" src="fever.png" width=1400 height=700>



      
            <h2><i class="fa fa-user" aria-hidden="true"></i> Login </h2>

            <form action="signin.php" method="GET" class="simpleform"  onsubmit="return validationform()">
            <label><span  class="input-group-addon"><i  class="fa fa-user"></i></span> E-mail</label> <br>
            <input type = "email" Id="username" placeholder="Email " class="wrong" name="E"><br>
            <p class="error" Id="err"></p><br>
			
            <label><span class="input-group-addon"><i class="fa fa-lock"></i></span> Password </label><br>
            <input type = "password" Id="password" placeholder="Password" class="wrong" name="P">
            <p class="error" Id="errr"></p>
      
            <button class="btn btn-success"  name="login">login</button>
            
        </form>

          
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