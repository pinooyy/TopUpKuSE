<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TopUpKu | Genshin Impact</title>
    <link rel="icon" href="Assets SoftEng/TOPUPKU_LOGO_WHITE_WEBICON.PNG">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="../css/product-detail.css">
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
                        <li><a href="{{ route('home') }}#home">HOME</a></li>
                        <li><a href="{{ route('home') }}#products">PRODUCTS</a></li>
                        <li><a href="{{ route('home') }}#testimoni">TESTIMONI</a></li>
                        <li><a href="{{ route('faq') }}">FAQ</a></li>
                <li>
                    <button class="user-btn" onclick="window.location.href='{{ route('register') }}'">
                        <i class="fas fa-user" alt="User Logo"></i>
                    </button>
                </li>
            </ul>
        </nav>
    </div>

    <section class="banner-container">
        <img class="banner-blur" src="../Assets SoftEng/steam_banner.jpg" alt="Background Blur">
        <div class="banner">
            <img src="../Assets SoftEng/steam_banner.jpg" alt="Banner Genshin Impact">
        </div>
    </section>
    
    <div class="container">
            <div class="product-info">
                <h1>GENSHIN IMPACT (VIA UID)</h1>
                <p>TopUpKu menyediakan topup Genshin Impact 100% legal via UID langsung untuk akun yang register via Android, iOS, PC, dan PS.</p>
                @include('product.rating-box', [
                    'averageRating' => $averageRating,
                    'totalReviews' => $totalReviews,
                    'totalSales' => $totalSales,
                    'ratingDistribution' => $ratingDistribution,
                    'userReviews' => $userReviews,
                    'productImage' => $productImage,
                    'productName' => $productName,
                ])
            </div>
        <div class="topup-form">
            <h2>1. MASUKKAN USER ID</h2>
            <input type="text" placeholder="Masukkan UID Anda">
            <select>
                <option>Asia</option>
                <option>Amerika</option>
                <option>Europe</option>
                <option>TW, HK, MO</option>
            </select>
            <h2>2. PILIH NOMINAL TOP UP</h2>
            <div class="topup-options">
                @foreach ($products as $product)
                    <button>{{ $product->quantity }} {{ $product->currency }} - Rp. {{ number_format($product->price, 0, ',', '.') }}</button>
                @endforeach
            </div>
            <h2>3. PILIH METODE PEMBAYARAN</h2>
            <div class="payment-methods">
                <button>QRIS</button>
                <button>Transfer Bank</button>
                <button>OVO</button>
                <button>DANA</button>
            </div>
            <div>
                <button class="submit-btn" onclick="window.location.href='{{ route('checkout') }}'">BELI!</button>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-container">
                <h2>TopUpKu</h2>
                <div class="footer-menu-container">
                    <ul>
                        <li><a href="{{ route('home') }}#home">HOME</a></li>
                        <li><a href="{{ route('home') }}#products">PRODUCTS</a></li>
                        <li><a href="{{ route('home') }}#testimoni">TESTIMONI</a></li>
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

    <script>
        // JavaScript to handle independent active states for topup-options and payment-methods groups
        document.addEventListener('DOMContentLoaded', function () {
            function setupActiveState(groupSelector) {
                const group = document.querySelector(groupSelector);
                if (!group) return;
                const buttons = group.querySelectorAll('button');
                buttons.forEach(button => {
                    button.addEventListener('click', () => {
                        buttons.forEach(btn => btn.classList.remove('active'));
                        button.classList.add('active');
                    });
                });
            }
            setupActiveState('.topup-options');
            setupActiveState('.payment-methods');
        });
    </script>
</body>
</html>
