<!DOCTYPE html>
<html lang="en" class="no-js interactive-bkg">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title></title>
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="author" content="" />
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
   		<script type="text/javascript" src="js/jquery.interactive_bg.js"></script>
		<!-- Edit Below -->
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link href='https://fonts.googleapis.com/ css?family=Noto+Serif:400,700' rel='stylesheet' type='text/css'>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
	</head>
	<body>
		<div class="container bg" data-ibg-bg="background-january.jpg">
			<div class="addressform">
				<h1>Want a postcard? <br />Enter your info here.</h1>
				<p class="smaller">All fields are required.</p>
				<form class="sendform" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
					<input type="text" placeholder="name" name="name" required />
					<input type="text" placeholder="address" name="address" required />
					<input type="text" placeholder="city" name="city" required />
					<input type="text" placeholder="state" name="state" required />
					<input type="text" placeholder="zip" name="zip" required />
					<input type="text" placeholder="country" name="country" required />
					<input type="text" placeholder="email" name="email" required />
					<label for="notabot" class="notabot" name="notabot">I'm not a bot
						<input type="checkbox" value="i'm not a bot" name="notabot" />
					</label>
					
					<input type="submit" value="send me a postcard" />
				</form>
				<?php if (isset($_POST['submit'])) : ?>
				   <p>Thank you for subscribing!</p>
				<?php endif; ?>
			</div>
		
    	<script type="text/javascript">
        $(".bg").interactive_bg();
      </script>
      <footer>
      	<a href="mailto:info@sendingpost.cards">Contact me</a>
      </footer>

		</div><!-- Container -->
		<?php 
			// vars from form

			$to='info@sendingpost.cards	';
			$email=$_POST['email'];
			$name=$_POST['name'];
			$address=$_POST['address'];
			$city=$_POST['city'];
			$state=$_POST['state'];
			$country=$_POST['country'];
			$zip=$_POST['zip'];

			//subject
			$subject='Someone wants a postcard!';

			//email message
			$message= "Please add $name to the postcarding list for this month. $email $name $address $city $state $country $zip THANKSSSS";
			mail($to,$subject,$message); ?>
		
	</body>
<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		  ga('create', 'UA-2700135-20', 'auto');
		  ga('send', 'pageview');
</script>

	
</html>
