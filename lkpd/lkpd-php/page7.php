<?php
$pageTitle = "Tugas 7";
include 'index.php';
?>

<main class="container mt-4">
    <h2>Tugas 7: Menghitung Selisih Panjang Karakter</h2>

    <div class="alert alert-info">
        Masukkan dua kalimat di bawah ini untuk mengetahui perbedaan jumlah karakter di antara keduanya.
    </div>

    <form action="page7.php" method="post" class="mt-4">
        <div class="form-group">
            <label for="kalimat1">Kalimat 1:</label>
            <input type="text" id="kalimat1" name="kalimat1" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="kalimat2">Kalimat 2:</label>
            <input type="text" id="kalimat2" name="kalimat2" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Hitung Selisih</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $kalimat1 = $_POST['kalimat1'];
        $kalimat2 = $_POST['kalimat2'];

        function cekJumlahString($ke1, $ke2)
        {
            $panjangKata1 = strlen($ke1);
            $panjangKata2 = strlen($ke2);

            if ($panjangKata1 > $panjangKata2) {
                $beda = $panjangKata1 - $panjangKata2;
                return "$ke1 memiliki jumlah karakter lebih banyak dari $ke2: selisih $beda karakter";
            } else if ($panjangKata2 > $panjangKata1) {
                $beda = $panjangKata2 - $panjangKata1;
                return "$ke2 memiliki jumlah karakter lebih banyak dari $ke1: selisih $beda karakter";
            } else {
                return "$ke1 dan $ke2 memiliki jumlah karakter yang sama";
            }
        }

        echo "<div class='mt-4 alert alert-success'>";
        echo cekJumlahString($kalimat1, $kalimat2);
        echo "</div>";
    }
    ?>
</main>