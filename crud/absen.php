<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Input Absen Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="menu">
        <h2> Menu Input Siswa</h2>
        <?php echo date("d/m/Y H:i:s"); ?>
        <button onclick="inputAbsen('masuk')"> Absen Masuk</button>
        <br> <br>
        <?php echo date("d/m/Y H:i:s"); ?>
        <button onclick="inputAbsen('pulang')"> Absen Pulang</button>
    </div>

    <script>
        function inputAbsen(type) {
            if (type == 'masuk') {
                alert('Absen Masuk Berhasil dicacat.');
            } else if (type == 'pulang') {
                alert('Absen Pulang Berhasil');
            }
        }
    </script>
</body>
</html>