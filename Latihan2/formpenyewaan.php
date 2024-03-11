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
    <form action="latihan2(1).php" method="post">
        <h1>Form Penyewaan</h1>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Judul Buku</label>
            <div class="col-sm-10">
                <input type="text" name="judulbuku" class="form-control">
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Kategori Buku</label>
            <div class="col-sm-10">
                <select name="kategori" class="form-select">
                    <option selected>Pilih Kategori</option>
                    <option value="Fiksi">Fiksi</option>
                    <option value="Non Fiksi">Non Fiksi</option>
                    <option value="Karya Ilmiah">Karya Ilmiah</option>
                    <option value="Majalah">Majalah</option>
                </select>
            </div>
        </div>
        <div class="row g-3">
            <label class="col-sm-2 col-form-label">Tanggal Pinjam</label>
            <div class="col-sm">
                <select name="tanggal" class="form-select">
                    <option selected>Pilih Tanggal</option>
                    <?php 
                    for($hari=1; $hari<=31; $hari++) {
                        echo"<option value=$hari>$hari</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="col-sm">
                <select name="bulan" class="form-select">
                    <option selected>Pilih Bulan</option>
                    <option value="Januari">Januari</option>
                    <option value="Februari">Februari</option>
                    <option value="Maret">Maret</option>
                    <option value="April">April</option>
                    <option value="Mei">Mei</option>
                    <option value="Juni">Juni</option>
                    <option value="Juli">Juli</option>
                    <option value="Agustus">Agustus</option>
                    <option value="September">September</option>
                    <option value="Oktober">Oktober</option>
                    <option value="November">November</option>
                    <option value="Desember">Desember</option>
                </select>
            </div>
            <div class="col-sm">
                <select name="tahun" class="form-select">
                    <option selected>Pilih Tahun</option>
                    <option value="2025">2025</option>
                    <option value="2024">2024</option>
                    <option value="2023">2023</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Lama Pinjam</label>
            <div class="col-sm-2">
                <input type="number" name="lamapinjam" class="form-control">
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Nama Anggota</label>
            <div class="col-sm-10">
                <input type="text" name="nama" class="form-control">
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Nama Petugas</label>
            <div class="col-sm-10">
                <select name="petugas" class="form-select">
                    <option selected>Pilih Nama Petugas</option>
                    <option value="Refal Hady">Refal Hady</option>
                    <option value="Rizky Nazar">Rizky Nazar</option>
                    <option value="Arditho Pramono">Arditho Pramono</option>
                </select>
            </div>
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary" name="btnSimpan">Simpan</button>
            <button type="reset" class="btn btn-secondary" name="btnBatal">Batal</button>
        </div>
    </form>
</body>

</html>