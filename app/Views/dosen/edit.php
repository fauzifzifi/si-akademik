<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Edit Dosen</title>
</head>

<body>
    <h1>Edit Dosen</h1>
    <form method="post" action="/si-akademik/public/dosen/update?id=<?= $dosen['id'] ?>">
        <label>NIDN</label><br>
        <input type="text" name="nidn" value="<?= htmlspecialchars($dosen['nidn']) ?>" required><br><br>
        <label>Nama</label><br>
        <input type="text" name="nama" value="<?= htmlspecialchars($dosen['nama']) ?>" required><br><br>
        <label>Bidang Keahlian</label><br>
        <input type="text" name="bidang_keahlian" value="<?= htmlspecialchars($dosen['bidang_keahlian']) ?>"
            required><br><br>
        <button type="submit">Update</button>
    </form>
    <br>
    <a href="/si-akademik/public/dosen">Kembali</a>
</body>

</html>