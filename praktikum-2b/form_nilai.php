<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif; 
        }
        .container {
            margin-top: 50px;
            background-color: #ffffff; 
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-bottom: 30px;
            text-align: center;
        }
        .form-control {
            border-radius: 5px; 
        }
        .btn-primary {
            background-color: #007bff; 
            border: none; 
            border-radius: 5px; /
        }
        .btn-primary:hover {
            background-color: #0056b3; 
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h2>Form Nilai Siswa</h2>
    <form method="post" action="hasil_nilai.php">
        <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" required>
        </div>
        <div class="form-group">
            <label for="mata_kuliah">Mata Kuliah</label>
            <select class="form-control" id="mata_kuliah" name="mata_kuliah" required>
                <option value="Pemograman Web2">Pemograman Web2</option>
                <option value="Dasar Dasar Pemograman">Dasar Dasar Pemograman</option>
                <option value="Basis Data">Basis Data</option>
            </select>
        </div>
        <div class="form-group">
            <label for="nilai_uts">Nilai UTS</label>
            <input type="number" class="form-control" id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" required>
        </div>
        <div class="form-group">
            <label for="nilai_uas">Nilai UAS</label>
            <input type="number" class="form-control" id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" required>
        </div>
        <div class="form-group">
            <label for="nilai_tugas">Nilai Tugas/Praktikum</label>
            <input type="number" class="form-control" id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas/Praktikum" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>