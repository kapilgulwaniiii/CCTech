<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>CCTech Project</title>
	<link rel="stylesheet" href="main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div id="grad1">
	<h1 style="text-align:center " "text-shadow: 10px 20px;">Welcome to CCTech!</h1>
	<div class="container">
		<form class="container" action="main1.php" method="post" enctype="multipart/form-data">
	
			<input type="file" name="image" id="image">
			<button onclick="document.getElementById('id01').style.display='block'" class= "upload" style="width:auto;">Upload</button>
			<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>

		</form>
	</div>


	<div class="cardcollection">
		<?php
		require("connect.php");
		$pull = $dbo->prepare("SELECT indexes, title, images FROM uploads");
		$pull->execute();

		$data=$pull->fetchAll();

		$counter1=0;
		echo "</br>";

  		foreach($data as $v) {
        		$counter1++;
				echo " 
				<div class='column'>
					<div class= '$counter1'>
			
						<div class='card'>
				
						<img src='".$v["images"]."' id='".$v["title"]."' width='300' height='200' style='border:1px solid #333333' alt= '' >
						</div> 
					</div>
				</div> ";}


		$xcount = $dbo->query("SELECT COUNT(1) FROM uploads")->fetchColumn();

		?>
	</div>
</div>
</body>
</html>