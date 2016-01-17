
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>
	<head>
		<title>Tot Dogs Cincinnati</title>
		<link href="style.css" rel="stylesheet" type="text/css" />

	</head>
	<body>
		<div id="container">
		
		<div id="header">
		</div><!--end header">-->
		
		<div id="content">
			<div id="centercontent">
					<div id="logo">
						<img src="images/totdogsforweb.png" alt="tot dogs" width="400"/>
					</div><!--end logo-->
					<div id="right">
						<h1>There's a new dog in town.</h1>
						<p>Thank you! We'll let you know when we have a delicious hot dog with your name on it.<br />
						<a href="index.html">Go back</a></p>
						
					</div><!--end right-->
				</div><!--end centercontent-->
			</div><!--end content-->
			<div id="footer">
			</div><!--end footer-->
		</div><!--end container-->
		
		<?php 

$to='amandalee.anderson@gmail.com	';
$subject='Totdogs subscriber!';

//form variables TEXTFIELDS
$email=$_POST['email'];
//form variables CHECKBOXES

//email message
$message= "Please add $email to the mailing list.";
mail($to,$subject,$message); ?>
</div>
	</body>
</html>
