<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Surat Masuk</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="asset/bootstrap-5.2.3-dist/css/bootstrap.min.css" />
    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="asset/style.css" />
</head>

<body>
    <div class="my-5 mx-5 text-center">
        <h1>Edit Surat Masuk</h1>
        <p>Silahkan mengedit surat masuk</p>
        <div class="mt-3"></div>
        <form name="ubahSM" action="index_editSM.php" method="POST">
            <table class="table table-striped table-bordered w-auto table-center">
                <thead>
                    <tr>
                        <td>Nomor Surat Masuk</td>
                        <td><input type="text" name="noSM" value="<?php echo $row['noSM']?>"
                                style="border: 0px;" placeholder="Nomor Surat Masuk"></td>
                    </tr>
                    <tr>
                        <td>Tanggal Surat Masuk</td>
                        <td><input type="date" name="tanggalSM" value="<?php echo $row['tanggalSM']?>"
                                style="border: 0px;" placeholder="Tanggal Surat Masuk"></td>
                    </tr>
                    <tr>
                        <td>Alamat Pengirim Surat Masuk</td>
                        <td><input type="text" name="alamatPengirimSM" value="<?php echo $row['alamatPengirimSM']?>"
                                style="border: 0px;" placeholder="Alamat Pengririm Surat Masuk">
                        </td>
                    </tr>
                    <tr>
                        <td>Perihal Surat Masuk</td>
                        <td><input type="text" name="perihalSM" value="<?php echo $row['perihalSM']?>"
                                style="border: 0px;" placeholder="Perihal Surat Masuk"></td>
                    </tr>
                </thead>
            </table>
            <button class="mb-3 btn btn-primary" type="submit" name="noSM"
                value="<?php echo $row['noSM']?>">Submit</button>
        </form>
        <form name="batalEdit" action="index_SM.php">
            <input class="btn btn-warning" type="submit" value="Batal">
        </form>
    </div>
</body>

</html>