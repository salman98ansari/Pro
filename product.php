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
	 <link rel="stylesheet" type="text/css" href="css/product.css">

</head>
<body>	
 <header>
	 <nav>
		<ul>
			<li><a class ="logo" href="#"><img src="..." alt="Brand"></a></li>
			<li><a href="index.html"><i class="fas fa-home"></i> Home</a></li>
			<li><a href="product.html"><i class="fas fa-mobile-alt"></i> Mobile</a></li>
			<li><a href="#"><i class="fas fa-laptop"></i> Laptop</a></li>
			<li><a href="#"><i class="fas fa-desktop"></i> Desktop</a></li>
			<li><a href="#">Etc</a></li>
		</ul>
	</nav>
 </header>

 <main>

	<?php

    $conn = new mysqli('localhost','root','root','testing');

    if($conn->connect_error)
    {
        die($conn->connect_error);
    }

    $query= "SELECT * FROM flipkartt WHERE srno=150";
    $result=mysqli_query($conn,$query);
	mysqli_close($conn);
	

	if(true)
	{?>
	 <div class="grid1">
		<?php
		while($s=mysqli_fetch_array($result))
		{?>

		<div class="grid1-1"><img src="<?php echo $s['link'] ?>" alt=""></div>
		<div class="grid1-2"> <?php  echo $s['name']?> <br> <?php echo $s['specs'] ?></div>
		<div class="grid1-3">jfd</div>
		<div class="grid1-4">gs</div>
		<div class="grid1-5">sd</div>
		<div class="grid1-6">sd</div>
		<div class="grid1-7">hf</div>
		<div class="grid1-8">ht</div>
		<div class="grid1-9">dht</div>
		<div class="grid1-10">dthf</div>
	</div>
	<?php

		}
	}

	else{

		echo "<span> NO Result </span>";

	}
	?>

	
	
 </main>
</body>
</html>