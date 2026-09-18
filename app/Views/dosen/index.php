<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Data Dosen</title>
</head>

<body>
    <h1>Data Dosen</h1>
    <a href="/si-akademik/public/dashboard">Dashboard</a>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>No</th>
            <th>NIDN</th>
            <th>Nama</th>
            <th>Bidang Keahlian</th>
        </tr>
        <?php foreach ($dosen as $index => $item): ?>
            <tr>
                <td><?= $index + 1 ?></td>
                <td><?= htmlspecialchars($item['nidn']) ?></td>
                <td><?= htmlspecialchars($item['nama']) ?></td>
                <td><?= htmlspecialchars($item['bidang_keahlian']) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>