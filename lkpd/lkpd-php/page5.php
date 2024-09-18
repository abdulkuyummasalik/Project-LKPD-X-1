<?php
$pageTitle = "Tugas 5";
include 'index.php';
?>
<main class="container mt-4">
    <h2>Tugas 5: Mencocokkan Bilangan dalam Dua Array</h2>
    
    <div class="alert alert-info">
        Masukkan bilangan untuk dua array dan klik "Cari" untuk melihat hasilnya.
    </div>

    <form method="post" action="page5.php">
        <div class="form-group">
            <label for="array1">Bilangan Array 1 (pisahkan dengan koma):</label>
            <input type="text" class="form-control" id="array1" name="array1" placeholder="80, 77, 65, 89" required>
        </div>
        <div class="form-group">
            <label for="array2">Bilangan Array 2 (pisahkan dengan koma):</label>
            <input type="text" class="form-control" id="array2" name="array2" placeholder="77, 99, 55, 81" required>
        </div>
        <button type="submit" class="btn btn-primary">Cari</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputArray1 = isset($_POST['array1']) ? $_POST['array1'] : '';
        $inputArray2 = isset($_POST['array2']) ? $_POST['array2'] : '';

        $bilangan1 = array_map('trim', explode(',', $inputArray1));
        $bilangan2 = array_map('trim', explode(',', $inputArray2));

        $bilanganYangCocok = array_intersect($bilangan1, $bilangan2);
        $cariBilangan1 = array_diff($bilangan1, $bilangan2);
        $cariBilangan2 = array_diff($bilangan2, $bilangan1);
        $bilanganYangTidakCocok = array_merge($cariBilangan1, $cariBilangan2);

        echo "<div class='mt-4'>";
        echo "<h4>Hasil:</h4>";
        echo "<p>Bilangan yang cocok antara 2 array: " . implode(", ", $bilanganYangCocok) . "</p>";
        echo "<p>Bilangan yang tidak ada di kedua variabel: " . implode(", ", $bilanganYangTidakCocok) . "</p>";
        echo "</div>";
    }
    ?>
</main>
