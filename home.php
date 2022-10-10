<?php
session_start();
// require 'function.php';
if (isset($_POST["submit"])) {

    session_destroy();
    echo "
            <script>
                alert('Byee');
                document.location.href = 'index.php';
            </script>
        ";

};

?>

<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Home</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/cover/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="home.css" rel="stylesheet">
</head>

<body class="d-flex h-100 text-center text-bg-dark">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto">

        <main class="px-3">
            <h1 class="mb-3">Selamat Datang <?= $_SESSION['nama'] ?>, <span class="text-warning">Bagaimana kabar anda hari ini?</span></h1>
            <p class="lead">
            <form action="" method="POST">
                <button class="btn btn-lg btn-secondary fw-bold border-white bg-white" name="submit" type="submit">Kembali</button>
            </form>
            </p>
        </main>
    </div>
</body>

</html>