<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>TopUpKu | Checkout</title>
    <link rel="icon" href="Assets SoftEng/TOPUPKU_LOGO_WHITE_WEBICON.PNG" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    />
    <link rel="stylesheet" href="/css/checkout.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
  <div class="navContainer">
        <nav class="wrapperNav">
            <div class="logo">
                <img src='Assets SoftEng/TOPUPKU_LOGO_WHITE.png' alt="TopUpKu_Logo_White">
            </div>
            <ul class="navigationBtn">
                <li><a href="{{ url('home') }}#home">HOME</a></li>
                <li><a href="{{ url('home') }}#products">PRODUCTS</a></li>
                <li><a href="{{ route('cart') }}">CART</a></li>
                <li><a href="{{ route('contactus') }}">CONTACT US</a></li>
                <li>
                    <button class="user-btn">
                        <i class="fas fa-user" alt="User Logo"></i>
                    </button>
                </li>
            </ul>
        </nav>
    </div>
    <div class="payment-section" role="region" aria-label="QRIS Payment Section">
        <p>Please pay the exact amount listed to process your order automatically</p>
        <img src="Assets SoftEng/qris_logo.webp" alt="QRIS Logo" class="qris-logo" />
        <img src="Assets SoftEng/qr-code.png" alt="QR Code" class="qr-code" />
        <div class="btn-container">
            <button class="print-btn" onclick="window.print()">
                <i class="fa fa-print"></i> Print Invoice
            </button>
            <button onclick="downloadQRCode()">
                <i class="fa fa-download"></i> Download QR Code
            </button>
            <button onclick="location.reload()">
                <i class="fa fa-sync-alt"></i> Refresh Pages
            </button>
        </div>
    </div>

    <div class="order-summary" role="region" aria-label="Order Summary">
        <h2>Order Summary</h2>
        <div class="invoice">
            Invoice Number : <strong>{{ $invoice_number ?? 'N/A' }}</strong>
            <i
              class="fa-regular fa-copy copy-icon"
              title="Copy Invoice Number"
              onclick="copyToClipboard('{{ $invoice_number ?? '' }}')"
            ></i>
        </div>
        <div class="order-date">Order Date : {{ $order_date ?? 'N/A' }}</div>

        <div class="product-info">
            <img
              src="{{ $product_image ?? '' }}"
              alt="{{ $product_name ?? '' }}"
            />
            <div class="product-details">
                <p>{{ $product_name ?? 'N/A' }}</p>
                <p class="quantity">{{ $quantity ?? 'N/A' }}</p>
            </div>
        </div>

        <div class="details-list">
            <div><span>Data</span><span>{{ $data ?? 'N/A' }}</span></div>
            <div><span>WhatsApp Number</span><span>{{ $whatsapp_number ?? 'N/A' }}</span></div>
            <div><span>Method of Payment</span><span>{{ $payment_method ?? 'N/A' }}</span></div>
        </div>

        <div class="price-summary">
            <div><span>Service Price</span><span>Rp. {{ number_format($service_price ?? 0, 0, ',', '.') }}</span></div>
            <div><span>Fee</span><span>Rp. {{ number_format($fee ?? 0, 0, ',', '.') }}</span></div>
            <div><span>Discount</span><span>Rp. {{ number_format($discount ?? 0, 0, ',', '.') }}</span></div>
        </div>

        <div class="total-payment" aria-label="Total Payment">
            <span>Total Payment</span>
            <span
              >Rp. {{ number_format($total_payment ?? 0, 0, ',', '.') }}
              <i
                class="fa-regular fa-copy copy-icon"
                title="Copy Total Payment"
                onclick="copyToClipboard('Rp. {{ number_format($total_payment ?? 0, 0, ',', '.') }}')"
              ></i>
            </span>
        </div>

        <div class="status">
            Status :
            <span class="status-label">{{ $status ?? 'N/A' }}</span>
        </div>
    </div>
    <footer>
        <div class="footer-container">
                <h2>TopUpKu</h2>
                <div class="footer-menu-container">
                    <ul>
                        <li><a href="{{ url('home') }}#home">HOME</a></li>
                        <li><a href="{{ url('home') }}#products">PRODUCTS</a></li>
                        <li><a href="{{ route('cart') }}">CART</a></li>
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
</body>
</html>
</content>
</edit_file>
