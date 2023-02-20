<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <style>
        body {
            background-color: rosybrown;
        }
    </style>
</head>

<body>
    <!-- navbar -->
    <nav>
        <div class="container">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">
                    <img src="assets/logoo.png" style="width: 45px;margin-top: 8px;" alt="Brand Logo">
                </a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="login.php">Login</a></li>
                    <li><a href="registrasi.php">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- Area Content -->
    <div class="container">

        <div class="row" style="margin-top: 24px;">

            <!-- <center>
                <img src="assets/logoo.png" style="height: 50px;">
            </center> -->

            <b>
                <p style="text-align: center;font-size: 25px;font-family: monospace;color: purple;margin-top: 5px;">Registrasi Form</p>
            </b>

            <div class="row">
                <div class="col s3"></div>

                <div class="col s6">
                    <div class="card" style="border-radius: 10px;">
                        <div class=" card-image">
                            <img src="assets/bg.png" style="height: 125px;">
                        </div>
                        <div class="card-content">
                            <div class="row">
                                <form class="col s12" action="proses_registrasi.php" method="POST">
                                    <div class="row">
                                        <div class="input-field col s12" style="margin-top: 7px;">
                                            <i class="material-icons prefix">account_circle</i>
                                            <input id="icon_prefix" type="text" class="validate" name="nama" required>
                                            <label for="icon_prefix">Nama</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12" style="margin-top: 5px;margin-bottom: 2px;">
                                            <i class="material-icons prefix">email</i>
                                            <input id="icon_prefix" type="email" class="validate" name="username" required>
                                            <label for="icon_prefix">Email Address</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12" style="margin-top: 5px;margin-bottom: 2px;">
                                            <i class="material-icons prefix">key</i>
                                            <input id="icon_telephone" type="password" class="validate" name="password" required>
                                            <label for="icon_telephone">Password</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12" style="margin-top: 5px;margin-bottom: 2px;">
                                            <i class="material-icons prefix">confirmation_number</i>
                                            <input id="icon_prefix" type="number" class="validate" name="nis" required>
                                            <label for="icon_prefix">NIS</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12" style="margin-top: 5px;margin-bottom: 2px;">
                                            <i class="material-icons prefix">phone</i>
                                            <input id="icon_prefix" type="number" class="validate" name="telp_ortu" required>
                                            <label for="icon_prefix">No. Telepon Orang Tua</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12" style="margin-top: 5px;margin-bottom: 2px;">
                                            <i class="material-icons prefix">class</i>
                                            <input id="icon_prefix" type="text" class="validate" name="kelas" required>
                                            <label for="icon_prefix">Kelas</label>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 5px;margin-bottom: 2px;">
                                        <!-- <div class="input-field col s12"> -->
                                        <!-- <i class="material-icons prefix">class</i> -->
                                        <input id="icon_prefix" type="hidden" class="validate" name="status" value="Diproses">
                                        <!-- <label for="icon_prefix">Kelas</label> -->
                                        <!-- </div> -->
                                    </div>
                                    <div class="row" style="margin-top: 5px;margin-bottom: 2px;">
                                        <!-- <div class="input-field col s12"> -->
                                        <!-- <i class="material-icons prefix">supervisor_account</i> -->
                                        <input id="icon_prefix" type="hidden" class="validate" name="level" value="siswa">
                                        <!-- <label for="icon_prefix">Level</label> -->
                                        <!-- </div> -->
                                    </div>
                                    <div class="row" style="margin-top: 10px;">
                                        <div class=" col s6">
                                            <p style="padding-left: 2px;font-size: small;font-style: italic;text-decoration: underline;">Sudah punya akun? <a href="login.php"> klik disini</a></p>

                                        </div>
                                        <div class="col s6">
                                            <button class="btn waves-effect waves-light" type="submit" name="action" style="margin-left: 30px;background-color: #CD5C5C;">Registrasi
                                                <i class="material-icons right">send</i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col s3"></div>

            </div>
        </div>
    </div>
    <!-- End Area Content -->

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('select');
            var instances = M.FormSelect.init(elems, options);
        });

        // Or with jQuery

        $(document).ready(function() {
            $('select').formSelect();
        });
    </script>
</body>

</html>