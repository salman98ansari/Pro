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
	 <link rel="stylesheet" type="text/css" href="../css/style.css" />
	 <link rel="stylesheet" type="text/css" href="../css/searched.css">

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

    if($_POST)
    {
        $search=$_POST['search'];

        echo $search;
        $conn = new mysqli('localhost','root','root','test');
    
        if($conn->connect_error)
        {
            die($conn->connect_error);
        }
    
        //$query= "SELECT * FROM flipkart WHERE srno=$search";
        $query="SELECT * FROM flipkart WHERE name LIKE '%$search%'";
        $result=mysqli_query($conn,$query);
        mysqli_close($conn);
        
    
        if(true)
        {?>
            <li>
            <?php
            while($s=mysqli_fetch_array($result))
            {?>
                <img src="<?php echo $s['link']?>" alt="">

                <div>
                    <div><?php echo $s['name']?></div>
                    <div><?php echo $s['specs']?></div>
                    <div><?php echo $s['price']?></div>
                </div>
                
                <br>
                
            </li>
            <?php
            }
        
        }
        else
        {
            echo "No product Found ";
    
        }
    }

    else
    {
        echo "DATA NOT POST";
        header('Refresh:0, url=../index.html');
    }

    ?>	
 </main>
</body>
</html>



