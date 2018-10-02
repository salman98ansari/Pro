<?php

	function fix_name($name){
		$name=trim($name);
		$name=ucfirst($name);
		$name =addslashes($name);
		return $name;
	}


	function fix_email($email){
		$email=trim($email);
		$email=strtolower($email);
		$email =addslashes($email);
		return $email;
	}



?>