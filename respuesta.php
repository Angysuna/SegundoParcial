<?php 	
	require 'user.php';
	$Username = $_POST['Username'];
	$contra = $_POST['Contrasena'];
		$oUser = new User;
		$oUser->create($Username, $contra);
		//header("Location: index.php");
		
 ?>
