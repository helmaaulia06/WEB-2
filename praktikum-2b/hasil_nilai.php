<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Nilai Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
            background-color: #ffffff; 
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
        }
    </style>
</head>
<body>
<div class="container">
    <h2 class="text-center">Hasil Nilai Siswa</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = htmlspecialchars($_POST['nama']);
        $mata_kuliah = htmlspecialchars($_POST['mata_kuliah']);
        $nilai_uts = floatval($_POST['nilai_uts']);
        $nilai_uas = floatval($_POST['nilai_uas']);
        $nilai_tugas = floatval($_POST['nilai_tugas']);

        $total_nilai = ($nilai_uts * 0.3) + ($nilai_uas * 0.35) + ($nilai_tugas * 0.35);

        if ($total_nilai >= 55) {
            $lulus = "SISWA DINYATAKAN LULUS";
        } else {
            $lulus = "SISWA DINYATAKAN TIDAK LULUS";
        }

        if ($total_nilai >= 0 && $total_nilai <= 35) {
            $predikat = "E";
        } elseif ($total_nilai >= 36 && $total_nilai <= 55) {
            $predikat = "D";
        } elseif ($total_nilai >= 56 && $total_nilai <= 69) {
            $predikat = "C";
        } elseif ($total_nilai >= 70 && $total_nilai <= 84) {
            $predikat = "B";
        } elseif ($total_nilai >= 85 && $total_nilai <= 100) {
            $predikat = "A";
        } else {
            $predikat = "Nilai tidak valid";
        }

        switch ($predikat) {
            case "A":
                $grade = "Baik Sekali";
                break;
            case "B":
                $grade = "Baik";
                break;
            case "C":
                $grade = "Cukup";
                break;
            case "D":
                $grade = "Kurang Baik";
                break;
            case "E":
                $grade = "Buruk";
                break;
            default:
                $grade = "Tidak ada grade";
        }

        echo "<p><strong>Nama:</strong> $nama</p>";
        echo "<p><strong>Mata Kuliah:</strong> $mata_kuliah</p>";
        echo "<p><strong>Nilai UTS:</strong> $nilai_uts</p>";
        echo "<p><strong>Nilai UAS:</strong> $nilai_uas</p>";
        echo "<p><strong>Nilai Tugas/Praktikum:</strong> $nilai_tugas</p>";
        echo "<p><strong>Total Nilai:</strong> $total_nilai</p>";
        echo "<p><strong>Hasil:</strong> $lulus</p>";
        echo "<p><strong>Predikat:</strong> $predikat</p>";
        echo "<p><strong>Grade:</strong> $grade</p>";
    } else {
        echo '<p class="text-danger">Tidak ada data yang diterima.</p>';
    }
    ?>
    <div class="mt-4">
        <a href="form_nilai.php" class="btn btn-secondary">Kembali ke Form</a>
    </div>
</div>
</body>
</html>