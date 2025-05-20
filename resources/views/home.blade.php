<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TopUpKu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="/css/home-style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>
<body>
    <div class="navContainer">
        <nav class="wrapperNav">
            <div class="logo">
                <img src='Assets SoftEng/TOPUPKU_LOGO_WHITE.png' alt="TopUpKu_Logo_White">
            </div>
            <ul class="navigationBtn">
                <li><a href="#home">HOME</a></li>
                <li><a href="#products">PRODUCTS</a></li>
                <li><a href="#testimoni">TESTIMONI</a></li>
                <li><a href="{{ route('contactus') }}">CONTACT US</a></li>
                <li>
                    <button class="user-btn" onclick="window.location.href='{{ route('register') }}'">
                        <i class="fas fa-user" alt="User Logo"></i>
                    </button>
                </li>
            </ul>
        </nav>
    </div>
    <header id="home">
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
                    <a href="#products" class="btn-product">SHOP NOW</a>
                </div>
            </div>
        </div>
    </header>

    <div class="product-container" id="products">
        <h1>"PRODUCTS"</h1>
        <input type="text" class="search-box" placeholder="Search product...">
        <div class="product-grid">
            <div class="product">
                <a href="{{ route('genshin') }}"><img src="../Assets SoftEng/genshin_product.png" alt="Genshin Impact"></a>
                <p>GENSHIN IMPACT</p>
            </div>
            <div class="product">
                <a href="{{ route('hsr') }}"><img src="../Assets SoftEng/hsr_product.png" alt="Honkai Star Rail"></a>
                <p>HONKAI: STAR RAIL</p>
            </div>
            <div class="product">
                <a href="{{ route('mole') }}"><img src="../Assets SoftEng/mole_product.webp" alt="Mobile Legends"></a>
                <p>MOBILE LEGENDS : BANG BANG</p>
            </div>
            <div class="product">
                <a href="{{ route('pubg') }}"><img src="../Assets SoftEng/pubgm_product.png" alt="Player Unknown's Battlegrounds"></a>
                <p>PUBG MOBILE</p>
            </div>
            <div class="product">
                <a href="{{ route('wuwa') }}"><img src="../Assets SoftEng/wuwa_product.png" alt="Wuthering Waves"></a>
                <p>WUTHERING WAVES</p>
            </div>
            <div class="product">
                <a href="{{ route('valo') }}"><img src="../Assets SoftEng/valorant_product.png" alt="Valorant"></a>
                <p>VALORANT</p>
            </div>
            <div class="product">
                <a href="{{ route('steam') }}"><img src="../Assets SoftEng/steam_product.png" alt="Steam"></a>
                <p>STEAM</p>
            </div>
            <div class="product">
                <a href="{{ route('epep') }}"><img src="../Assets SoftEng/epep_product.jpg" alt="Free Fire"></a>
                <p>FREE FIRE</p>
            </div>
            <div class="product">
                <a href="{{ route('superstargfriend') }}"><img src="../Assets SoftEng/superstargfriend_product.jpeg" alt="Superstar Gfriend"></a>
                <p>SUPERSTAR GFRIEND</p>
            </div>
            <div class="product">
                <a href="{{ route('cookierunkingdom') }}"><img src="../Assets SoftEng/cookierunkingdom_product.jpg" alt="Cookie Run Kingdom"></a>
                <p>COOKIE RUN KINGDOM</p>
            </div>
            <div class="product">
                <a href="{{ route('roblox') }}"><img src="../Assets SoftEng/roblox_product.jpeg" alt="Roblox"></a>
                <p>ROBLOX</p>
            </div>
            <div class="product">
                <a href="{{ route('playtogether') }}"><img src="../Assets SoftEng/playtogether_product.jpeg" alt="Play Together"></a>
                <p>PLAY TOGETHER</p>
            </div>
            <div class="product">
                <a href="{{ route('playtogether') }}"><img src="../Assets SoftEng/playtogether_product.jpeg" alt="Play Together"></a>
                <p>PLAY TOGETHER</p>
            </div>
            <div class="product">
                <a href="{{ route('playtogether') }}"><img src="../Assets SoftEng/playtogether_product.jpeg" alt="Play Together"></a>
                <p>PLAY TOGETHER</p>
            </div>
            <div class="product">
                <a href="{{ route('playtogether') }}"><img src="../Assets SoftEng/playtogether_product.jpeg" alt="Play Together"></a>
                <p>PLAY TOGETHER</p>
            </div>
            <div class="product">
                <a href="{{ route('playtogether') }}"><img src="../Assets SoftEng/playtogether_product.jpeg" alt="Play Together"></a>
                <p>PLAY TOGETHER</p>
            </div>
            <div class="product">
                <a href="{{ route('playtogether') }}"><img src="../Assets SoftEng/playtogether_product.jpeg" alt="Play Together"></a>
                <p>PLAY TOGETHER</p>
            </div>
            <div class="product">
                <a href="{{ route('playtogether') }}"><img src="../Assets SoftEng/playtogether_product.jpeg" alt="Play Together"></a>
                <p>PLAY TOGETHER</p>
            </div>
            
        </div>
    </div>

    <div class="testimoni-container" id="testimoni">

    </div>
    

    <footer>
        <div class="footer-container">
                <h2>TopUpKu</h2>
                <div class="footer-menu-container">
                    <ul>
                        <li><a href="{{ url('home') }}#home">HOME</a></li>
                        <li><a href="{{ url('home') }}#products">PRODUCTS</a></li>
                        <li><a href="{{ url('home') }}#testimoni">TESTIMONI</a></li>
                        <li><a href="{{ route('contactus') }}">CONTACT US</a></li>
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
