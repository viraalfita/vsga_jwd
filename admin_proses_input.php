<?php 
	require_once "config/db.php";
	require_once "model/informasi_model.php";

	$judul   = isset($_POST['judul'])? $_POST['judul'] : null;
	$isi   = isset($_POST['isi'])? $_POST['isi'] : null;
	$gambar = isset($_POST['gambar'])? $_POST['gambar'] : null;

	$cek = inputData($db, $judul, $isi, $gambar);
	if($cek){
		echo '<span class="text-success">Input data berhasil disimpan</span>. <a href="admin.php">Kembali</a>';
	}else{
		echo '<span class="text-danger">input data gagal disimpan</span>. <a href="admin_input.php">Kembali</a>';
	}
?>