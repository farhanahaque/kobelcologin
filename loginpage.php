<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal  {
  display: none; /* Hidden by default */
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
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}



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
.login{
  background-color: none;
  color: black;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-bottom: : -25px;
  text-decoration: none;
}

.login:hover{
  background-color: white;
  color: blue;
  text-align: center;
}
.close{
    
}

.container {
  border-radius: 5px;
  background-color: white;
  color: black;
  padding: 20px;
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


<!--registration form Start-->

<div class="container">
  <div><h3>Login</h3></div>
  <div class="c-form">

<form action="login.php" method="post">
  <span style="color:red;font-weight:bold">
    <?php 
      if(isset($_GET['msg']))
          echo $_GET['msg']; 
     ?>
  </span><br>
 
  <label for="uid"><b>User ID</b></label>
  <input type="text" placeholder="Enter Your User ID" name="uid" required>
  <label for="pass"><b>Password</b></label>
  <input type="password" placeholder="Enter Your Password" name="pass" required>
  <div class="submitbtn">
  <button type="submit" class="login">Login</button><br><br></div>
  
  
  </form>
  </div>
  <div class="submitbtn">
  <a class="submit" href="#myModal">New User Registration</a><br><br>
  </div>
<!--registration form End-->


<!-- Sign up page Start -->
<div id="myModal" class="modal">
   <div class="modal-content">
      <span class="close">&times;</span>
      <form method="post" action="register.php" >
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <label for="name"><b>Name</b></label>
      <input type="text" placeholder="Enter Your Name" name="name" required><br><br>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Your Email" name="email" required><br><br>
      <label for="uid"><b>User ID</b></label>
      <input type="text" placeholder="Enter Your User ID" name="uid" required><br><br>
      <label for="pass"><b>Password</b></label>
      <input type="password" placeholder="Enter Your Password" name="pass" required><br><br>
      <label for="telephone"><b>Mobile Number</b></label>
      <input type="text" placeholder="Enter Your Mobile Number" name="mobile" required><br><br>
      <label for="name"><b>Company Name</b></label>
      <input type="text" placeholder="Enter Your Company Name" name="company" required><br><br>
      <center>  <button type="submit" class="close1">Cancel</button>
      <button type="submit">Submit</button></center>
    </form>
    </div>
</div>

<!--registration form End-->

<!---Forget password-->

<div class="submitbtn"><a  class="submit" href="#myModal1">Forget Password</a></div>
    <div id="myModal1" class="modal">
         <div class="modal-content">
         <span class="close">&times;</span>
         <form method="post" action="forget.php" >
         <h1>Password reset</h1>
         <p>Please enter your Registered User ID and email address.</p>
         
         <hr>
         <label for="email"><b>Email ID</b></label>
         <input type="text" placeholder="Enter Your Registered Email" name="email" required><br><br>
         <center>  <button type="submit" name="submit">Submit</button></center>
         </form>
    </div>
</div>



<script>
// Get the button that opens the modal
var btn = document.querySelectorAll(".submit");

// All page modals
var modals = document.querySelectorAll('.modal');

// Get the <span> element that closes the modal
var spans = document.getElementsByClassName("close");
var spans1 = document.getElementsByClassName("close1");


// When the user clicks the button, open the modal
for (var i = 0; i < btn.length; i++) {
 btn[i].onclick = function(e) {
    e.preventDefault();
    modal = document.querySelector(e.target.getAttribute("href"));
    modal.style.display = "block";
 }
}

// When the user clicks on <span> (x), close the modal
for (var i = 0; i < spans.length; i++) {
 spans[i].onclick = function() {
    for (var index in modals) {
      if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";
    }
 }
}

// When the user clicks on <span> (x), close the modal
for (var i = 0; i < spans1.length; i++) {
 spans1[i].onclick = function() {
    for (var index in modals) {
      if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";
    }
 }
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target.classList.contains('modal')) {
     for (var index in modals) {
      if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";
     }
    }
}
</script>

</body>
</html>
