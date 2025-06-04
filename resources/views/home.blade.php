<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TopUpKu</title>
    <link rel="icon" href="Assets SoftEng/TOPUPKU_LOGO_WHITE_WEBICON.PNG">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="/css/home-style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


</head>
<body>


    <a href="https://api.whatsapp.com/send?phone=081212345678" target="a">
        <button class="button-floating">
        <img src="Assets SoftEng/button-contactUs.png" alt="whatsapp">
            <span>0812-1234-5678</span>
        </button>
    </a>
    <div class="navContainer">
        <nav class="wrapperNav">
            <div class="logo">
                <img src='Assets SoftEng/TOPUPKU_LOGO_WHITE.png' alt="TopUpKu_Logo_White">
            </div>
            <ul class="navigationBtn">
                @auth
                <li><a href="#home">HOME</a></li>
                <li><a href="#products">PRODUCTS</a></li>
                <li><a href="#testimoni">TESTIMONI</a></li>
                <li><a href="{{ route('faq') }}">FAQ</a></li>
                <li>
                    <button class="user-btn" onclick="window.location.href='{{ route('profile') }}'">
                        <i class="fas fa-user" alt="User Logo"></i>
                    </button>
                @else
                <li><a href="#home">HOME</a></li>
                <li><a href="#products">PRODUCTS</a></li>
                <li><a href="#testimoni">TESTIMONI</a></li>
                <li><a href="{{ route('faq') }}">FAQ</a></li>
                <li>
                    <button class="user-btn" onclick="window.location.href='{{ route('login') }}'">
                        <i class="fas fa-user" alt="User Logo"></i>
                    </button>
                </li>
                @endauth
               
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
            @if (Auth::check())
            <h2>Selamat datang, {{ Auth::user()->username }}</h2>
            @else
        <h2>Silakan login</h2>
            @endif


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
            @foreach ($products as $product)
                <div class="product" data-game-name="{{ strtolower($product->game_name) }}">
                    <a href="{{ route(strtolower($product->game_name)) }}">
                        <img src="{{ asset($product->image_url) }}" alt="{{ $product->game_name }}">
                    </a>
                    <p class="product-title">{{ $product->game_title }}</p>


                </div>
            @endforeach
        </div>
    </div>






    <div class="testimoni-container" id="testimoni">
        <h1>"TESTIMONI"</h1>
        <div class="wrapper-testimoni">
            <button id="prev">&lt;</button>
            <div class="testimonial-container" id="testimonial-container"></div>
            <button id="next">&gt;</button>
        </div>
        </div>


    <script src="/js/swipeTesti.js"></script>


    <footer>
        <div class="footer-container">
                <h2>TopUpKu</h2>
                <div class="footer-menu-container">
                    <ul>
                        <li><a href="#home">HOME</a></li>
                        <li><a href="#products">PRODUCTS</a></li>
                        <li><a href="#testimoni">TESTIMONI</a></li>
                        <li><a href="{{ route('faq') }}">FAQ</a></li>
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


    <script>
      document.addEventListener('DOMContentLoaded', function () {
        const searchBox = document.querySelector('.search-box');
        const products = document.querySelectorAll('.product-grid .product');


        searchBox.addEventListener('input', function () {
          const searchText = this.value.toLowerCase().trim();


          products.forEach(product => {
            const gameName = product.querySelector('p').textContent.toLowerCase();
            if (gameName.includes(searchText)) {
              product.style.display = '';
            } else {
              product.style.display = 'none';
            }
          });
        });
      });
    </script>


</body>
</html>
