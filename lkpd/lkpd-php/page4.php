<?php
$pageTitle = "Tugas 4";
include 'index.php';
?>
<main class="container mt-4 mx-5">
    <h2 class="mb-4">Tugas 4: Tabel Perkalian</h2>
    <div class="alert alert-info">
        Berikut adalah hasil tabel perkalian dari angka 1 dan 2:
    </div>

    <?php
    $angkaDasar = [1, 2,];
    $batas = 10;

    echo "<div class='row'>";
    foreach ($angkaDasar as $angka) {
        echo "<div class='col-md-6'>";
        echo "<h4>Tabel Perkalian untuk $angka</h4>";
        echo "<table class='table table-striped table-bordered'>";
        echo "<thead>
        <tr>
        <th>Perkalian</th>
        <th>Hasil</th>
        </tr>
        </thead>";
        echo "<tbody>";

        for ($b = $batas; $b >= 1; $b--) {
            $hasil = $angka * $b;
            echo "<tr>
            <td>$angka x $b</td>
            <td>$hasil</td>
            </tr>";
        }

        echo "</tbody>";
        echo "</table>";
        echo "</div>";
    }
    echo "</div>";
    ?>
</main>