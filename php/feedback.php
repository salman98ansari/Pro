<?php
require_once 'functions.php';
if($_POST)
{
    $name=fix_name($_POST['name']);
	$email= fix_email($_POST['semail']);
	$feedback=$_POST['message'];
	if(!empty($name)&&!empty($email)&&!empty($feedback))
	{
		$link=mysqli_connect('localhost','root','root','test');
		if(!$link){
            echo '<br>Unable to connect to Database.'.mysqli_connect_error();
        }

        $query="Insert into feedback values('$name','$email','$feedback')";
        $result=mysqli_query($link,$query);

        if(!$result){
        	echo "<br>".mysqli_error($link);
        }
        else{
        	echo "<script>alert('Your Message is Sent Successfully..')</script>";
			echo "<script>window.open('../index.html','_self');</script>";
        }
        mysqli_close($link);
	}

	else{
		echo "Something is missing";
		header('Refresh:2, url=../index.html');
	}
}

//main if ka else.
else{
    echo "DATA IS NOT POST";
    header('Refresh:1, url=../index.html');
}

?>