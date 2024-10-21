<?php
// Memanggil file koneksi.php
include_once("koneksi.php");

// Perkondisian untuk mengecek apakah tombol submit sudah ditekan.
if (isset($_POST['Submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Mengecek apakah username dan password sesuai
    if ($username == 'admin' && $password == 'admin') {
        // Set session untuk login
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;

        // Redirect ke halaman data.php
        header("Location: data.php");
        exit();
    } else {
        echo "Username atau password salah!";
    }
}
?>

<html>
<head>
    <title>HALAMAN LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-image: url('bc.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            height: 100vh;
            margin: 0;
        }
        .card {
            margin-top: 50px;
            background-color: rgba(255, 255, 255, 0.8);
        }
        .form-control {
            position: center;
            align: center;
            margin-bottom: 20px;
            border-radius: 40px;
            background-image: linear-gradient(white, white), linear-gradient(to right, #fc00ff, #00dbde);
        }
        .form-control:focus {
            box-shadow: none;
            outline: none;
        }
        .form-icon {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 18px;
            color: #fc00ff;
        }
        .submit-btn {
            background-color: #fc00ff;
            background-image: linear-gradient(to right, #fc00ff, #00dbde);
            color: white;
            border-radius: 30px;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
        }
        .form-group {
            position: relative;
        }
        div {
            text-align: center;
            font-size: 18;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <form action="data.php" method="post" name="form1">
                            <h1>LOGIN</h1>
                            <div class="form-group mb-3">
                                <label for="username" class="form-label">Username</label>
                                <span class="form-icon"><i class="fas fa-user"></i></span>
                                <input type="text" name="username" class="form-control" id="username" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="password" class="form-label">Password</label>
                                <span class="form-icon"><i class="fas fa-lock"></i></span>
                                <input type="password" name="password" class="form-control" id="password" required>
                            </div>
                            <div class="d-grid gap-2">
                                <input type="submit" name="Submit" class="btn submit-btn btn-lg" value="Login">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGFf2FurYy3QTQfvlAOkDoDPLmUpLvfp6BYI5d9KtW5" crossorigin="anonymous"></script>
</body>

</html>
