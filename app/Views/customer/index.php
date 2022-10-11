<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/style_1.css">
    <title>Admin</title>
    <link rel="shortcut icon" href="../../Assets/unila.ico"/>
</head>
<html>
<body>
    <div class="container">
        <form action="login.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login Konsumen</p>
            <div class="input-group">
                <input type="text" placeholder="Nomor KTP" name="no_ktp" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="passwords" required>
            </div>
            <div class="input-group">
                <button name="submitLogin" class="btn">Login</button>
            </div>
            <p class="login-register-text">Anda belum punya akun? <a href="/register/">Register</a></p>
        </form>
    </div>
</body>
</html>