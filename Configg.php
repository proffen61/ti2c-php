<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'pendaftaran_bansos');

// Create a new database connection
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check the connection
if (!$conn) {
    die('Connection failed: '. mysqli_connect_error());
}

// Check if the biodata table already exists
$sql = "SHOW TABLES LIKE 'biodata'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "Table 'biodata' already exists.";
} else {
    // Create the biodata table
    $sql = "CREATE TABLE `biodata` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `nama` varchar(255) NOT NULL,
      `alamat` varchar(255) NOT NULL,
      `tempat` varchar(255) NOT NULL,
      `jenis_kelamin` varchar(10) NOT NULL,
      `usia` int(11) NOT NULL,
      PRIMARY KEY (`id`)
    )";

    if (mysqli_query($conn, $sql)) {
        echo "Table created successfully!";
    } else {
        echo "Error: ". $sql. "<br>". mysqli_error($conn);
    }
}
?>