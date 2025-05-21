<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/faq-style.css">
    <link rel="icon" href="Assets SoftEng/TOPUPKU_LOGO_WHITE_WEBICON.PNG">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>TopUpKu | FAQ</title>
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
                <li><a href="#">HOME</a></li>
                <li><a href="#products">PRODUCTS</a></li>
                <li><a href="#testimoni">TESTIMONI</a></li>
                <li><a href="{{ route('faq') }}">FAQ</a></li>
                <li>
                    <button class="user-btn" onclick="window.location.href='{{ route('register') }}'">
                        <i class="fas fa-user" alt="User Logo"></i>
                    </button>
                </li>
            </ul>
        </nav>
    </div>

    <section>
        <h2 class="titleFAQ">FAQs</h2>

        <div class="faq">
            <div class="question">
                <h3>Bagaimana cara Top Up di TopUpKu?</h3>

                <svg width="15" height="10" viewBox="0 0 42 25">
                    <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
                </svg>
            </div>

                <div class="answer">
                    <p>Pilih produk yang ingin dibeli, Masukkan ID dan pilih nominal top up, Pilih metode pembayaran
                    ,Lakukan pembayaran sesuai instruksi, Tunggu hingga transaksi selesai</p>

                </div>
        </div>

        <div class="faq">
            <div class="question">
                <h3>Metode pembayaran apa saja yang tersedia di TopUpKu?</h3>

                <svg width="15" height="10" viewBox="0 0 42 25">
                    <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
                </svg>
            </div>

                <div class="answer">
                    <p>Kami menyediakan berbagai metode pembayaran seperti transfer bank, OVO, GoPay, Dana, dan QRIS. Pilih yang paling nyaman untuk kamu gunakan!</p>

                </div>
        </div>

        <div class="faq">
            <div class="question">
                <h3>Berapa lama proses top up hingga item masuk ke akun game saya?</h3>

                <svg width="15" height="10" viewBox="0 0 42 25">
                    <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
                </svg>
            </div>

                <div class="answer">
                    <p>Proses top up biasanya instan atau hanya memerlukan waktu beberapa menit. Namun, dalam beberapa kasus tertentu bisa memakan waktu hingga 15 menit tergantung metode pembayaran dan sistem game.</p>

                </div>
        </div>

        <div class="faq">
            <div class="question">
                <h3>Apa yang harus saya lakukan jika top up saya belum masuk?</h3>

                <svg width="15" height="10" viewBox="0 0 42 25">
                    <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
                </svg>
            </div>

                <div class="answer">
                    <p>Jika top up belum masuk setelah 15 menit, silakan hubungi tim support kami melalui whatsapp dengan menyertakan bukti pembayaran dan detail transaksi kamu. Kami akan segera memproses pengecekan.</p>

                </div>
        </div>

    </section>

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

    <script src="/js/dropdownFAQ.js"></script>
</body>
</html>