<!DOCTYPE html>
<html>
    <head>

    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="fontawesome-free-5.9.0-web/css/all.min.css">

        <link href="Main.css" rel="stylesheet">
        <script src="jquery-3.4.1.min.js"></script>
        <script src="JQUERYmain.js"></script>

        <title>FormLogin</title>
    </head>

    <body>
        <div class="box">
            <div class="main"></div>
                <div class="loginform">
                    <h1>LOGIN</h1><br>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user"></i></div>
                        </div>
                        <input type="text" name="" class="form-control" placeholder="Masukkan Username">
                    </div><br>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
                        </div>
                        <input type="password" name="" class="form-control" placeholder="Masukkan Password" required="required">
                    </div><br>
                    <button type="submit" class="btn">LOGIN</button>
                </div>

                <div class="signupform">
                    <h1>REGISTRASI</h1>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user"></i></div>
                        </div>
                        <input type="text" name="" class="form-control" placeholder="Masukkan Nama Anda">
                    </div><br>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-envelope-open"></i></div>
                        </div>
                        <input type="email" name="" class="form-control" placeholder="Masukkan Email Anda" required="required">
                    </div><br>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
                        </div>
                        <input type="password" name="" class="form-control" placeholder="Masukkan Password" required="required">
                    </div><br>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
                        </div>
                        <input type="password" name="" class="form-control" placeholder="Konfirmasi Password Anda" required="required">
                    </div>
                    <button type="submit" class="btn">REGISTRASI</button>
                </div>

                <div class="login_msg">Memiliki Akun ?</div>
                <div class="signup_msg">Tidak Memiliki Akun ?</div>

            <button class="login_btn">LOGIN</button>
            <button class="signup_btn">REGISTRASI</button>


        </div>
    </body>
</html>