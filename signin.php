      <?php
    
	    $email = $_GET['E'];
        $passward = $_GET['P'];
		
		
        //   if (!empty($email)||!empty($passward))
		 // {
			  
            $host = "localhost";
            $dbusername="root";
            $dbpassward = "";
            $dbname="bookingcalendar";
            $conn =  mysqli_connect($host,$dbusername,$dbpassward,$dbname);
               
                if($conn)
				{
					
                    $query ="select * from singup where Email='$email' && Passward='$passward'";
				    $result = mysqli_query($conn,$query);
					$rowcount = mysqli_num_rows($result);
					  if($rowcount>0) 
				     {
					   header('Location: index.php');
					   exit;
				     }
				     else
				     {
					    header('Location: error.php');
					   exit;
				     }
				}
				else
				{
					echo "not connected";
				}
		//   }
		/*else
		{
		    echo "all fields are required";
			return false;
		}
	?>*/