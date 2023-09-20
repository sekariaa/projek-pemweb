<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome, Pegawai</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="asset/bootstrap-5.2.3-dist/css/bootstrap.min.css" />
    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="asset/style.css" />
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
        <a class="mx-5 navbar-brand" href="dashboard_view.php">Medika Mantap</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                <form class="mx-5" name="logout" action="index.php">
                    <input class="btn btn-danger" type="submit" value="Logout">
                </form>
            </div>
        </div>
    </nav>
    <br>
    <div class="mt-5 mx-5 text-center table-responsive-xl">
        <p>Berikut daftar surat masuk RS Medika Mantap</p>
    </div>

    <div class="mx-5">
        <table class="table table-striped table-bordered w-auto table-center">
            <thead>
                <tr>
                    <th>No Surat Masuk</th>
                    <th>Tanggal Surat Masuk</th>
                    <th>Alamat Pengirim Surat Masuk</th>
                    <th>Perihal Surat Masuk</th>
                </tr>
            </thead>
            <?php
        foreach ($daftarSM as $suratmasuk){?>
            <tr>
                <td><?php echo $suratmasuk["noSM"]?></td>
                <td><?php echo $suratmasuk["tanggalSM"]?></td>
                <td><?php echo $suratmasuk["alamatPengirimSM"]?></td>
                <td><?php echo $suratmasuk["perihalSM"]?></td>
            </tr>
            <?php }
         ?>
        </table>
    </div>
    <!-- <div class="text-center">
        <form name="logout" action="index.php">
            <input class="btn btn-danger" type="submit" value="Logout">
        </form>
    </div> -->
</body>

</html>