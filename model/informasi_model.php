<?php 
    require_once ("./config/db.php");

function getAllData($db){
    $query = "SELECT * FROM informasi ORDER BY id DESC";

    return mysqli_query($db, $query);
}

function getDataById($db, $id){
    $query = "SELECT * FROM informasi where id = {$id} ";

    return mysqli_query($db, $query);
}

function inputData($db, $judul, $isi, $gambar){
    $query = "INSERT INTO informasi (judul, isi, gambar) VALUES ('{$judul}', '{$isi}', '{$gambar}')";

    return mysqli_query($db, $query);
}

function updateData($db, $judul, $isi, $gambar, $id){
    $query = "UPDATE informasi SET judul='{$judul}', isi='{$isi}', gambar='{$gambar}' WHERE id={$id}";

    return mysqli_query($db, $query);
}
function deleteData($db, $id){
    $query = "DELETE FROM informasi WHERE id = {$id}";

    return mysqli_query($db, $query);
}