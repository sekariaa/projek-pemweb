<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Surat Keluar</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="asset/bootstrap-5.2.3-dist/css/bootstrap.min.css" />
    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="asset/style.css" />
</head>

<body>
    <div class="my-5 mx-5 text-center">
        <h1>Tambah Surat Keluar</h1>
        <p>Silahkan menambahkan surat keluar</p>
        <div class="mt-3"></div>
        <form name="tambahSK" action="index_tambahSK.php" method="POST">
            <table class="table table-striped table-bordered w-auto table-center">
                <thead>
                    <tr>
                        <td>Nomor Surat Keluar</td>
                        <td><input type="text" name="noSK" style="border: 0px;" placeholder="Nomor Surat Keluar" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Surat Keluar</td>
                        <td><input type="date" name="tanggalSK" style="border: 0px;" placeholder="Tanggal Surat Keluar">
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat Tujuan Surat Keluar</td>
                        <td><input type="text" name="alamatTujuanSK" style="border: 0px;" placeholder="Alamat Tujuan Surat Keluar">
                    </td>
                    </tr>
                    <tr>
                        <td>Perihal Surat Keluar</td>
                        <td><input type="text" name="perihalSK" style="border: 0px;"
                                placeholder="Perihal Surat Keluar"></td>
                    </tr>
                </thead>
            </table>
            <input class="mb-3 btn btn-primary" type="submit" value="Tambah Surat Keluar">
        </form>
        <form name="batalTambahSK" action="index_SK.php">
            <input class="btn btn-warning" type="submit" value="Batal">
        </form>
    </div>
</body>

</html>