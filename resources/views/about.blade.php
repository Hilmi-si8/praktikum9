<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5 ">
    <div class="card text-center p-3 " style="background-color: ivory;">
    <div class="card-body">
    <h2 class="card-title text-bold ">Tentang saya</h2>
    </div>
    <ul style="list-style:none ;margin-right: 30px;">
        <li>Nama: {{ $nama }}</li>
        <hr>
        <li>NIM: {{ $nim }}</li>
        <hr>
        <li>Program Studi: {{ $programStudi }}</li>
        <hr>
        <li>Tahun Angkatan: {{ $tahunAngkatan }}</li>
    </ul>
    </div>

   
  </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>