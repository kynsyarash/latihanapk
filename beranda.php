<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<style>
    p {
        text-align: right;
        margin-top: 180px;
        margin-right: 2cm;
    }

    p1 {
        margin-left: 2cm;
    }

    p2 {
        align-items: right;
        margin-left: 25cm;

    }

    .footer {
        margin-top: 200px;
    }
</style>

<body class="bg-danger bg-opacity-75">
    <nav class="navbar navbar-expand-lg p-3 mb-2 bg-danger">
        <div class="container-fluid">
            <div class="text-center">
                <img src="nubas.jpg.png" class="rounded" width="35%" margin-left="3cm">
            </div>
            <a class=" fs-4 navbar-brand  text-white" href="menu.php">Beranda</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="fs-4 nav-link active  text-white" aria-current="page" href="input.php">Input Tugas</a>
                    </li>
                    <li class="nav-item">
                        <a class="fs-4 nav-link  text-white" href="daftartugas.php">Daftar Tugas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <p class="fs-1 fw-bolder text-white"> MY <br>HOMEWORK </p>
    <footer class="footer">
        <p1 class="text-white">Nusabangsa@gmail.com</p1>
        <p2 class="text-white">000-111-222</p2>
    </footer>
</body>

</html>