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
                    <button class="user-btn" onclick="window.location.href='{{ route('profile') }}'">
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
    
        <form method="POST" action="{{ route('checkout.show') }}" class="topup-form">
            @csrf
            <h2>1. MASUKKAN USER ID</h2>
            <input type="text" name="data" placeholder="Masukkan UID Anda" required>
            <select name="region" required>
                <option value="Asia">Asia</option>
                <option value="Amerika">Amerika</option>
                <option value="Europe">Europe</option>
                <option value="TW, HK, MO">TW, HK, MO</option>
            </select>
            <h2>2. PILIH NOMINAL TOP UP</h2>
            <div class="topup-options">
                @foreach ($products as $product)
                
                    <label>
                        <input type="radio" name="quantity" value="{{ $product->quantity }}" data-price="{{ $product->price }}" data-currency="{{ $product->currency }}" required>
                        {{ $product->quantity }} {{ $product->currency }} - Rp. {{ number_format($product->price, 0, ',', '.') }}
                    </label>
                @endforeach
                <input type="hidden" name="service_price" id="service_price" value="">
                <input type="hidden" name="currency" id="currency" value="">
                <input type="hidden" name="product_name" value="{{ $productName }}">
                <input type="hidden" name="product_image" value="{{ $productImage }}">
                <!-- fee is now fetched dynamically in controller, so no need to send from form -->
                <input type="hidden" name="discount" value="0">
                <input type="hidden" name="total_payment" id="total_payment" value="">
                <input type="hidden" name="status" value="Pending">
                <input type="hidden" name="order_date" value="{{ date('Y-m-d') }}">
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const radios = document.querySelectorAll('input[name="quantity"]');
                    const servicePriceInput = document.getElementById('service_price');
                    const currencyInput = document.getElementById('currency');
                    const totalPaymentInput = document.getElementById('total_payment');

                    radios.forEach(radio => {
                        radio.addEventListener('change', () => {
                            servicePriceInput.value = radio.getAttribute('data-price');
                            currencyInput.value = radio.getAttribute('data-currency');
                            totalPaymentInput.value = radio.getAttribute('data-price');
                        });
                    });
                });
            </script>
            <h2>3. PILIH METODE PEMBAYARAN</h2>
            <div class="payment-methods">
                <label><input type="radio" name="payment_method" value="QRIS" required> QRIS</label>
                <label><input type="radio" name="payment_method" value="Transfer Bank" required> Transfer Bank</label>
                <label><input type="radio" name="payment_method" value="OVO" required> OVO</label>
                <label><input type="radio" name="payment_method" value="DANA" required> DANA</label>
            </div>
            <h2>4. MASUKKAN NOMOR WHATSAPP</h2>
            <input type="text" name="whatsapp_number" placeholder="Masukkan Nomor WhatsApp Anda" required>
            <div>
                <button type="submit" class="submit-btn">BELI!</button>
            </div>
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
                    const labels = group.querySelectorAll('label');
                    labels.forEach(label => {
                        const input = label.querySelector('input[type="radio"]');
                        label.addEventListener('click', () => {
                            labels.forEach(lbl => lbl.classList.remove('active'));
                            if (input.checked) {
                                label.classList.add('active');
                            }
                        });
                    });
                }
                setupActiveState('.topup-options');
                setupActiveState('.payment-methods');
            });
        </script>
</body>
</html>
