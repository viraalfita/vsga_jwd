<?php
    require_once "config/db.php";
    require_once "model/informasi_model.php";

    $id = isset($_POST['id'])? $_POST['id'] : null;
    $judul   = isset($_POST['judul'])? $_POST['judul'] : null;
	$isi   = isset($_POST['isi'])? $_POST['isi'] : null;
	$gambar = isset($_POST['gambar'])? $_POST['gambar'] : null;

    $cek = updateData($db, $judul, $isi, $gambar, $id);
    if($cek){
        echo '<span class="text-success">Update data berhasil disimpan</span>. <a href="admin.php">Kembali</a>';
    }else{
        echo '<span class="text-danger">Update data gagal disimpan</span>. <a href="admin_update.php">Kembali</a>';
    }
    
?>