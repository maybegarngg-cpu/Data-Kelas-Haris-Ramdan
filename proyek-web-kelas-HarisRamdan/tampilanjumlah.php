<?php

include 'data_kelas.php';

$query = "SELECT * FROM data_kelas";

$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr><th>id</th><th>Nama_Kelas</th><th>Jumlah_Siswa</th></tr>
        </thead>
        <tbody>
            <?php
            $no =1;

            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['Nama_Kelas'] . "</td>";
                echo "<td>" . $row['Jumlah_Siswa'] . "</td>";
                
            }
            ?>
        </tbody>
    </table>
</body>
</html>