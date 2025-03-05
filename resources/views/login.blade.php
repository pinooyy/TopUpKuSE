<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <nav class="wrapperNav">
        <div class="logo">
            <img src='Assets SoftEng/TOPUPKU_LOGO_WHITE.png' alt="TopUpKu_Logo_White">
        </div>
        <ul class="navigationBtn">
            <li>
                <button class="user-btn">
                    <i class="fas fa-user" alt="User Logo"></i>
                </button>
            </li>
        </ul>
    </nav>
    <div class="container" id = "signup">
        <h1 class="form-title">Log In</h1>
        <form id="loginForm">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <label for="fname">Username</label>
                <input type="text" name="fName" id="username" placeholder="Username" required>
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
    <nav class="footerNav">
        <p>Support Us</p>
        <div class="social-icons">
            <a href="https://wa.me/" target="_blank"><i class="fab fa-whatsapp"></i></a>
            <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
    </nav>
    <script src="js/script.js"></script>
</body>
</html>