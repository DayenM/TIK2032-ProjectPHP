<?php
function koneksi() {
    $conn = mysqli_connect("localhost", "root", "", "artikeldb");
    if (!$conn) {
        die("Koneksi ke database gagal: " . mysqli_connect_error());
    }
    return $conn;
}

function query($query) {
    $conn = koneksi();
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
