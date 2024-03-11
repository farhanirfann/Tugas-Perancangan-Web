<?php
if (isset($_POST["btnSubmit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $tgllahir = $_POST["tgllahir"];
    $prodi = $_POST["prodi"];
    $alamat = $_POST["alamat"];
    $nohp = $_POST["nohp"];
    $jekel = $_POST["jekel"];

    // echo "<h1>Data Anda Sebagai Berikut :</h1>";
    // echo "Nama : $name <br>";
    // echo "Email : $email <br>";
    // echo "Password : $password <br>";
    // echo "Tanggal Lahir : $tgllahir <br>";
    // echo "Program Studi : $prodi <br>";
    // echo "Alamar : $alamat <br>";
    // echo "Handphone : $nohp <br>";
    // echo "Jenis Kelamin : $jekel <br>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <h1>Data Anda Sebagai Berikut</h1>
    <div class="mb-1 row">
        <label class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" value="<?php echo $name ?>">
        </div>
    </div>
    <div class="mb-1 row">
        <label class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" value="<?php echo $email ?>">
        </div>
    </div>
    <div class="mb-1 row">
        <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
        <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" value="<?php echo $tgllahir ?>">
        </div>
    </div>
    <div class="mb-1 row">
        <label class="col-sm-2 col-form-label">Program Studi</label>
        <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" value="<?php echo $prodi ?>">
        </div>
    </div>
    <div class="mb-1 row">
        <label class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" value="<?php echo $alamat ?>">
        </div>
    </div>
    <div class="mb-1 row">
        <label class="col-sm-2 col-form-label">No Handphone</label>
        <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" value="<?php echo $nohp ?>">
        </div>
    </div>
    <div class="mb-1 row">
        <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" value="<?php echo $jekel ?>">
        </div>
    </div>
    <?php
    echo '<meta http-equiv="Refresh" content="10; URL=login.php">';
    ?>
    <script>swal("Good job!", "Kamu Berhasil Sign", "success")</script>
</body>

</html>