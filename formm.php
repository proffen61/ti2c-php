<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 16px;
            background-color: #f9f9f9; /* light gray background */
            padding: 20px;
        }
        fieldset {
            background-color: #fff; /* white background for fieldset */
            border: 1px solid #ddd; /* light gray border */
            padding: 20px;
            border-radius: 10px; /* rounded corners */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* subtle shadow */
        }
        legend {
            font-weight: bold;
            color: #333; /* dark gray text */
        }
        label {
            font-weight: bold;
            display: block; /* make labels block-level elements */
            margin-bottom: 10px;
        }
        input[type="text"], input[type="number"] {
            width: 20%; /* set input fields to 1/4 of the original width */
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc; /* light gray border */
            border-radius: 5px; /* rounded corners */
        }
        input[type="radio"] {
            margin-right: 10px;
        }
        input[type="submit"] {
            background-color: #4CAF50; /* green background */
            color: #fff; /* white text */
            padding: 10px 20px;
            border: none;
            border-radius: 5px; /* rounded corners */
            cursor: pointer; /* change cursor to hand pointer */
        }
        input[type="submit"]:hover {
            background-color: #3e8e41; /* darker green on hover */
        }
    </style>
</head>
<body>
    <form action="proses.php" method="POST">
        <fieldset>
            <legend>Biodata</legend>
            <p>
                <label>Nama:</label>
                <input name="nama" type="text" placeholder="Masukkan nama" required>
            </p>
            <p>
                <label>Alamat:</label>
                <input name="alamat" type="text" placeholder="Masukkan alamat" required>
            </p>
            <p>
                <label>Tempat:</label>
                <input name="tempat" type="text" placeholder="Masukkan tempat" required>
            </p>
            <p>
                <label>Jenis Kelamin:</label>
                <input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki
                <input type="radio" name="jenis_kelamin" value="Perempuan" required> Perempuan
            </p>
            <p>
                <label>Usia:</label>
                <input name="usia" type="number" placeholder="Masukkan usia" required>
            </p>
            <p>
                <input type="submit" name="submit" value="Daftar" />
            </p>
        </fieldset>
    </form>
</body>
</html>