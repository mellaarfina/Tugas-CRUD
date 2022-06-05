<?php
include_once '../koneksi.php';

/**
 * @var $koneksi PDO
 */

    $query = "select * from buku";

    //Menentukan query statement
    $statement = $koneksi->query($query);

    //eksekusi query
    $results = $statement-> fetchAll();

    //menampilkan hasil ke client
    header('Content-Type: application/json');
    echo json_encode($results);

?>