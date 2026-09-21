<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4 text-center">
        <h1>Sistem Informasi Akademik</h1>
        <h3 class="text-muted">Politeknik Negeri Jember</h3>

        <h2 class="mb-3">DATA MAHASISWA</h2>

        <div class="text-end mb-2">
            <a href="/si-akademik/public/mahasiswa/create" class="btn btn-success btn-sm">
                + Tambah Mahasiswa
            </a>
        </div>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Program Studi</th>
                    <th>Dosen Pembimbing</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($mahasiswa as $mhs): ?>
                    <tr>
                        <td><?= htmlspecialchars($mhs->getNim()); ?></td>
                        <td><?= htmlspecialchars($mhs->getNama()); ?></td>
                        <td><?= htmlspecialchars($mhs->getProdi()); ?></td>
                        <td><?= htmlspecialchars($mhs->getNamaDosen() ?? '-'); ?></td>
                        <td>
                            <a href="/si-akademik/public/mahasiswa/detail/<?= $mhs->getNim(); ?>"
                                class="btn btn-sm btn-primary">
                                Detail
                            </a>
                            <a href="/si-akademik/public/mahasiswa/edit?nim=<?= $mhs->getNim(); ?>"
                                class="btn btn-sm btn-warning">
                                Edit
                            </a>
                            <a href="/si-akademik/public/mahasiswa/delete?nim=<?= $mhs->getNim(); ?>"
                                class="btn btn-sm btn-danger"
                                onclick="return confirm('Hapus data mahasiswa ini?')">
                                Hapus
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="container mt-3 text-end">
        <a href="/si-akademik/public/dashboard" class="btn btn-secondary btn-sm">
            Kembali
        </a>
    </div>
</body>

</html>