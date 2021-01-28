<?php 

if(isset ($_POST['submit'])){
$email = $_POST['email'];
include ('connect.php');


$sql = "select UserID, Token from Registered_User where Email='$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
  $row = mysqli_fetch_assoc($result);
  $uid = $row["UserID"];
  $token = $row["Token"];
  $subject = "Password Reset";
  $body= "Hi, $uid. click here https://kobelcosign.000webhostapp.com/resetpass.php?Token=$token";
  $sender_email="From: farhanasumi893@gmail.com";
     if (mail($email,$subject,$body,$sender_email) )
          {
             //$_SESSION['msg']="check email $email";
             header('location: loginpage.php');
          }
          
    else
        {
            echo "email sending failed";
        }      
          
          
        }
}
        

   else{
        echo "no email";
  }

    $conn->close();
?>
