<html>


<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal  {
  /* Hidden by default */
  position: absolute; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow:  scroll; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;

}

/* The Close Button */






input[type=text], input[type=password],select, textarea {
  width: 100%;
  padding-block: 20px;
  border: none;
  background: none;
  border-bottom: 2px solid #5eaacc;
  margin-right: : -8px;
  margin-bottom: 16px;
  resize: vertical;
}


div h3{
  margin-bottom: 30px;
  text-align: center;
}
.submitbtn{
  text-align: center;
}
.submit {
  background-color: none;
  color: black;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-bottom: : -25px;
  text-decoration: none;


}

.submit:hover {
  background-color: white;
  color: blue;
  text-align: center;
}

.c-form{
  width: 50%;
  margin: auto;
}

.input-fields{
  display: flex;
  flex-direction: column;
  margin-right: 4%;
}
.input-fields,
.msg{
  width: 100%;
}

</style>
</head>
<body>








 <!---Forget password-->

    <div class="modal">
         <div class="modal-content">
         <span class="close">&times;</span>
         <form action="" method="POST">
         <h1>Password reset</h1>
         <p>Please enter your password.</p>

         <hr>
             <label for="pass"><b>New password</b></label>
         <input type="password" placeholder="Enter New password" name="password" required><br><br>
         <br><br>
         <div class="field">
         			<span id="message"></span>
         		</div>
         <center>  <button type="submit" name="submit">Submit</button></center>
         </form>


    </div>
</div>




<!-- import jquery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- check password confirmation -->
	<script>
		$(() => {
			$('#txtNewPassword, #txtConfirmPassword').on('keyup', function () {
				if ($('#txtNewPassword').val() == "" && $('#txtConfirmPassword').val() == "") {
					$('#submit-pass').prop('disabled', true);
					$('#message').hide();
				} else if ($('#txtNewPassword').val() == $('#txtConfirmPassword').val()) {
					$('#submit-pass').prop('disabled', false);
					$('#message').show().html('Password Matched').css('color', 'green');
				} else {
					$('#submit-pass').prop('disabled', true);
					$('#message').show().html('Password does not match').css('color', 'red');
				}
			});
		});
	</script>


</body>
</html>










<?php
include ('connect.php');


if(isset($_POST['submit'])) {
  
    if(isset($_GET['Token']))
{
$token = $_GET['Token'];
$pass = $_POST['password'];
//$cpass = mysqli_real_escape_string($conn,$_POST['cpass']);

try{
    
$sql = "UPDATE Registered_User SET Password ='$pass' WHERE Token = '$token'";

$result = mysqli_query($conn, $sql);

    if ($result) 
    {
      echo "Password Reset Sucessfully";
      header('location: https://kobelcosign.000webhostapp.com/loginpage.php');

    }
    
else {

    
    //header('location: https://kobelcosign.000webhostapp.com/loginpage.php');
 
}
}
catch (Exception $e){
    echo $e->getMessage();
}

}
}


$conn->close();

?>











