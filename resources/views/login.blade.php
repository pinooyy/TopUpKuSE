<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   --
    <title>Login</title>
    <link rel="icon" href="Assets SoftEng/TOPUPKU_LOGO_WHITE_WEBICON.PNG">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="css/login-style.css">
</head>
<body>
    <nav class="wrapperNav">
        <div class="logo">
            <img src='Assets SoftEng/TOPUPKU_LOGO_WHITE.png' alt="TopUpKu_Logo_White">
        </div>
<ul class="navigationBtn">
    <li>
        <a href="{{ route('home') }}" class="home-btn">HOME</a>
    </li>
    <li>
        <button class="user-btn">
            <i class="fas fa-user" alt="User Logo"></i>
        </button>
    </li>
</ul>

    </nav>
    <div class="container" id = "signup">
        <h1 class="form-title">Log In</h1>
        <form action="{{ route('login.post') }}" method="post" id="loginForm">
            @csrf
            <div class="input-group">
                <i class="fas fa-user"></i>
                <label for="fname">Username</label>
                <input type="text" name="username" id="username" placeholder="Username" required>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="password" required>
            </div>
            <input type="submit" class="btn" value="LOGIN" name="LOGIN">
            <div class="links">
                <p>Belum punya akun?</p>
                <a href="{{ route('register') }}">Register</a>
            </div>
            <div class="mt-5">
                @if ($errors->any())
                 <div class="col-12">
                    @foreach ($errors->all() as $errors)
                        <div class="alert alert-danger">{{ $errors }}</div>
                    @endforeach
                </div>
                @endif
    
                @if (session()->has('error'))
                    <div class="alert alert-danger">{{session('error')}}</div>
                @endif
    
                @if (session()->has('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
                @endif
            </div>
        </form>
    </div>
    <nav class="footerNav">
        <p>Support Us</p>
        <div class="social-icons">
            <a href="https://wa.me/" target="_blank"><i class="fab fa-whatsapp"></i></a>
            <a href="https://www.instagram.com/nicholasssmatthew/" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
    </nav>
    <script src="js/script.js"></script>
</body>
</html>
