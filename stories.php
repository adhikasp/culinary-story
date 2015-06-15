<?php

$dbHostName   = 'localhost';
$dbName       = 'Culinare_Stories';
$dbUserName   = 'root';
$dbUserPasswd = '';

try {
	$db = new PDO("mysql:host=$dbHostName;dbname=$dbName", $dbUserName, $dbUserPasswd);
}
catch (PDOEXCEPTION $e) {
	echo $e->getMessage();
}

$stmt = $db->prepare("SELECET * FROM restaurant_reviews");
$reviews = $db->execute();

$input = [];
foreach ($_POST as $key => $value) {
	$input[$key] = htmlspecialchars($value);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div class="container"> 
		<div class="row">
			<img src="img/judul.png" alt="judul" id="judul">
		</div>
	<a href="index.html" class="btn buatanku" id="panjang">Share Ceritamu</a>
	<div class="row">
		<div class="col-md-12">
			<div class="post">
				<div class="nama-rm"><p>@<?= $input['nama_rm'] ?></p></div>
				<div class="review"><p><?= $input['komentar_rm'] ?></p></div>
				<div class="waktu">Now</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="post">
				<div class="nama-rm">
					<p>@RumahMakan</p>
				</div>
				<div class="review">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur animi temporibus, officia iusto eligendi inventore natus ullam ipsum! Qui modi ab voluptates, ipsa accusamus quibusdam, iure ut excepturi temporibus. Labore!</p>
				</div>
				<div class="waktu">
					Yesterday 15:37
				</div>			
			</div>
		</div>
		<div class="col-md-12">
			<div class="post">
				<div class="nama-rm">
					<p>@RumahMakan</p>
				</div>
				<div class="review">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur animi temporibus, officia iusto eligendi inventore natus ullam ipsum! Qui modi ab voluptates, ipsa accusamus quibusdam, iure ut excepturi temporibus. Labore!</p>
				</div>
				<div class="waktu">
					Yesterday 15:37
				</div>			
			</div>
		</div>
		<div class="col-md-12">
			<div class="post">
				<div class="nama-rm">
					<p>@RumahMakan</p>
				</div>
				<div class="review">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur animi temporibus, officia iusto eligendi inventore natus ullam ipsum! Qui modi ab voluptates, ipsa accusamus quibusdam, iure ut excepturi temporibus. Labore!</p>
				</div>
				<div class="waktu">
					Yesterday 15:37
				</div>			
			</div>
		</div>
	</div>	
	</div>
</body>
</html>