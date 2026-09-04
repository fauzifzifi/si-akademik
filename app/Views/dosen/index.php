<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4 text-center">
        <h1>Sistem Informasi Akademik</h1>
        <h3 class="text-muted">Politeknik Negeri Jember</h3>
        <h2 class="mb-3">DATA DOSEN</h2>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>NIDN</th>
                    <th>Nama</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dosen as $dsn): ?>
                    <tr>
                        <td><?= $dsn['nidn']; ?></td>
                        <td><?= $dsn['nama']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="container mt-3 text-end">
        <a href="?url=home" class="btn btn-secondary btn-sm">
            Kembali
        </a>
    </div>
</body>

</html>