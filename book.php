<?php

    $date = $_GET['date'];


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $timeslot = $_POST['timeslot'];
    
    $mysqli = new mysqli('localhost', 'root', '', 'bookingcalendar');

    $search ="select * from bookings where timeslot='$timeslot'";
    $result = mysqli_query($mysqli, $search);
    $rowcount = mysqli_num_rows($result);
      if($rowcount >0)
      {
        echo 

        '

        <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                       <b style="font-size:15px;">Already Booked</b><br>
                       <hr>
                       <p style="font-size:10px;"> Choose Another Slot</p>
                       
                        <h4 class="modal-title">Booking:<span id="slot"></span></h4>
                    </div>
                    
                   
                </div>

        </div>
    </div>';
    $rowcount=null;
     }
      else
      {
        $stmt = $mysqli->prepare("INSERT INTO bookings (name, timeslot , email, date ) VALUES (?,?,?,?)");
        $stmt->bind_param('ssss',  $name, $timeslot, $email, $date);
        $stmt->execute();
        $msg = "<div class='alert alert-success'>Booking Successfull</div>";
        $stmt->close();
        $mysqli->close();
      }

   
}

$duration=20;
$cleanup=0;
$start= "09:00";
$end = "17:00";



function timeslots($duration,$cleanup,$start,$end){
    $start =new DateTime($start);
    $end= new DateTime($end);
    
    $interval =new DateInterval("PT".$duration."M");
    $cleanupInterval =new DateInterval("PT".$cleanup."M");
    $slots= array();

        for ($intStart=$start; $intStart< $end ; $intStart->add($interval)->add($cleanupInterval)) {

                $endPeriod =clone $intStart;
                $endPeriod->add($interval);

                if ($endPeriod > $end) {
                    
                break;
                }
                $slots[]= $intStart->format("H:iA")."-".$endPeriod->format("H:iA");
        }
        return $slots;
}

?>
<!doctype html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
       
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
          .book:hover
          {
              background-color:LimeGreen;
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
        <a href="show.php"  id="icon1"><i id="loginicon" class="fa fa-history" aria-hidden="true"></i>H</a>
 
    </div>

    <div class="container">
        <h1 class="text-center">Book for Date: <?php echo date('d/m/Y', strtotime($date)); ?></h1><hr>
        <div class="row py-2" style="height:500px;">
        <div class="col-md-12">
        <?php echo isset($msg)?$msg:"";?>
        </div>
           <?php $timeslots = timeslots($duration,$cleanup,$start,$end);
           foreach($timeslots as $ts){
               
               ?>
                <div class="col-md-2">
                <div class="form-group">
                <button class="btn btn-warning book" data-timeslot="<?php echo $ts;?>"><?php echo $ts;?>  </button>
                </div>
                </div>
                <!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Booking:<span id="slot"></span></h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                            <div class="col-md-12">
                                                <form action="" method="post">
                                                    <div class="form-group">
                                                        <label for="">Timeslot</label>
                                                        <input required type="text" readonly name="timeslot" id="timeslot" class="form-control">

                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="">Name</label>
                                                        <input  required type="text"  name="name" class="form-control">
                                                        
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">Email</label>
                                                        <input required  type="email"  name="email" class="form-control">
                                                        
                                                    </div>

                                                    <div class="form-group">
                                                    <button class="btn btn-primary pull-right" type="submit" name="submit" > Submit</button>
                                                    </div>

                                                </form>
                                            </div>
                                    </div>
                                </div>
                               
                            </div>

                    </div>
                </div>
                
           <?php } ?>
        </div>
    </div>

    <div class="footer" id="foo" >
        <h1 style="font-size: 20px;">BookMySlot</h1><i class="fa fa-users" aria-hidden="true"></i> 
        more information : kum.ayushi2019@vitbhopal.ac.in 
        <p>@copyright 2020</p>


      </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script>
    $(".book").click(function(){
        var timeslot= $(this).attr('data-timeslot');
        $("#slot").html(timeslot);
        $("#timeslot").val(timeslot);
        $("#myModal").modal("show");
    })
    </script>
  </body>

</html>



