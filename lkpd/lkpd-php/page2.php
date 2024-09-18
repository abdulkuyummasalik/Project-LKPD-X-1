<?php
$pageTitle = "Tugas 2";
include 'index.php';
?>
<main class="container mt-4">
    <h2 class="mb-4">Tugas 2: Hitung Kompensasi</h2>

    <?php
    function hitungKompensasi($jamMasukKerja, $jamKeluarKerja)
    {
        $jamKerjaNormal = 8;
        $bonusJamPertama = 50000;
        $bonusJamSelanjutnya = 25000;

        $totalJamKerja = $jamKeluarKerja - $jamMasukKerja;

        if ($totalJamKerja <= $jamKerjaNormal) {
            return "Anda tidak mendapatkan uang kompensasi.";
        }

        $jamKerjaLebih = $totalJamKerja - $jamKerjaNormal;
        $totalKompensasi = $bonusJamPertama;

        if ($jamKerjaLebih > 1) {
            $totalKompensasi += ($jamKerjaLebih - 1) * $bonusJamSelanjutnya;
        }
        return "Lama kerja: $totalJamKerja jam <br> Jam Lebih: $jamKerjaLebih jam <br> Jumlah Kompensasi: Rp " . number_format($totalKompensasi);
    }

    $hasil = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jamMasukKerja = (int)$_POST['jamMasukKerja'];
        $jamKeluarKerja = (int)$_POST['jamKeluarKerja'];
        $hasil = hitungKompensasi($jamMasukKerja, $jamKeluarKerja);
    }
    ?>

    <form method="post" class="mb-4">
        <div class="form-group">
            <label for="jamMasukKerja">Jam Masuk Kerja:</label>
            <input type="number" id="jamMasukKerja" name="jamMasukKerja" class="form-control" placeholder="Masukkan jam masuk kerja" required>
        </div>
        <div class="form-group">
            <label for="jamKeluarKerja">Jam Keluar Kerja:</label>
            <input type="number" id="jamKeluarKerja" name="jamKeluarKerja" class="form-control" placeholder="Masukkan jam keluar kerja" required>
        </div>
        <button type="submit" class="btn btn-primary">Hitung Kompensasi</button>
    </form>

    <?php if ($hasil) : ?>
        <div class="alert alert-info"><?php echo $hasil; ?></div>
    <?php endif; ?>
</main>