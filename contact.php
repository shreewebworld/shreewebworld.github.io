<?php 
if(isset($_POST['submit'])) {
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$message1= $_POST['message'];
$message="Name : {$name}\r\n Mobile No : {$mobile}\r\n Message : {$message1}";
$subject = 'Message from our website www.shriwebworld.in';
$to = 'mauli5040@gmail.com';

$headers="From: {$email}\r\nReply-To: {$email}";
mail($to,$subject,$message,$headers);
$success = "Thank you! We will reach You shortly";
echo "<script>alert('Thank you! Form Submited Successfully. We will reach You shortly')</script>";
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles.css">
<title>Contact-Shri Web World</title>
<style>

</style>

</head>

<body>
<div class="main">
<div class="header">
<img style="max-width:100%" src="images/logo.png">


<p>One Stop Solution For Website Design &amp; Development</p>
</div><!--end header -->
<div class="navbar">
 <ul>
 	<li><a href="http://www.shriwebworld.in">Home</a></li>
    <li><a href="services.html">Services</a></li>
    
    <li><a class="active" href="contact.php">Contact</a></li>
    <li><a href="">  <img style=";" src="images/phone.png" width="29" height="27">+91 8605385040</a></li>
  </ul>
</div><!--end navbar -->
<center>
<div class="contact">

<h1 style="text-shadow:0px 0px 5px #000000;color:#F30">Shri Web World</h1>
<h2>Dnyaneshwar Naiknavare</h2><h2 style="color:#900"><img src="images/phone.png" width="50" height="46" style="" >+91 8605385040</h2> Email: mauli5040@gmail.com<br>



<a href="http://www.shriwebworld.in">www.shriwebworld.in</a>

</div>

</center>
<form action="" method="post">
<fieldset>
<legend>Contact Form</legend>
<label for="name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name</label>
<input type="text" name="name" value="" placeholder="Enter Name"><br>

<label for="number">Mobile No.</label>
<input type="text" name="mobile" placeholder="10 Digit Mobile No"><br>

<label for="mail">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email</label>
<input type="text" name="mail" value="" placeholder="email"><br>

<label for="message">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Message</label>
<input type="text" name="message"><br>

<input type="submit" value="Submit" name="submit">
</fieldset>

</form>
<footer>
&copy; Copyright reserved Shree Web World 2015. Design by Dnyaneshwar Naiknavare. +91 8605385040.
</footer>
</div><!--end main -->

</body>
</html>
