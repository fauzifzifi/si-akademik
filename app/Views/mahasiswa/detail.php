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
                <p><strong>NIM:</strong> <?= htmlspecialchars($mahasiswa->getNim()); ?></p>
                <p><strong>Nama:</strong> <?= htmlspecialchars($mahasiswa->getNama()); ?></p>
                <p><strong>Program Studi:</strong> <?= htmlspecialchars($mahasiswa->getProdi()); ?></p>
                <p><strong>Dosen Pembimbing:</strong> <?= htmlspecialchars($mahasiswa->getNamaDosen() ?? '-'); ?></p>

                <a href="/si-akademik/public/mahasiswa/edit?nim=<?= $mahasiswa->getNim(); ?>"
                    class="btn btn-warning btn-sm">
                    Edit
                </a>
                <a href="/si-akademik/public/mahasiswa" class="btn btn-secondary btn-sm">
                    Kembali
                </a>
            </div>
        </div>
    </div>
</body>

</html>