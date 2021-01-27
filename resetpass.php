<html>
 <!---Forget password-->

<div class="submitbtn"><a  class="submit" href="#myModal1">Forget Password</a></div>
    <div id="myModal1" class="modal">
         <div class="modal-content">
         <span class="close">&times;</span>
         <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>"method="POST">
         <h1>Password reset</h1>
         <p>Please enter your password.</p>
         
         <hr>
         <label for="pass"><b>New password</b></label>
         <input type="password" placeholder="Enter New password" name="pass" required><br><br>
         <label for="cpass"><b>confirm password</b></label>
         <input type="password" placeholder="confirm password" name="cpass" required><br><br>
         <center>  <button type="submit" >Submit</button></center>
         </form>
    </div>
</div>



   
    
</html>













<?php
include ('connect.php');


$pass = mysqli_real_escape_string($conn,$_POST['pass']);
$cpass = mysqli_real_escape_string($conn,$_POST['cpass']);

$pass = password_hash($pass, PASSWORD_BCRYPT);
$cpass = password_hash($cpass, PASSWORD_BCRYPT);





if($pass === $cpass){

$iquery = mysqli_query($conn, $iquery);

if ($iquery) 
{
}
else



?>
