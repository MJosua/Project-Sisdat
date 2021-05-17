<?php
   include("config.php");
	ob_start();
    session_start();
    ob_end_clean();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $username = mysqli_real_escape_string($db,$_POST['iusername']);
      $password = mysqli_real_escape_string($db,$_POST['ipassword']); 
      
      $sql = "SELECT * FROM tb_user WHERE username = '$username' and password = '$password'";
      $result = mysqli_query($db,$sql);
	  if (!$result) {
		printf("Error: %s\n", mysqli_error($db));
			exit();
		}
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	  

      
      $count = mysqli_num_rows($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_start();
         $_SESSION['username'] = $username;
         $_SESSION['ID'] = $row['ID']; // set session untuk ID
         header("location:RM/siap.php");
      }else {
	header("location:form-login.php");
		
      }
   }
   
?>