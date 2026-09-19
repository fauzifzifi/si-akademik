<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Tambah Dosen</title>
</head>

<body>
    <h1>Tambah Dosen</h1>
    <form method="post" action="/si-akademik/public/dosen/store">
        <label>NIDN</label><br>
        <input type="text" name="nidn" required><br><br>
        <label>Nama</label><br>
        <input type="text" name="nama" required><br><br>
        <label>Bidang Keahlian</label><br>
        <input type="text" name="bidang_keahlian" required><br><br>
        <button type="submit">Simpan</button>
    </form>
    <br>
    <a href="/si-akademik/public/dosen">Kembali</a>
</body>

</html>