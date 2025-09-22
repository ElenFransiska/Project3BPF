<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
</head>

<body>
    <h1>Keuntungan Hari Ini</h1>
    <p>Rp {{ number_format($keuntunganHarian, 0, ',', '.') }}</p>

    <h1>Keuntungan Bulan Ini</h1>
    <p>Rp {{ number_format($keuntunganBulanan, 0, ',', '.') }}</p>
</body>

</html>