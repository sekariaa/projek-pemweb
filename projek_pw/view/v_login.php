<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="asset/bootstrap-5.2.3-dist/css/bootstrap.min.css" />
    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="asset/style.css" />
</head>

<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="asset/image/image1.jpg" class="img-fluid" alt="Sample image">
                </div>
                
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form name="login" action="index.php" method="POST">
                    <h1>Log In</h1>
                    <!-- NIP input -->
                    <div class="form-outline mb-4">
                        <input type="text" name="NIP" class="form-control form-control-lg" placeholder="Masukkan NIP anda" required />
                        <label class="form-label">NIP</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-3">
                        <input type="password" name="pass" class="form-control form-control-lg" placeholder="Masukkan password" required />
                        <label class="form-label">Password</label>
                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- <div class="mt-5 d-flex flex-column mx-5 text-center">
        <div class="p-2">
            <h4 class="">Administrasi Rumah Sakit Medika Mantap</h4>
            <p>Silahkan login ke akun anda</p>
        </div>
        <div class="p-2">
            <form name="login" action="index.php" method="POST">
                <div>
                    <div class="mb-2"><input type="text" name="NIP" placeholder="NIP" required /></div>
                    <div class="mb-2"><input type="password" name="pass" placeholder="Password" required /></div>
                </div>
                <button class="btn btn-primary" type="submit" name="login">Login</button>
            </form>
        </div>
    </div> -->
</body>
</html>