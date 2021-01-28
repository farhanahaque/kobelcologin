<?php
include ('connect.php');
if(isset($_POST['submit'])){
$name=$_POST["name"];
$email=$_POST["email"];
$uid=$_POST["uid"];
$password=$_POST["pass"];
$token=bin2hex(random_bytes(15));
$mobile=$_POST["mobile"];
$company=$_POST["company"];


$sql = "Insert into Registered_User (Name, Email, UserID,Password, Token ,Mobile_Number, Company) values ('$name','$email','$uid','$password','$token','$mobile','$company')";

$sql1= mysqli_query($conn,"SELECT Email from Registered_User where Email='$email' ");

if(mysqli_num_rows($sql1)>0){
    echo "<script>
    alert('email already exists');window.location = 'https://kobelcosign.000webhostapp.com/loginpage.php'
    </script>";
    
}
else{
    
    if(mysqli_query($conn, $sql)){
        echo "Records inserted successfully.";
    }
   
   else{
echo "<script>
    alert('User ID already exists');window.location = 'https://kobelcosign.000webhostapp.com/loginpage.php'
    </script>";
       
   }
 
 }
}
$conn->close();

?>

