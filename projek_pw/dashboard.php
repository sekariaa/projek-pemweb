<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome, Sekretaris</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="asset/bootstrap-5.2.3-dist/css/bootstrap.min.css" />
    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="asset/style.css" />
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
        <a class="mx-5 navbar-brand" href="dashboard.php">Medika Mantap</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                <form class="mx-5" name="logout" action="index.php">
                    <input class="btn btn-danger" type="submit" value="Logout">
                </form>
            </div>
        </div>
    </nav>
    <br><br>
    <div class="mt-5 mx-5 text-center">
        <div>
            <h2>Selamat Datang, Sekretaris RS Medika Mantap</h2>
        </div>
    </div>

    <div class="mt-3 d-flex flex-row justify-content-center">
        <div class="p-2">
        <div class="mx-5 card" style="width: 18rem;">
            <img class="card-img-top" src="asset/image/image2.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Surat Masuk</h5>
                    <p class="card-text">Pendataan surat masuk</p>
                    <a href="index_SM.php" class="btn btn-primary">Lihat</a>
                </div>
        </div>
        </div>
        <div class="p-2">
        <div class="mx-5 card" style="width: 18rem;">
            <img class="card-img-top" src="asset/image/image2.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Surat Keluar</h5>
                    <p class="card-text">Pendataan surat keluar</p>
                    <a href="index_SK.php" class="btn btn-primary">Lihat</a>
                </div>
        </div>
        </div>
    </div>
</body>

</html>