<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5 text-center">
        <h1>Sistem Informasi Akademik</h1>
        <p>Selamat datang, <strong><?= $_SESSION['username']; ?></strong>.</p>

        <div class="d-flex justify-content-center gap-3 mt-4">
            <a href="/si-akademik2/public/mahasiswa" class="btn btn-primary">Mahasiswa</a>
            <a href="/si-akademik2/public/dosen" class="btn btn-success">Dosen</a>
            <a href="/si-akademik2/public/logout" class="btn btn-danger">Logout</a>
        </div>
    </div>
</body>

</html>