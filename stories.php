<?php

$dbHostName   = 'localhost';
$dbName       = 'kulinare_story';
$dbUserName   = 'root';
$dbUserPasswd = 'denita';

try {
	$db = new PDO("mysql:host=$dbHostName;dbname=$dbName", $dbUserName, $dbUserPasswd);

  if(isset($_POST['nama_rm'])) {
    $sth = $db->prepare("INSERT INTO restaurant_reviews (nama_rm, review, timestamp) VALUES (?, ?, ?)");
    $data = [$_POST['nama_rm'], $_POST['review'], date('Y-m-d H:i:s')];
    $sth->execute($data);
  }

  $reviews    = $db->query("SELECT * FROM restaurant_reviews");
}
catch (PDOEXCEPTION $e) {
	echo $e->getMessage();
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
		<?php while($review = $reviews->fetch()): ?>
			<div class="col-md-12">
				<div class="post">
					<div class="nama-rm"><p>@<?= $review['nama_rm'] ?></p></div>
					<div class="review"><p><?= $review['review'] ?></p></div>
					<div class="waktu"><?= $review['timestamp'] ?></div>
				</div>
			</div>
		<?php endwhile; ?>
	</div>
	</div>
</body>
</html>