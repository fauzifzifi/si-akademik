<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4" style="max-width: 500px;">
        <h3 class="mb-3">Tambah Mahasiswa</h3>

        <?php if (!empty($error)): ?>
            <div class="alert alert-danger"><?= htmlspecialchars($error); ?></div>
        <?php endif; ?>

        <form method="post" action="/si-akademik/public/mahasiswa/store">
            <div class="mb-3">
                <label class="form-label">NIM</label>
                <input type="text" name="nim" class="form-control"
                    value="<?= htmlspecialchars($_POST['nim'] ?? '') ?>" required>
                <div class="form-text">Harus berupa angka.</div>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control"
                    value="<?= htmlspecialchars($_POST['nama'] ?? '') ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Program Studi</label>
                <input type="text" name="prodi" class="form-control"
                    value="<?= htmlspecialchars($_POST['prodi'] ?? '') ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">ID Dosen Pembimbing (opsional)</label>
                <input type="number" name="dosen_id" class="form-control"
                    value="<?= htmlspecialchars($_POST['dosen_id'] ?? '') ?>">
            </div>
            <button type="submit" class="btn btn-primary w-100">Simpan</button>
        </form>

        <div class="mt-3">
            <a href="/si-akademik/public/mahasiswa" class="btn btn-secondary btn-sm">Kembali</a>
        </div>
    </div>
</body>

</html>
