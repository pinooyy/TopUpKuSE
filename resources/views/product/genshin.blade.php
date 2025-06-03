<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TopUpKu | Genshin Impact</title>
    <link rel="icon" href="Assets SoftEng/TOPUPKU_LOGO_WHITE_WEBICON.PNG">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="../css/product-detail.css">

    <style>
    .nominal-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
    gap: 1rem;
    margin-top: 1.5rem;
}

.nominal-card {
    background-color: #1e2a45;
    border: 2px solid transparent;
    border-radius: 12px;
    padding: 1rem;
    color: #fff;
    text-align: center;
    transition: 0.2s ease-in-out;
    cursor: pointer;
}

.nominal-card:hover,
.nominal-card.selected {
    border-color: #00bfff;
    background-color: #263a5c;
}

.card-content .amount {
    font-weight: bold;
    font-size: 1.1rem;
}

.card-content .price {
    font-size: 0.95rem;
    margin-top: 0.5rem;
    color: #ccc;
}

    </style>

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

    <!-- Input lain seperti data akun, nomor WA, dll -->
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

<input type="hidden" name="quantity" id="selectedQuantity">
<input type="hidden" name="service_price" id="selectedPrice">

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
    <input type="hidden" name="product_name" value="{{ $productName ?? $product->game_name }}">
    <input type="hidden" name="product_image" value="{{ $productImage ?? $product->image_url }}">
    <input type="hidden" name="service_price" id="selectedPrice" value="0"> {{-- Akan diisi lewat tombol --}}
    <input type="hidden" name="quantity" id="selectedQuantity" value="">
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
});
</script>


</script>
</body>
</html>
