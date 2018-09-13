<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php

    $conn = new mysqli('localhost','root','root','testing');

    if($conn->connect_error)
    {
        die($conn->connect_error);
    }

    $query= "SELECT * FROM product WHERE product_id=1";
    $result=mysqli_query($conn,$query);
    mysqli_close($conn);

    if(true)
    {?>
        <li>
        <?php
        while($s=mysqli_fetch_array($result))
        {?>

            <div> <h1><?php echo $s['product_name']?></h1></div>
            <div> <h1><?php echo $s['price']?></h1></div>
            <div> <h1><?php echo $s['size']?></h1></div>
            <div> <h1><?php echo $s['storage_id']?></h1></div>
            
        </li>
        <?php
        }
    
    }
    else
    {
        echo "<span> No Result </span>";

    }

    ?>
   
</body>
</html>