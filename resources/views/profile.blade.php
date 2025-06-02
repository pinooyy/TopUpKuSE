<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TopUpKu</title>
    <link rel="icon" href="Assets SoftEng/TOPUPKU_LOGO_WHITE_WEBICON.PNG">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="/css/profile.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

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
                </ul>
            </nav>
        </div>

    <!-- Header -->
    <div class="header">
        <div class="user-info">
        <img src="gfriend.webp" alt="Avatar" />
            <div>
                <h2>{{ Auth::user()->username }}</h2>
                <div class="tokens">0 Poin • 0 Coupon</div>
            </div>
        </div>
        <div class="level-section">
        Quest: <strong>Level 1</strong>
        <div class="exp-bar">
            <div class="exp-fill"></div>
        </div>
        <div style="font-size: 12px; margin-top: 5px;">0 / - EXP</div>
        </div>
    </div>

    <!-- Activity Section -->
    <div class="activity-history">
    <h3>Riwayat Aktivitas</h3>
    @forelse ($transactions as $trx)
        <div class="activity-item" style="display: flex; align-items: center; margin-bottom: 10px; background: white; border-radius: 10px; padding: 10px;">
            <img src="{{ asset($trx->product_image ?? 'default.png') }}" alt="product" style="width: 40px; height: 40px; margin-right: 15px;" />
            <div style="flex-grow: 1;">
                <strong>{{ $trx->product }}</strong><br>
                {{ \Carbon\Carbon::parse($trx->order_date)->translatedFormat('d M Y') }}<br>
                {{ $trx->quantity ?? 'x1' }} Diamonds<br>
                Rp {{ number_format($trx->total_payment, 0, ',', '.') }}
            </div>
        </div>
    @empty
        <p>Tidak ada riwayat transaksi.</p>
    @endforelse
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
                <p>copyright @2025 - TopUpKu | design by Kelompok 7</p>
        </div>
    </footer>
</body>
</html>

</body>
</html>
