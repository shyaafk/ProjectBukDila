<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koneksi Database</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Koneksi Database dengan PHP</h2>
        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
            </tr>
            <?php
            $no = 1;
            $query = mysqli_query($conn, "SELECT * FROM pengunjung");
            if (!$query) {
                echo '<tr><td colspan="3">Query error: ' . htmlspecialchars(mysqli_error($conn)) . '</td></tr>';
            } elseif (mysqli_num_rows($query) == 0) {
                echo '<tr><td colspan="3">Data tidak ditemukan.</td></tr>';
            } else {
                while ($row = mysqli_fetch_assoc($query)) {
                    echo "<tr>";
                    echo "<td>".$no++."</td>";
                    echo "<td>".htmlspecialchars($row['nama'])."</td>";
                    echo "<td>".htmlspecialchars($row['email'])."</td>";
                    echo "</tr>";
                }
            }
            ?>
        </table>
    </div>
</body>
</html>
