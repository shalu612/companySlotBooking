<?php
		
        $host = "localhost";
       $dbusername="root";
       $dbpassward = "";
       $dbname = "bookingcalendar";
       $conn = new mysqli($host,$dbusername,$dbpassward,$dbname);
      
    if($conn)
      {
               
           
              $query = 'SELECT * FROM  bookings ';
               $result = mysqli_query($conn,$query);

               
             
          
          
   ?>
<!doctype html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


    <title>show result</title>

    <style>
           
           .topheader
          {
              position:relative;
              top:-15px;
              background-color:rgba(112, 112, 236, 0.87);
              color: whitesmoke;
              padding-left:150px;
              font-size: 10px;
              font-weight: bold;
              margin: 10px;
             
              border-radius: 5px;
          }

              #icon{
                position:absolute;
                 top:10px;
                  right: 38px; 
                   color: rgb(53, 50, 49);
                   font-size: 20px; 
                   text-decoration: none;
              }
              #icon1{

                  position:absolute;
                 top:10px;
                  right: 198px; 
                   color: rgb(53, 50, 49);
                   font-size: 20px; 
                   text-decoration: none;
                
              }

              #loginicon  {
                font-size: 35px;
              }

              #foo{
        
            background-color:rgba(112, 112, 236, 0.87);
           text-align: Center; 
            border-radius: 5px;
           right:20px; 
           margin: 10px;
        }
         
          

    </style>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
  </head>

  <body style="background-color:AntiqueWhite;">

  
  <div class="topheader">
        <h1>BookMySlot  <i style="font-size: 25px; color: rgb(53, 50, 49); " class="fas fa-calendar-alt" ></i> </h1>
        <p>book your slot  in easy way</p>
        <a href="login.php"  id="icon"><i id="loginicon" class="fa fa-sign-out" aria-hidden="true"></i>SignOut</a>
        
 
    </div>

    <div class="container">
      
         <h2 style="text-align:center;">Booked Slots</h2>
          
         <table class="table table-bordered ">
        
              <tr style="background-color:SlateGrey;">
                  <th>Name </th>
                  <th>Email </th>
                  <th>Date </th>
                  <th>Booked Time </th>
              </tr>
             
             <?php
             while($row= $result->fetch_assoc())
                     
             {				
                       $name = $row['name'];
                       $email = $row['email'];
                       $date = $row['date']; 
                       $time = $row['timeslot'];
       
             ?>  
              <tr style="background-color:LightGray;">
                <td> <?php echo $name ;?></td>
                <td> <?php echo $email ;?></td>
                <td> <?php echo $date ;?></td>
                <td> <?php echo $time ;?></td>
            </tr>
            <?php }
      }
         ?>
           
            </table>

  
    </div>



    <div class="footer" id="foo" >
        <h1 style="font-size: 20px;">BookMySlot</h1><i class="fa fa-users" aria-hidden="true"></i> 
        more information : kum.ayushi2019@vitbhopal.ac.in 
        <p>@copyright 2020</p>


      </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
  </body>

</html>



