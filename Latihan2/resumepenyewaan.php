<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="container">
    <h1>Resume Penyewaan</h1>
    <?php
    $judulbuku = $_POST["judulbuku"];
    $kategori = $_POST["kategori"];
    $tanggal = $_POST["tanggal"];
    $bulan = $_POST["bulan"];
    $tahun = $_POST["tahun"];
    $lamapinjam = $_POST["lamapinjam"];
    $nama = $_POST["nama"];
    $petugas = $_POST["petugas"];

    $biayasewa = 0;

    if ($kategori == "Karya Ilmiah"){
        $biayasewa = 10000 * $lamapinjam;
    }
    else {
        $biayasewa = 5000 * $lamapinjam;
    }
    ?>

    

    <form action="latihan2.php" method="post">
        <div class="row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Judul Buku</label>
            <div class="col-sm-10">
                :
                <?php echo "$judulbuku <br>"; ?>
            </div>
        </div>
        <div class="row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Kategori Buku</label>
            <div class="col-sm-10">
                :
                <?php echo "$kategori <br>"; ?>
            </div>
        </div>
        <div class="row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Tanggal Pinjam</label>
            <div class="col-sm-10">
                :
                <?php echo "$tanggal $bulan $tahun <br>"; ?>
            </div>
        </div>
        <div class="row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Lama Pinjam</label>
            <div class="col-sm-10">
                :
                <?php echo "$lamapinjam Hari <br>"; ?>
            </div>
        </div>
        <div class="row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Biaya Sewa</label>
            <div class="col-sm-10">
                :
                <?php echo "Rp $biayasewa,-<br>"; ?>
            </div>
        </div>
        <div class="row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Nama Anggota</label>
            <div class="col-sm-10">
                :
                <?php echo "$nama <br>"; ?>
            </div>
        </div>
        <div class="row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Nama Petugas</label>
            <div class="col-sm-10">
                :
                <?php echo "$petugas <br>"; ?>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" name="btnSimpan">Kembali</button>
    </form>
</body>

</html>