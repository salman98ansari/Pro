<?php 
  session_start(); 


  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Price.</title>
	<meta name="viewport" content="width=device-width , initial scale=1.0">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
	integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
	 crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" 
	integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ"
	 crossorigin="anonymous">
	 <link rel="stylesheet" type="text/css" href="css/style.css" />

</head>
<body>
<div class="background-img">

	 <nav class="navbar navbar-inverse navbar-fixed-top">
		<ul>
			<li><a class ="logo" href="index.php">Mobile Comparison</a></li>
			<li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
			<!--
			<li><a href="https://www.flipkart.com/" target="blanck"> Flipkart</a></li>
			<li><a href="https://www.amazon.in/" target="blanck"> Amazon</a></li>
	-->
			<li><a href="#about">About</a></li>
			<li><a href="#feedback">Feedback</a></li>
			<li><a href="log/register.php">Register</a></li>
			<li><a href="log/login.php">Login</a></li>
			<?php  if (isset($_SESSION['username'])) : ?>
			<li> Welcome <strong><?php echo $_SESSION['username']; ?></strong>  </li>
			<li><a href="index.php?logout='1'" style="color: red;">logout</a></li>
			<?php endif ?>
		</ul>
	</nav>


 
	 <div class="search-ba">
		 <form method="get" action="php/price.php">
				<input type="search" name="searchdata" id="search" class="search" placeholder="Search" required="required">
				<input type="submit" name="Submit" value="Search" id="submit" class="submit">		
		 </form>
	 </div>


</div>

<div>

	
	<div id="about"  class= " container container fluid jumbotron"  class="aboutt">
		<h1>About</h1>
		<p>Comparison shopping sites make shopping very convenient by helping you to find the desired product
		at the most competitive rate.</p>
		 
		<p>When it comes to selecting the best Smartphone, it becomes quite challenging and confusing to select the best one out of a pool of million devices. You have to individually
			visit different sites to get the best price or top deals and offer.</p>
		<p>Don’t you agree that one can save a big amount of money & Time
			online when you know where to look for the information with helps you take
			better decisions? Yes! With Price Comparison Website</p>	
	</div>


		<div  id="feedback" class="container">
			<h1>Feedback</h1>
			<p>Gives Us Your Valuable Feedback or Suggestion To Improve Working Of Our Website.</p>

		</div>
		<div class="text-center">
			<form action="php/feedback.php" method="post">
				<div class="label-name"><label for="name">Name:</label></div>
				<input class="input" id="sname" type="text"  name="name" placeholder="Name">
				<div class="label-name"><label for="email">E-mail:</label></div>
				<input class="input" id ="user-email" type="email" name="semail" value="" placeholder="username@example.com">
				<div class="label-name"><label for="feedback">Feedback:</label></div>
				<textarea class="feedback-message" name="message" placeholder="Feedback Message"></textarea>
				<div class="submit-but"><input class="btn btn-primary my-btn" type="submit" name="Submit" value="Submit"></div>
			</form>
		</div>
</div>

<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>	
<script src="js/app.js"></script>
<script type="text/javascript" src="js/validate.js"></script>


</body>
</html>


