<?php
$pageTitle = "Tugas 8";
include 'index.php';
?>

<main class="container mt-4">
    <h2>Tugas 8: Menghitung Kemunculan Angka dalam Data</h2>

    <div class="alert alert-info">
        Masukkan kumpulan angka dan angka yang ingin Anda cari untuk mengetahui berapa kali angka tersebut muncul.
    </div>

    <form action="page8.php" method="post" class="mt-4">
        <div class="form-group">
            <label for="data">Masukkan Data (Pisahkan dengan koma):</label>
            <input type="text" id="data" name="data" class="form-control" placeholder="Contoh: 2, 4, 6, 8, 10, 2, 4" required>
        </div>
        <div class="form-group">
            <label for="cari">Angka yang Dicari:</label>
            <input type="number" id="cari" name="cari" class="form-control" placeholder="Contoh: 2" required>
        </div>
        <button type="submit" class="btn btn-primary">Hitung</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dataInput = $_POST['data'];
        $cari = $_POST['cari'];

        $data = array_map('intval', explode(',', $dataInput));

        function hitung($data, $cari)
        {
            $ada = 0;
            foreach ($data as $angka) {
                if ($angka == $cari) {
                    $ada++;
                }
            }
            return $ada;
        }

        $jumlah = hitung($data, $cari);
        echo "<div class='mt-4 alert alert-success'>";
        echo "Jumlah angka $cari = $jumlah kali";
        echo "</div>";
    }
    ?>
</main>