<?php
$pageTitle = "Tugas 10";
include 'index.php';
?>

<main class="container mt-4">
    <h2>Tugas 10: Kategori Usia</h2>

    <div class="alert alert-info">
        Masukkan usia untuk mengetahui jumlah kategori anak dan dewasa.
    </div>

    <form action="page10.php" method="post" class="mt-4">
        <div class="form-group">
            <label for="usia">Masukkan Usia (Pisahkan dengan koma):</label>
            <input type="text" id="usia" name="usia" class="form-control" placeholder="Contoh: 12, 15, 23, 34" required>
        </div>
        <button type="submit" class="btn btn-primary">Hitung Kategori Usia</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputUsia = $_POST['usia'];
        $usia = explode(",", str_replace(' ', '', $inputUsia));

        function KatUsia($usia)
        {
            $anak = 0;
            $dewasa = 0;

            foreach ($usia as $umur) {
                if ($umur < 17) {
                    $anak++;
                } else {
                    $dewasa++;
                }
            }

            echo "<div class='mt-4 alert alert-success'>";
            echo "List Usia: " . implode(", ", $usia) . "<br>";
            echo "Jumlah Kategori Dewasa: $dewasa<br>";
            echo "Jumlah Kategori Anak: $anak";
            echo "</div>";
        }

        KatUsia($usia);
    }
    ?>
</main>