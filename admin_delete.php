<?php
    require "config/db.php"; // kita BUTUH file ini pada sistem kita. (ketika file tidak ditemukan, maka kode program yang selanjutnya tidak dieksekusi)
    require "model/informasi_model.php";

    $id = isset($_GET['id'])? $_GET['id'] : null;
    if(empty($id)){
        echo '<h3 class="text-danger">Data tidak ada / data tidak boleh kosong</h3>';
    }else{
        $data = deleteData($db, $id);
        
        if(deleteData($db, $id)){
            ?>
                <script language="javascript">
                    alert("Data terhapus");
                    document.location.href="admin.php";
                </script> 
            <?php

        }else{
            echo "Gagal hapus data";
        }

}