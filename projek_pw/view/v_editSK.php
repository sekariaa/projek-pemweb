<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Surat Keluar</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="asset/bootstrap-5.2.3-dist/css/bootstrap.min.css" />
    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="asset/style.css" />
</head>

<body>
    <div class="my-5 mx-5 text-center">
        <h1>Edit Surat Keluark</h1>
        <p>Silahkan mengedit surat keluar</p>
        <div class="mt-3"></div>
        <form name="ubahSK" action="index_editSK.php" method="POST">
            <table class="table table-striped table-bordered w-auto table-center">
                <thead>
                    <tr>
                        <td>Nomor Surat Keluar</td>
                        <td><input type="text" name="noSK" value="<?php echo $row['noSK']?>"
                                style="border: 0px;" placeholder="Nomor Surat Keluar"></td>
                    </tr>
                    <tr>
                        <td>Tanggal Surat Keluar</td>
                        <td><input type="date" name="tanggalSK" value="<?php echo $row['tanggalSK']?>"
                                style="border: 0px;" placeholder="Tanggal Surat Keluar"></td>
                    </tr>
                    <tr>
                        <td>Alamat Tujuan Surat Keluar</td>
                        <td><input type="text" name="alamatTujuanSK" value="<?php echo $row['alamatTujuanSK']?>"
                                style="border: 0px;" placeholder="Alamat Tujuan Surat Keluar">
                        </td>
                    </tr>
                    <tr>
                        <td>Perihal Surat Keluar</td>
                        <td><input type="text" name="perihalSK" value="<?php echo $row['perihalSK']?>"
                                style="border: 0px;" placeholder="Perihal Surat Keluar"></td>
                    </tr>
                </thead>
            </table>
            <button class="mb-3 btn btn-primary" type="submit" name="noSK"
                value="<?php echo $row['noSK']?>">Submit</button>
        </form>
        <form name="batalEdit" action="index_SK.php">
            <input class="btn btn-warning" type="submit" value="Batal">
        </form>
    </div>
</body>

</html>