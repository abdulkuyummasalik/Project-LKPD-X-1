<?php
$pageTitle = "Tugas 1";
include 'index.php';
?>
<main class="container mt-4">
    <h2 class="mb-4">Tugas 1: Cek Angka dalam Teks</h2>

    <?php
    function cekAngka($kalimat)
    {
        $hasil = '';
        for ($i = 0; $i < strlen($kalimat); $i++) {
            if (is_numeric($kalimat[$i])) {
                $hasil .= $kalimat[$i] . ', ';
            }
        }

        if ($hasil) {
            return "Teks mengandung angka: " . rtrim($hasil, ', ');
        } else {
            return "Teks tidak mengandung angka.";
        }
    }

    $hasil = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $kalimat = htmlspecialchars($_POST['kalimat']);
        $hasil = cekAngka($kalimat);
    }
    ?>

    <form method="post" class="mb-4">
        <div class="form-group">
            <label for="kalimat">Masukkan Teks:</label>
            <input type="text" id="kalimat" name="kalimat" class="form-control" placeholder="Masukkan teks di sini" required>
        </div>
        <button type="submit" class="btn btn-primary">Cek Angka</button>
    </form>

    <?php if ($hasil) : ?>
        <div class="alert alert-info"><?php echo $hasil; ?></div>
    <?php endif; ?>
</main>