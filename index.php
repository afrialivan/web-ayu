<?php 

session_start();
// require 'function.php';

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {

    // cek apakah data berhasil ditambahkan atau tdk

        $_SESSION['nama'] = $_POST['nama'];
        echo "
            <script>
                alert('data berhasil ditambahkan');
                document.location.href = 'home.php';
            </script>
        ";
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Daftar</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">
</head>
<body class="text-center bg-dark">
    <main class="form-signin w-100 m-auto rounded">
        <form action="" method="POST">
            <img class="mb-4" src="ts3 1.png" alt="" width="72">
            <!-- <h1 class="h3 mb-3 fw-normal">Haloo</h1> -->

            <div class="form-floating mb-4">
                <input type="text" class="form-control" name="nama" id="floatingInput" placeholder="name@example.com" required>
                <label for="floatingInput">Masukkan Nama Anda</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" name="submit" type="submit">Masuk</button>
        </form>
    </main>
</body>
</html>