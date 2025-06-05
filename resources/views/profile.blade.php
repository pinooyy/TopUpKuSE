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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
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
            <img src="Assets SoftEng/user logo.png" alt="Avatar" />
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

    
<div class="content-container two-column-layout">
    <div class="user-settings-dark">
        <div class="setting-row-dark">
            <label>Username</label>
            <div class="value-box-dark">
                <span id="display-username">{{ Auth::user()->username }}</span>
                <button onclick="openModal('username')"><i class="fas fa-lock"></i></button>
            </div>
        </div>

        <div class="setting-row-dark">
            <label>Email</label>
            <div class="value-box-dark">
                <span id="display-email">{{ Auth::user()->email }}</span>
                <button onclick="openModal('email')"><i class="fas fa-lock"></i></button>
            </div>
        </div>

        <div class="setting-row-dark">
            <label>Password</label>
            <div class="value-box-dark">
                <span id="display-password">********</span>
                <button onclick="openModal('password')"><i class="fas fa-lock"></i></button>
            </div>
        </div>
    </div>

    <!-- Activity Section -->
    <div class="main">
        <div class="section-title">Activity History</div>
        <div class="activity-grid">
            @forelse ($activityHistory as $activity)
                <div class="history-card">
                    <div class="card-left">
                        <img src="{{ $activity->product_image ?? 'Assets SoftEng/default-product.png' }}" alt="{{ $activity->product_name ?? 'Product Image' }}" class="card-image" />
                        <div class="card-title">{{ $activity->product_name ?? 'Unknown Product' }}</div>
                    </div>
                    <div class="card-info-right">
                        <div class="card-info">{{ \Carbon\Carbon::parse($activity->order_date)->format('d M Y') }}</div>
                        <div class="card-info">{{ $activity->quantity }}</div>
                        <div class="card-info">Rp {{ number_format($activity->total_payment, 0, ',', '.') }}</div>
                    </div>
                </div>
            @empty
                <p>Tidak ada riwayat aktivitas.</p>
            @endforelse
        </div>
    </div>

    <!-- Modal -->
    <div id="editModal" class="modal" style="display:none;">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h3 id="modalTitle">Edit</h3>
            <form method="POST" action="{{ route('profile.update') }}">
                @csrf
                @method('PUT')
                <input type="text" name="username" value="{{ old('username', Auth::user()->username) }}">
                <input type="email" name="email" value="{{ old('email', Auth::user()->email) }}">
                <input type="password" name="password" placeholder="New password">
                <div class="modal-buttons">
                    <button type="submit">Save</button>
                    <button type="button" onclick="closeModal()">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

    <div class="button-section">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn-logout" type="submit">Logout</button>
        </form>
    </div>

    <script>
        function openModal(field) {
            const modal = document.getElementById("editModal");
            const modalTitle = document.getElementById("modalTitle");
            const usernameField = document.querySelector('input[name="username"]');
            const emailField = document.querySelector('input[name="email"]');
            const passwordField = document.querySelector('input[name="password"]');

            modal.style.display = "block";

            if (field === 'username') {
                modalTitle.innerText = 'Edit Username';
                usernameField.style.display = 'block';
                emailField.style.display = 'none';
                passwordField.style.display = 'none';
            } else if (field === 'email') {
                modalTitle.innerText = 'Edit Email';
                usernameField.style.display = 'none';
                emailField.style.display = 'block';
                passwordField.style.display = 'none';
            } else if (field === 'password') {
                modalTitle.innerText = 'Change Password';
                usernameField.style.display = 'none';
                emailField.style.display = 'none';
                passwordField.style.display = 'block';
            }
        }

        function closeModal() {
            document.getElementById("editModal").style.display = "none";
        }

        window.onclick = function (event) {
            const modal = document.getElementById("editModal");
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

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
