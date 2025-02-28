<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <nav class="navbar">
        <div class="navbar-logo">
            <img src="Assets SoftEng/TOPUPKU LOGO.png" alt="Logo Website">
        </div>
        <div class="navbar-profile">
            <i class="fas fa-user"></i>
            <button id="profileButton"></button>
        </div>
    </nav>
    <div class="container" id = "signup">
        <h1 class="form-title">Log In</h1>
        <form method="post" action="">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <label for="fname">Username</label>
                <input type="text" name="fName" id="fName" placeholder="Username" required>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" required>
            </div>
            <input type="submit" class="btn" value="LOGIN" name="LOGIN">
            <div class="links">
                <p>Belum punya akun?</p>
                <a href="{{ route('register') }}">Register</a>
            </div>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>