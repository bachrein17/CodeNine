<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Login Page</title>
</head>
<body>
    <section>
        <div class="imgbx"> 
            <img src="image/loginawal.png" alt="">
        </div>
        <div class="contentbx">
            <div class="formbx">
                <h2>Login</h2>
                <p>Selamat Datang Kembali! Silahkan Masuk Kembali</p>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="inputbx">
                        <span>Username</span>
                        <input type="text" name="email" value="<?php echo $email ?? ''; ?>">
                    </div>
                    <div class="inputbx">
                        <span>Password</span>
                        <input type="password" name="password">
                    </div>
                    <div class="remember-forgot">
                        <div class="remember">
                            <input type="checkbox" id="remember" name="remember">
                            <label for="remember">Ingat Saya!</label>
                        </div>
                        <div class="forgot-password">
                            <a href="#">Lupa Password</a>
                        </div>
                    </div>
                    <div class="inputbx">
                        <input type="submit" name="submit" value="Sign in">
                    </div>
                </form>
                <ul class="sci">
                    <li><img src="image/google.png" alt=""></li>
                    <li><img src="image/facebook.png" alt=""></li>
                </ul>
                <div class="inputbx" style="text-align: center; padding-top: 30px;">
                    <p>Belum punya akun? <a href="#">Sign Up</a></p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>

<?php
// Proses Formulir
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Cek jika tombol submit ditekan
    if (isset($_POST["submit"])) {
        // Validasi dan proses data formulir
        $email = $_POST["email"];
        $password = $_POST["password"];
        $remember = isset($_POST["remember"]) ? "Ya" : "Tidak";

        // Lakukan validasi atau autentikasi, lalu lanjutkan dengan logika bisnis Anda
    }
}
?>
