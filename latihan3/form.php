<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="container">

    <h1>Sign Up</h1>
    <form action="data.php" method="post">
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name">
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">E-Mail</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="email">
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="password">
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="tgllahir">
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Program Studi</label>
            <div class="col-sm-10">
                <select name="prodi" class="form-select">
                    <option value="" selected>Pilih Prodi</option>
                    <option value="Bisnis Manajemen">Bisnis Manajemen</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Ilmu Komputer">Ilmu Komputer</option>
                    <option value="Teknik Industri">Teknik Industri</option>
                    <option value="Psikologi">Psikologi</option>
                    <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                    <option value="Sastra Inggris">Sastra Inggris</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" style="height: 100px"
                        name="alamat"></textarea>
                    <label for="floatingTextarea2">Alamat</label>
                </div>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Handphone</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="nohp">
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-10">
                <input type="radio" name="jekel" value="Laki-Laki">Laki-Laki
                <input type="radio" name="jekel" value="Perempuan">Perempuan
            </div>
        </div>
        <button type="submit" name="btnSubmit" class="btn btn-primary">Submit</button>
        <button type="reset" name="btnReset" class="btn btn-secondary">Reset</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@523distjsbootstrapbundleminjs"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>