<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="/css/stylo.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>
<body>
    <div class="navContainer">
        <nav class="wrapperNav">
            <div class="logo">
                <img src='Assets SoftEng/TOPUPKU_LOGO_WHITE.png' alt="TopUpKu_Logo_White">
            </div>
            <ul class="navigationBtn">
                <li><a href="{{ url('/') }}" class="active">HOME</a></li>
                <li><a href="/">PRODUCTS</a></li>
                <li><a href="{{ route('cart') }}">CART</a></li>
                <li><a href="/">CONTACT US</a></li>
                <li>
                    <button class="user-btn">
                        <i class="fas fa-user" alt="User Logo"></i>
                    </button>
                </li>
            </ul>
        </nav>
    </div>
    <header>
        <video id="bg-video" poster="Assets SoftEng/home_thumbnail.png" autoplay loop muted>
            <source src="Assets SoftEng/home_background.mp4" type="video/mp4">
            
        </video>
        <div class="video-info" data-aos="fade-up">
            <div class="logo-video">
                <img src='Assets SoftEng/TOPUPKU_LOGO_WHITE.png' alt="TopUpKu_Logo_White">
            </div>
            <div class="video-text">
                <h1>Level Up Instan!</h1>
                <h1>Top Up Game Favoritmu</h1>
                <h1>Hanya di TopUpKu</h1>
                <p>TopUpKu adalah platform terpercaya untuk top up berbagai </p>
                <p>game favoritmu. Dengan layanan cepat, aman, dan harga terbaik,</p>
                <p>kami siap membantu meningkatkan pengalaman bermainmu!</p>
                <div class="btn-container">
                    <a href="/shop" class="btn-product">SHOP NOW</a>
                </div>
            </div>
        </div>
    </header>
    

    <footer>
        <div class="footer-container">
                <h2>TopUpKu</h2>
                <div class="footer-menu-container">
                    <ul>
                        <li><a href="home.html">HOME</a></li>
                        <li><a href="ourProducts.html">PRODUCTS</a></li>
                        <li><a href="testimoni.html">CART</a></li>
                        <li><a href="aboutUs.html">CONTACT US</a></li>
                    </ul>
                </div>
                <div class="social-icons">
                    <a href="https://wa.me/" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
                <p>copyright @2025 - TopUpKu | design by Kelompok 7</p>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

</body>
</html>
