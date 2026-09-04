<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <h1>Detail Mahasiswa</h1>

        <div class="card" style="max-width: 400px;">
            <div class="card-body">
                <p><strong>NIM:</strong> <?php echo $mahasiswa['nim']; ?></p>
                <p><strong>Nama:</strong> <?php echo $mahasiswa['nama']; ?></p>
                <p><strong>Program Studi:</strong> <?php echo $mahasiswa['prodi']; ?></p>

                <a href="?url=mahasiswa" class="btn btn-secondary btn-sm">
                    Kembali
                </a>
            </div>
        </div>
    </div>
</body>

</html>