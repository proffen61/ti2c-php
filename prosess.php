<?php
// Include the database configuration file
require_once 'configg.php';

// Insert the data into the table
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tempat = $_POST['tempat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$usia = $_POST['usia'];

$sql = "INSERT INTO biodata (nama, alamat, tempat, jenis_kelamin, usia)
        VALUES ('$nama', '$alamat', '$tempat', '$jenis_kelamin', $usia)";

// Check if the query was successful
if (mysqli_query($conn, $sql)) {
    echo "Data stored successfully!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>