<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TopUpKu | Genshin Impact</title>
    <link rel="icon" href="{{ asset('Assets SoftEng/TOPUPKU_LOGO_WHITE_WEBICON.PNG') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/product-detail.css') }}">
    <style>
        .nominal-card.selected, .payment-option.selected {
            border: 2px solid #00ffcc;
            background-color: #222;
        }
    </style>
</head>

<body>

    <!-- Floating WhatsApp Button -->
    <a href="https://api.whatsapp.com/send?phone=081212345678" target="_blank">
        <button class="button-floating">
            <img src="{{ asset('Assets SoftEng/button-contactUs.png') }}" alt="whatsapp">
            <span>0812-1234-5678</span>
        </button>
    </a>

    <!-- Navbar -->
    <div class="navContainer">
        <nav class="wrapperNav">
            <div class="logo">
                <img src="{{ asset('Assets SoftEng/TOPUPKU_LOGO_WHITE.png') }}" alt="TopUpKu_Logo_White">
            </div>
            <ul class="navigationBtn">
                <li><a href="{{ route('home') }}#home">HOME</a></li>
                <li><a href="{{ route('home') }}#products">PRODUCTS</a></li>
                <li><a href="{{ route('home') }}#testimoni">TESTIMONI</a></li>
                <li><a href="{{ route('faq') }}">FAQ</a></li>
                <li>
                    <button class="user-btn" onclick="window.location.href='{{ route('register') }}'">
                        <i class="fas fa-user"></i>
                    </button>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Banner -->
    <section class="banner-container">
        <img class="banner-blur" src="{{ asset('Assets SoftEng/genshin_banner.jpeg') }}" alt="Background Blur">
        <div class="banner">
            <img src="{{ asset('Assets SoftEng/genshin_banner.jpeg') }}" alt="Banner Genshin Impact">
        </div>
    </section>
    
    <!-- Content -->
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

        <!-- Top Up Form -->
        <form method="POST" action="{{ route('order.submit') }}">
            @csrf
            <div class="topup-container">

                <!-- Nominal Selection -->
                <div class="nominal-grid">
                    @foreach ($products as $product)
                        <button type="button" class="nominal-card"
                            data-quantity="{{ $product->quantity }}"
                            data-price="{{ $product->price }}">
                            <div class="card-content">
                                <div class="amount">{{ $product->quantity }} {{ $product->currency }}</div>
                                <div class="price">Rp{{ number_format($product->price) }}</div>
                            </div>
                        </button>
                    @endforeach
                </div>

                <!-- Payment Method -->
                <div class="payment-section">
                    <h4>Pilih Metode Pembayaran</h4>
                    <div class="payment-grid">
                        @foreach ($paymentMethods as $method)
                            <label class="payment-option">
                                <input type="radio" name="payment_method" value="{{ $method->name }}" required>
                                {{ $method->name }}
                            </label>
                        @endforeach
                    </div>

                    <!-- WhatsApp Input -->
                    <div class="wa-input">
                        <label for="wa">Nomor WhatsApp:</label>
                        <input type="text" id="wa" name="whatsapp_number" class="wa-field" required>
                    </div>

                    <!-- Hidden Inputs -->
                    <input type="hidden" name="quantity" id="selectedQuantity">
                    <input type="hidden" name="service_price" id="selectedPrice">
                    <input type="hidden" name="product_name" value="{{ $productName }}">
                    <input type="hidden" name="product_image" value="{{ $productImage }}">
                    <input type="hidden" name="status" value="pending">
                    <input type="hidden" name="order_date" value="{{ now() }}">

                    <!-- Submit -->
                    <button type="submit" class="submit-btn">BELI!</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Footer -->
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
            <p>copyright &copy;2025 - TopUpKu | design by Kelompok 7</p>
        </div>
    </footer>

    <!-- JS -->
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const buttons = document.querySelectorAll('.nominal-card');
        buttons.forEach(button => {
            button.addEventListener('click', () => {
                const quantity = button.dataset.quantity;
                const price = button.dataset.price;

                document.getElementById('selectedQuantity').value = quantity;
                document.getElementById('selectedPrice').value = price;

                buttons.forEach(btn => btn.classList.remove('selected'));
                button.classList.add('selected');
            });
        });

        const paymentOptions = document.querySelectorAll('.payment-option input[type="radio"]');
        paymentOptions.forEach(radio => {
            radio.addEventListener('change', () => {
                document.querySelectorAll('.payment-option').forEach(opt => {
                    opt.classList.remove('selected');
                });
                radio.closest('.payment-option').classList.add('selected');
            });
        });

        // Optional client-side form validation
        document.querySelector('form').addEventListener('submit', function (e) {
            const qty = document.getElementById('selectedQuantity').value;
            const price = document.getElementById('selectedPrice').value;
            if (!qty || !price) {
                e.preventDefault();
                alert('Silakan pilih nominal terlebih dahulu!');
            }
        });
    });
    </script>

</body>
</html>
