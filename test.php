<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TEST</title>
</head>
<body>

    <?php

    $conn = new mysqli('localhost','root','root','test');

    if($conn->connect_error)
    {
        die($conn->connect_error);
    }

    //$query= "SELECT * FROM flipkartt WHERE srno=150";
    $query='SELECT * FROM amazon WHERE name LIKE "%Redmi%"';
    $result=mysqli_query($conn,$query);
    mysqli_close($conn);
    

    if(true)
    {?>
        <li>
        <?php
        while($s=mysqli_fetch_array($result))
        {?>

            <div>  <?php echo $s['name']?> </div>
            <div> <?php echo $s['price']?></div>
            
            <div> <?php echo $s['linktopage']?></div>
            <br>
            
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

