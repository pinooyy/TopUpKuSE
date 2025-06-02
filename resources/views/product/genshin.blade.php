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
        <img class="banner-blur" src="../Assets SoftEng/genshin_banner.jpeg" alt="Background Blur">
        <div class="banner">
            <img src="../Assets SoftEng/genshin_banner.jpeg" alt="Banner Genshin Impact">
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
    <form action="{{ route('checkout') }}" method="POST">
    @csrf

    {{-- Step 1: User ID & Server --}}
    <label>Masukkan UID:</label>
    <input type="text" name="data" required>

    <label>Pilih Server:</label>
    <select name="server">
        <option value="Asia">Asia</option>
        <option value="America">America</option>
        <option value="Europe">Europe</option>
    </select>

    {{-- Step 2: Pilih Nominal --}}
    <h4>Pilih Nominal Top Up</h4>
    @foreach ($nominals as $nominal)
        <label>
            <input type="radio" name="quantity" value="{{ $nominal['quantity'] }}" required>
              <option value="{{ $nominal->quantity }}">{{ $nominal->quantity }} - Rp{{ number_format($nominal->price) }}</option>
        </label><br>
    @endforeach

    {{-- Step 3: Payment Method --}}
    <h4>Pilih Metode Pembayaran</h4>
    @foreach ($paymentMethods as $method)
        <label>
            <input type="radio" name="payment_method" value="{{ $method->name }}" required>
            {{ $method->name }}
        </label><br>
    @endforeach

    {{-- Step 4: WhatsApp --}}
    <label>Nomor WhatsApp:</label>
    <input type="text" name="whatsapp_number" required>

    {{-- Hidden --}}
    <input type="hidden" name="product_name" value="{{ $product->name }}">
    <input type="hidden" name="product_image" value="{{ $product->image }}">
    <input type="hidden" name="service_price" value="0"> {{-- Akan di-override nanti --}}
    <input type="hidden" name="status" value="pending">
    <input type="hidden" name="order_date" value="{{ now() }}">

    <button type="submit">BELI!</button>
</form>
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
