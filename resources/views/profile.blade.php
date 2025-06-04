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


    <div class="button-section">
        <form method="POST" action="{{ route('logout') }}">
            <button class="btn-logout" href="{{ route('logout') }}">Logout</button>
            @csrf
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
                <p>copyright @2025 - TopUpKu | design by Kelompok 7</p>
        </div>
    </footer>


<script>
  function openModal(field) {
    const modal = document.getElementById("editModal");
    const modalField = document.getElementById("modalField");
    const modalValue = document.getElementById("modalValue");
    const modalTitle = document.getElementById("modalTitle");

    modal.style.display = "block";
    modalField.value = field;

    if (field === 'username') {
      modalTitle.innerText = 'Edit Username';
      modalValue.type = 'text';
      modalValue.value = document.getElementById('display-username').innerText.trim();
    } else if (field === 'email') {
      modalTitle.innerText = 'Edit Email';
      modalValue.type = 'email';
      modalValue.value = document.getElementById('display-email').innerText.trim();
    } else if (field === 'password') {
      modalTitle.innerText = 'Change Password';
      modalValue.type = 'password';
      modalValue.value = '';
    }
  }

  function closeModal() {
    document.getElementById("editModal").style.display = "none";
  }

  // Optional: close when clicking outside modal
  window.onclick = function(event) {
    const modal = document.getElementById("editModal");
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
</script>


</body>
</html>


</body>
</html>
