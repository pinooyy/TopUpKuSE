<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
    <div class="container" id = "signup">
        <h1 class="form-title">Register</h1>
        <form method="post" action="">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <label for="fname">Nama Lengkap</label>
                <input type="text" name="fName" id="fName" placeholder="Nama Lengkap" required>
            </div>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" placeholder="E-mail" required>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" required>
            </div>
            <input type="submit" class="btn" value="REGISTER" name="REGISTER">
            <div class="links">
                <p>Sudah punya Akun?</p>
                <a href="{{ route('login') }}">Login</a>
            </div>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>