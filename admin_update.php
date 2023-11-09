<?php
require "config/db.php"; // kita BUTUH file ini pada sistem kita. (ketika file tidak ditemukan, maka kode program yang selanjutnya tidak dieksekusi)
require "model/informasi_model.php";

$id = isset($_GET['id'])? $_GET['id'] : null;
$data_informasi = getDataById($db, $id);
$data = mysqli_fetch_assoc($data_informasi);

?>
<html>
	<head>
		<title>BPSDMP - Admin Update</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
        <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	</head>
	<body class="bg-light">
		<div class="container p-5">
			<h2>Update Data Informasi</h2>
			<div id="" class="row border">
				<div class="col-md-12 pt-2">
					<form method="POST" action="admin_proses_edit.php" id="form-login">	
					<input type="hidden" name="id" id="id" value="<?=$data['id'];?>">			
						<div class="form-group row mt-2">
							<label for="judul" class="col-sm-2 col-form-label">Judul</label>
							<div class="col-sm-10">
								<input required type="text" name="judul" class="form-control"  id="judul" placeholder="Masukkan judul" value="<?=$data['judul'];?>">
							</div>
						</div>
						<div class="form-group row mt-2">
							<label for="isi" class="col-sm-2 col-form-label">Isi</label>
							<div class="col-sm-10">
								<textarea id="isi" name="isi" class="form-control" rows="13" placeholder="Masukkan isi"><?=$data['isi'];?></textarea>
							</div>
						</div>
						<div class="form-group row mt-2">
							<label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
							<div class="col-sm-10">
								<input required type="file" name="gambar" class="form-control"  id="gambar" placeholder="Masukkan gambar">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-2">
								<button type="submit" class="btn btn-primary">Simpan</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	
	
	<!-- untuk me-load javascript pada web -->
	<script src="assets/jquery/jquery.min.js"></script>
	<script src="assets/bootstrap/dist/js/bootstrap.js"></script>
	<script src="assets/jquery-validation/dist/jquery.validate.js"></script>

	</body>
</html>