<?php

$uid=$_POST["uid"];
$password=$_POST["pass"];


include ('connect.php');


try{
    
$sql = "SELECT UserID, Email FROM Registered_User WHERE UserID='$uid' AND Password='$password'";
    $results = mysqli_query($conn, $sql);

    if (mysqli_num_rows($results) == 1) 
    {
      echo "Login Success";
    }
    
else {

   
    echo "<script>
    alert('wrong User ID and Password');window.location = 'https://kobelcosign.000webhostapp.com/loginpage.php'
    </script>";
    //header('location: https://kobelcosign.000webhostapp.com/loginpage.php');
 
}
}
catch (Exception $e){
    echo $e->getMessage();
}
$conn->close();

?>



