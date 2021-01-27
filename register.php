<?php
$name=$_POST["name"];
$email=$_POST["email"];
$uid=$_POST["uid"];
$password=$_POST["pass"];
$token=bin2hex(random_bytes(15));
$mobile=$_POST["mobile"];
$company=$_POST["company"];

include ('connect.php');
$sql = "Insert into Registered_User (Name, Email, UserID,Password, Token ,Mobile_Number, Company) values ('$name','$email','$uid','$password','$token','$mobile','$company')";
if (mysqli_query($conn, $sql)) {
echo "Records inserted successfully.";


} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$conn->close();

?>



