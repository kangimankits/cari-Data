<a href="index.php" target="_blank">Kembali</a>
<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nik = $_POST['nik'];

    $sql = "SELECT * FROM penduduk WHERE nik = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $nik);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<h2>Hasil Pencarian:</h2>";
            echo "NIK: " . $row['nik'] . "<br>";
            echo "Nama: " . $row['nama'] . "<br>";
            echo "Alamat: " . $row['alamat'] . "<br>";
            echo "TPS: " . $row['tps'] . "<br>";
        }
    } else {
        echo "Penduduk dengan NIK $nik tidak ditemukan.";
    }

}

?>
