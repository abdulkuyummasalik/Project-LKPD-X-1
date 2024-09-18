<?php
$pageTitle = "Tugas 6";
include 'index.php';
?>

<main class="container mt-4">
    <h2>Tugas 6: Menghitung Rata-Rata Nilai Siswa</h2>

    <div class="alert alert-info">
        Berikut adalah rata-rata nilai siswa berdasarkan data yang telah dimasukkan.
    </div>

    <?php
    // Data siswa
    $students = [
        [
            'nama' => 'Andi',
            'nilai' => [80, 78, 82, 78, 88]
        ],
        [
            'nama' => 'Beni',
            'nilai' => [86, 70, 80, 85, 81]
        ],
        [
            'nama' => 'Dani',
            'nilai' => [83, 91, 70, 73, 81]
        ],
        [
            'nama' => 'Eko',
            'nilai' => [89, 85, 84, 86, 88]
        ]
    ];

    echo "<div class='mt-4'>";
    echo "<h4>Hasil Rata-Rata Nilai Siswa:</h4>";
    echo "<ul class='list-group'>";
    foreach ($students as $student) {
        $nama = $student['nama'];
        $nilai = $student['nilai'];
        $rata_rata = array_sum($nilai) / count($nilai);

        echo "<li class='list-group-item'>";
        echo "<strong>Nama Siswa:</strong> " . htmlspecialchars($nama) . "<br>";
        echo "<strong>Rata-Rata Nilai:</strong> " . number_format($rata_rata, 1);
        echo "</li>";
    }
    echo "</ul>";
    echo "</div>";
    ?>
</main>