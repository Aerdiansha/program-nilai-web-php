<?php
// include 'config/connect.php';
// session_start();

// if (isset($_SESSION["is_login"])) {
//     header("location: dashboard.php");
// }

// if (isset($_POST['login'])) {
//     $username = $_POST['username'];
//     $password = $_POST['password'];

//     $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";

//     $result = $connect->query($sql);

//     if ($result->num_rows > 0) {
//         $data = $result->fetch_assoc();
//         $_SESSION["username"] = $data["username"];
//         $_SESSION["is_login"] = true;

//         header("location:dashboard.php");

//     } else {
//         echo "<script>
//         alert('Username atau password salah');
//         </script>";
//     }
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login | Web program Nilai</title>
    <link href="css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="vendor/fontawesome-pro-6.5.1/css/all.css">
    <script src="vendor/fontawesome-pro-6.5.1/js/all.js" type="text/javascript"></script>

</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main style="margin-top: 5rem;">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Selamat Datang<br>Silahkan Login
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <form action="login.php" method="post">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="username" id="username" type="username"
                                                placeholder="username" required />
                                            <label for="username">Username</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="password" id="password" type="password"
                                                placeholder="Password" required />
                                            <label for="password">Password</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center mt-4 mb-0">
                                            <input type="submit" class="btn btn-success btn-block" name="login"
                                                value="login" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-center small">
                        <div class="text-muted">Hak Cipta &copy; Pusdiktop</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="vendor/bootstrap-5.3.3/js/bootstrap.bundle.js"></script>
</body>

</html>