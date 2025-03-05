<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top-Up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="../css/shop.css">
</head>
<body>
    <div class="navContainer">
        <nav class="wrapperNav">
            <div class="logo">
                <img src='Assets SoftEng/TOPUPKU_LOGO_WHITE.png' alt="TopUpKu_Logo_White">
            </div>
            <ul class="navigationBtn">
                <li><a href="{{ url('home') }}">HOME</a></li>
                <li><a href="{{ route('shop') }}" class="active">PRODUCTS</a></li>
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
    <div class="container">
        <h1>Top-Up.</h1>
        <input type="text" class="search-box" placeholder="Search product...">
        <div class="product-grid">
            <div class="product">
                <a href="{{ route('genshin') }}"><img src="../Assets SoftEng/genshin_product.png" alt="Genshin Impact"></a>
                <p>GENSHIN IMPACT (VIA UID)</p>
            </div>
            <div class="product">
                <a href="{{ route('hsr') }}"><img src="../Assets SoftEng/hsr_product.png" alt="Honkai Star Rail"></a>
                <p>HONKAI: STAR RAIL (VIA UID)</p>
            </div>
            <div class="product">
                <a href="{{ route('mole') }}"><img src="../Assets SoftEng/mole_product.webp" alt="Mobile Legends"></a>
                <p>MOBILE LEGENDS : BANG BANG (VIA UID)</p>
            </div>
            <div class="product">
                <a href="{{ route('pubg') }}"><img src="../Assets SoftEng/pubgm_product.png" alt="Player Unknown's Battlegrounds"></a>
                <p>Player Unknown's Battlegrounds (VIA UID)</p>
            </div>
            <div class="product">
                <a href="{{ route('wuwa') }}"><img src="../Assets SoftEng/wuwa_product.png" alt="Wuthering Waves"></a>
                <p>WUTHERING WAVES (FLASH SALE)</p>
            </div>
            <div class="product">
                <a href="{{ route('valo') }}"><img src="../Assets SoftEng/valorant_product.png" alt="Valorant"></a>
                <p>VALORANT</p>
            </div>
            <div class="product">
                <a href="{{ route('steam') }}"><img src="../Assets SoftEng/steam_product.png" alt="Steam"></a>
                <p>STEAM (IDR)</p>
            </div>
            <div class="product">
                <a href="{{ route('epep') }}"><img src="../Assets SoftEng/epep_product.jpg" alt="Free Fire"></a>
                <p>FREE FIRE (VIA UID)</p>
            </div>
        </div>
    </div>
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
</body>
</html>
