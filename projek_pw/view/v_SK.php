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
                <form name="tambahSK" action="index_tambahSK.php">
                        <input class="btn btn btn-success" type="submit" value="Tambah Surat Keluar">
                </form>
                <form class="mx-5" name="logout" action="index.php">
                    <input class="btn btn-danger" type="submit" value="Logout">
                </form>
            </div>
        </div>
    </nav>
    <br>
    <div class="mt-5 mx-5 text-center table-responsive-xl">
        <p>Berikut daftar surat keluar RS Medika Mantap</p>
    </div>

    <div class="mx-5">
        <table class="table table-striped table-bordered w-auto table-center">
            <thead>
                <tr>
                    <th scope="col">No Surat Keluar</th>
                    <th scope=" col">Tanggal Surat Keluar</th>
                    <th scope="col">Alamat Tujuan Surat Keluar</th>
                    <th scope="col">Perihal Surat Keluar</th>
                    <th class="text-center" scope="col" colspan="2">Update</th>
                </tr>
            </thead>
            <?php
        foreach ($daftarSK as $suratkeluar){?>
            <tr>
                <td class="text-center"><?php echo $suratkeluar["noSK"]?></td>
                <td><?php echo $suratkeluar["tanggalSK"]?></td>
                <td><?php echo $suratkeluar["alamatTujuanSK"]?></td>
                <td><?php echo $suratkeluar["perihalSK"]?></td>
                <td class="text-center" colspan="2">
                    <div class="d-flex flex-row">
                        <div class="p-2">
                            <form action=" index_editSK.php" method="GET">
                                <button class="btn btn-outline-dark" type="submit" name="noSK"
                                    value="<?php echo $suratkeluar["noSK"]?>">Edit</button>
                            </form>
                        </div>
                        <div class="p-2">
                            <form action="index_deleteSK.php" method="GET">
                                <button class="btn btn-warning" type="submit" name="noSK"
                                    value="<?php echo $suratkeluar["noSK"]?>">Delete</button>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
            <?php }
         ?>
        </table>
    </div>
    <!-- <div class="text-center">
        <form name="tambahSK" action="index_tambahSK.php">
            <input class="btn btn-primary" type="submit" value="Tambah Surat Masuk">
        </form><br>
        <form name="logout" action="index.php">
            <input class="btn btn-danger" type="submit" value="Logout">
        </form>
    </div> -->
</body>

</html>