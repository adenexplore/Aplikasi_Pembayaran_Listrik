<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" type="text/css" href=css/style.css>
    <link rel="icon" href="images/listrik.png">


    <?php
        include "config/koneksi.php";

        if(isset($_POST['btn'])){
            $user = $_POST['username'];
            $pass = base64_encode($_POST['password']);

            $sql = mysqli_query($koneksi,"SELECT username,password,nama,role FROM user where username = '$user' and password = '$pass'");
            $num = mysqli_num_rows($sql);
            
            if ($num > 0) {
                $row = mysqli_fetch_array($sql);
                session_start();
                $_SESSION['username'] = $row['password'];
                $_SESSION['data_user'] = $row;
                echo "
                    <script>
                        alert('Selamat Datang ".$row['nama']."!');
                        document.location.href = 'list/dashboard.php';
                    </script>
                    ";
            } else {
                echo "
                    <script>
                        alert('Username atau password Yang Anda Masukkan Salah!');
                        document.location.href = 'index.php';
                    </script>
                    ";
            }
        }
    ?>

</head>

<body>
    <style type="text/css">
        body{
            text-align: center;
            background-image: url('images/bg.jpg');
            height: 500px;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
    <div class="count">
        <h1><img src="images/listrik.png" alt="ini logo">Aplikasi Pembayaran Listrik Online  FORM LOGIN</h1>
            <form method="post">
                <div class="form-login">
                    <label>USERNAME</label>
                        <input class="form-control" type="text" name="username">
                            <label>PASSWORD</label>
                        <input class="form-control" type="password" name="password">
                <input class="btn-login" type="submit" value="LOGIN" name="btn" ><br><br>
                <button class="btn-regis"><a href="list/registrasi.php" style="text-decoration: none;color:white;"> REGISTER</a></button>
                </div>
            </form>
    </div>
</body>

</html>



