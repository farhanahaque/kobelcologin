<?php

$uid=$_POST["uid"];
$password=$_POST["pass"];


include ('connect.php');

$sql = "SELECT UserID, Email FROM Registered_User WHERE UserID='$uid' AND Password='$password'";
    $results = mysqli_query($conn, $sql);

    if (mysqli_num_rows($results) == 1) 
    {
      echo "Login Success";
    }
    
else {

   

    header('location: https://kobelcosign.000webhostapp.com/loginpage.php');
 
}
  

$conn->close();

?>



