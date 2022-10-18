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
        <form action="/create/" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register Konsumen</p>
            <div class="input-group">
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="pass_konsumen" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Register</button>
            </div>
            <p class="login-register-text">Anda Sudah punya akun? <a href="/konsumenIndex/">Login</a></p>
        </form>
    </div>
</body>
</html>