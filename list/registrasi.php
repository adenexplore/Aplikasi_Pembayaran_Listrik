<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <link rel="stylesheet" type="text/css" href=../css/style.css>
    <link rel="icon" href="images/listrik.png">


    <?php 
    // untuk daftar
if (isset($_POST['daftar'])) {

    // kenalkan koneksi
    include "../config/koneksi.php";
    // global $koneksi;

    //buatkan variable dari masing masing inputan
    $username = $_POST['username'];
    $password = base64_encode($_POST['password']);    

    // cek query ke database berdasarkan field password
    $result = mysqli_query($koneksi, "SELECT password FROM user WHERE password= '$password'");

    
    // cek data sudah tersedia apa belum berdasarkan password
    if(mysqli_fetch_assoc($result)){
        // jika data sudah ada langsung di tampilkan alert bahwa password sudah terdaftar
        echo "<script>
            alert('akun sudah terdaftar!');
            document.location.href = 'registrasi.php';
        </script>";        
    }else{
        // jika data belum ada, langsung insert ke database 
        mysqli_query($koneksi, 'INSERT INTO user (nama,username,password) VALUES ("'.$_POST['nama'].'", "'.$_POST['username'].'", "'.base64_encode($_POST['password']).'");');
        echo "<script>
            alert('daftar berhasil');
            document.location.href = 'registrasi.php';
        </script>";

    }

// penutup daftar
}
    
    ?>
    

</head>
<body>
<style type="text/css">
        body{
            text-align: center;
            background-image: url('../images/bg.jpg');
            height: 500px;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
    <div class="count">
        <h1 style="text-align: center;">DAFTAR</h1>
            <form method="post">
                    <label for="nama">NAMA LENGKAP</label>
                        <input class="form-control" type="text" name="nama">
                    <label for="nama">USERNAME</label>
                        <input class="form-control" type="text" name="username">
                    <label for="nama">PASSWORD</label>
                        <input class="form-control" type="password" name="password">
                    <!-- <label for="nama">konfirmasi password</label>
                        <input class="form-control" type="text" name="konfirmasi_password"> -->
                <input type="submit" value="DAFTAR" name="daftar" style="height: 30px; width:200px;background-color:blue;border:none;border-radius:10px;color:white;font-size:20px;cursor:pointer;"><br><br>
                <button  style="height: 30px; width:200px;background-color:blue;border:none;border-radius:10px;color:white;font-size:20px;cursor:pointer;"><a href="../index.php" style="text-decoration: none;color:white;"> LOGIN</a></button>
            </form>
    </div>
    
</body>
</html>