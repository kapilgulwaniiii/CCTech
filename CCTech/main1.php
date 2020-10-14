<?php
		require("connect.php");

$folder ="images/"; 

		$image = $_FILES['image']['name']; 

		if($_FILES['image']['name'] == "") 
		{
		    echo "Select an Image";
		}
		else {

		$location = $folder . $image ; 

		$allowed=array('jpeg','png','jpg'); $filename=$_FILES['image']['name'];

		$ext=pathinfo($filename, PATHINFO_EXTENSION); if(!in_array($ext,$allowed) )

		{

 			echo "Sorry, only JPG, JPEG, PNG & GIF  files are allowed.";

		}

	else{
			move_uploaded_file( $_FILES['image'] ['tmp_name'], $location);
			//echo "Image Location :".$location;
			$dbo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}

		//echo $location;
		if(isset($image)){
			$push = $dbo->prepare("INSERT INTO uploads (title,images)   VALUES ('".$image."','".$location."')");
			$push->execute(); 
			}
		}
		header('Location: main.php');

?>