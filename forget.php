<?php 

if(isset ($_POST['submit'])){
$email = $_POST['email'];
include ('connect.php');
$emailquery = "select UserID, Email from Registered_User where Email='$email'";

$result = $conn->query($emailquery);
$query = mysqli_query($conn,$emailquery);
$emailcount= mysqli_num_rows($query);

if($emailcount)
{

$userdata = mysqli_fetch_assoc($query,MYSQLI_ASSOC);
$uid = $userdata['UserID'];
$token = $userdata['Token'];
$subject = "Password Reset";
$body= "Hi, $uid. click here https://kobelcosign.000webhostapp.com/resetpass.php?token=$token";
   $sender_email="From: farhanasumi893@gmail.com";
   
 if (mail($email,$subject,$body,$sender_email) )
 {
 //$_SESSION['msg']="check email $email";
 header('location: loginpage.php');
 }
 else{
 echo "email sending failed";
 }
}
}
 else{
 echo "no email";
 }

$conn->close();

?>

