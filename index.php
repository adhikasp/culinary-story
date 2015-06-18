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
		<div class="keterangan">
			<p>
				Bagikan ceritamu untuk referensi rumah makan teman-teman kalian :D <br>
				Bagi kalian yang suka kulineran tapi gak tahu harus kemana, bisa cari referensi rumah makan disini.<br>
			</p>
		</div>
		<div class="row">
			<form id="form-depan" method="POST" action="stories.php">
				<div class="form-group">
				    <label class="control-label" for="nama_rm">Nama Rumah Makan</label>
				    <div class="">
				      <div class="input-group">
				        <span class="input-group-addon">@</span>
				        <input type="text" class="form-control" name="nama_rm">
				      </div>
				    </div>
				</div>

				<div class="form-group">
					<label class="control-label" for="komentar_rm">Ceritamu</label>
				    <div class="">
				     <textarea class="form-control" rows="4" cols="50" name="komentar_rm"></textarea><br>
				    </div>
				</div>
				<input class="btn buatanku" type="submit" value="Bagikan" id="tombol">
				<a href="stories.php" class="button kanan"> Lihat Cerita Kami</a>
			</form>
		</div>
	</div>
</body>
</html>