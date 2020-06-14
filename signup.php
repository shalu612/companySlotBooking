

<?php
    $username =$_GET['N'];
    $email = $_GET['E'];
    $passward = $_GET['P'];
    $phone = $_GET['M'];

       //  if(!empty($username)||!empty($email)||!empty($passward)||!empty($phone))
		// {
            $host = "localhost";
            $dbusername="root";
            $dbpassward = "";
            $dbname = "bookingcalendar";
            $conn = new mysqli($host,$dbusername,$dbpassward,$dbname);

                
				if($conn)
				{
					$search ="select*from singup where Email='$email'";
				    $result = mysqli_query($conn, $search);
					$rowcount = mysqli_num_rows($result);
					  if($rowcount >0)
				     {
						  echo 'you already have account of this email id';
				     }
				     else
				     {
					   //echo 'you not your account';
					   $sql= "INSERT INTO singup(Name,Email,Passward,Mobile)
				         VALUES('$username','$email','$passward','$phone')";
					      if (mysqli_query($conn,$sql))				
					      {
					         header('Location: login.php');
					         exit;
						
					      }
				     }
                    
				     
			
				}
		            else
					{
						  echo " No data inserted  successfully";
						
					}
				
		/* }
		 else
		 {
			  echo "all field are required";
			      	
			
		 }*/
?>
