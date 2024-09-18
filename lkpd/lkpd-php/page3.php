<?php
$pageTitle = "Tugas 3";
include 'index.php';
?>
<main class="container mt-4">
    <h2 class="mb-4">Tugas 3: Hasil Perkalian Tanpa Angka 0</h2>

    <?php
    function hasilPerkalian($perkalian, $batas)
    {
        $output = '';
        for ($i = 1; $i * $perkalian <= $batas; $i++) {
            $hasil = $perkalian * $i;

            if (strpos((string)$hasil, '0') === false) {
                $output .= "$perkalian x $i = $hasil <br>";
            }
        }
        return $output ? $output : "Tidak ada hasil perkalian yang memenuhi kriteria.";
    }

    $hasil = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $perkalian = (int)$_POST['perkalian'];
        $batas = (int)$_POST['batas'];
        $hasil = hasilPerkalian($perkalian, $batas);
    }
    ?>

    <form method="post" class="mb-4">
        <div class="form-group">
            <label for="perkalian">Nilai Perkalian:</label>
            <input type="number" id="perkalian" name="perkalian" class="form-control" placeholder="Masukkan nilai perkalian" required>
        </div>
        <div class="form-group">
            <label for="batas">Batas:</label>
            <input type="number" id="batas" name="batas" class="form-control" placeholder="Masukkan batas" required>
        </div>
        <button type="submit" class="btn btn-primary">Tampilkan Hasil</button>
    </form>

    <?php if ($hasil) : ?>
        <div class="alert alert-info"><?php echo $hasil; ?></div>
    <?php endif; ?>
</main>