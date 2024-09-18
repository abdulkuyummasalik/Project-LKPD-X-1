<?php
$pageTitle = "Tugas 9";
include 'index.php';
?>

<main class="container mt-4">
    <h2>Tugas 9: Menghitung Pecahan Uang</h2>

    <div class="alert alert-info">
        Masukkan jumlah uang untuk mengetahui pecahan lembaran Rupiah yang dibutuhkan.
    </div>

    <form action="page9.php" method="post" class="mt-4">
        <div class="form-group">
            <label for="jumlahUang">Masukkan Jumlah Uang (dalam Rupiah):</label>
            <input type="number" id="jumlahUang" name="jumlahUang" class="form-control" placeholder="Contoh: 140500" required>
        </div>
        <button type="submit" class="btn btn-primary">Hitung Pecahan</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jumlahUang = $_POST['jumlahUang'];

        function hitung($jumlahUang)
        {
            $pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500];
            $hasil = [];

            foreach ($pecahan as $nilai) {
                if ($jumlahUang >= $nilai) {
                    $lembar = floor($jumlahUang / $nilai);
                    $hasil[] = "Rp. " . number_format($nilai, 0, ',', '.') . " : " . $lembar;
                    $jumlahUang %= $nilai;
                }
            }
            return $hasil;
        }

        echo "<div class='mt-4 alert alert-success'>";
        echo "Uang Rp. " . number_format($jumlahUang, 0, ',', '.') . "<br>";
        echo "Lembar Rupiah:";
        echo "<ul>";

        $lembarPecahan = hitung($jumlahUang);

        foreach ($lembarPecahan as $lembar) {
            echo "<li>" . $lembar . "</li>";
        }

        echo "</ul>";
        echo "</div>";
    }
    ?>
</main>