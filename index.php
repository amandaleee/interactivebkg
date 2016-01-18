<!DOCTYPE html>
<html lang="en" class="no-js interactive-bkg">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title></title>
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="author" content="" /><!-- 
		<link rel="shortcut icon" href="../file/favicon.gif">  -->
    	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<link rel="stylesheet" type="text/css" href="css/default.css" />
   		<script type="text/javascript" src="js/jquery.interactive_bg.js"></script>
		<!-- Edit Below -->
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="../file/js/modernizr.js"></script>
	</head>
	<body>
		<div class="container bg" data-ibg-bg="bg.jpg">
			<div class="addressform">
				<h1>Want a postcard? Enter your info here.</h1>
				<form class="sendform" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
					<input type="text" placeholder="name (required)" name="name" />
					<input type="text" placeholder="address" name="address" />
					<input type="text" placeholder="city" name="city" />
					<input type="text" placeholder="state" name="state" />
					<input type="text" placeholder="zip" name="zip" />
					<input type="text" placeholder="country (required)" name="country" />
					<input type="text" placeholder="email (required)" name="email" />
					<label for="notabot" class="notabot" name="notabot">I'm not a bot
						<input type="checkbox" value="i'm not a bot" name="notabot" />
					</label>
					
					<input type="submit" value="sendmeapostcard" />
				</form>
				<?php if (isset($_POST['submit'])) : ?>
				   <p>Thank you for subscribing!</p>
				<?php endif; ?>
			</div>
		
    	<script type="text/javascript">
        $(".bg").interactive_bg();
      </script>
      <footer>
      	<a href="#">What's this?</a>
      	<a href="#">FAQ</a>
      	<!-- <a href="#">Tip me [for the postage]</a> -->
      	<a href="mailto:#">Contact me</a>
      </footer>

		</div><!-- Container -->
		<?php 
			// vars from form

			$to='amandalee.anderson@gmail.com	';
			$email=$_POST['email'];
			$name=$_POST['name'];
			$address=$_POST['address'];
			$city=$_POST['city'];
			$state=$_POST['state'];
			$country=$_POST['country'];
			$zip=$_POST['zip'];

			//subject
			$subject='$name wants a postcard!';

			//email message
			$message= "Please add $name to the postcarding list for this month. $email $name $address $city $state $country $zip THANKSSSS";
			mail($to,$subject,$message); ?>
		
	</body>


	
</html>
