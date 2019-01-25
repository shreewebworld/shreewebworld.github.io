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
<?php include("header.php"); ?>
<?php include("menu.php"); ?>

<div class="row">

<div class="col-md-6 col-sm-6">
	<div class="panel panel-info">

		<div class="panel-heading">
			<h1>Contact Form</h1>
		</div>

		<div class="panel-body">
		<form action="" method="post" role="form">
		<div class="form-group">
			<label for="name">Name :</label>
			<input class="form-control" type="text" name="name" placeholder="Enter Your Name" Required><br>
		</div>

		<div class="form-group">
			<label for="email">Email : </label>
			<input class="form-control" type="text" name="email" placeholder="Enter Valid Email" required><br>
		</div>

		<div class="form-group">
			<label for="mobile">Mobile : </label>
			<input class="form-control" type="text" name="mobile" placeholder="Enter 10 Digit Mobile"><br>
		</div>

		<div class="form-group">
			<label for="message">Message : </label>
			<textarea class="form-control" name="message"></textarea><br>
		</div>

		<center>
		<button class="btn btn-primary" type="reset" name="Reset">Reset</button>
		<button class="btn btn-primary" type="submit" name="submit">Submit</button>
		</center>
	</form>
	</div>

	</div>
</div> 
<div class="col-md-6 col-sm-6">
<div class="panel panel-info">
<div class="panel-heading">
<address>
<h2>Shree Web World</h2>
</div>
<div class="panel-body" >
<br><br>
<h4 style="line-height:40px"><i>Dnyaneshwar Naiknavare<br>
Email : mauli5040@gmail.com<br>
Mobile</i> : +91 8605385040</h4>
</address>
</div>
</div>

</div>
</div>
<?php include("footer.php"); ?>