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
    <link rel="stylesheet" href="/css/invoice.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
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
                <li><a href="{{ route('faq') }}">FAQ</a></li>
                <li>
                    <button class="user-btn">
                        <i class="fas fa-user" alt="User Logo"></i>
                    </button>
                </li>
            </ul>
        </nav>
    </div>

    <a href="https://api.whatsapp.com/send?phone=081212345678" target="a">
        <button class="button-floating">
        <img src="Assets SoftEng/button-contactUs.png" alt="whatsapp">
            <span>0812-1234-5678</span>
        </button>
    </a>

    @if ($activity === null || ($status ?? '') === 'Invoice Not Found')
        <div class="invoice" role="region" aria-label="Invoice">
            <h2>Invoice</h2>
            <p>Invoice not found. Please check your invoice number and try again.</p>
        </div>
    @else
        <div class="invoice" role="region" aria-label="Invoice">
            <h2>Invoice</h2>
            <div class="invoiceBox">
                Invoice Number : <strong>{{ $activity->invoice_number ?? 'N/A' }}</strong>
                <i
                  class="fa-regular fa-copy copy-icon"
                  title="Copy Invoice Number"
                  onclick="copyToClipboard('{{ $activity->invoice_number ?? '' }}')"
                ></i>
            </div>
            <div class="order-date">Order Date : {{ $activity->order_date ?? 'N/A' }}</div>

            <div class="product-info">
                <img
                  src="{{ asset($activity->product_image ?? '') }}"
                  alt="{{ $activity->product_name ?? '' }}"
                />
                <div class="product-details">
                    <p>{{ $activity->product_name ?? 'N/A' }}</p>
                    <p class="quantity">{{ $activity->quantity ?? 'N/A' }}</p>
                </div>
            </div>

            <div class="details-list">
                <div><span>UID</span><span>{{ $activity->data ?? 'N/A' }}</span></div>
                <div><span>WhatsApp Number</span><span>{{ $activity->whatsapp_number ?? 'N/A' }}</span></div>
                <div><span>Method of Payment</span><span>{{ $activity->payment_method ?? 'N/A' }}</span></div>
            </div>

                <div class="price-summary">
                    <div><span>Product Price</span><span>Rp. {{ number_format($activity->service_price ?? 0, 2, ',', '.') }}</span></div>
                    <div><span>Service Fee</span><span>Rp. {{ number_format($activity->fee ?? 0, 2, ',', '.') }}</span></div>
                </div>

                <div class="total-payment" aria-label="Total Payment">
                    <span>Total Payment</span>
                    <span
                      >Rp. {{ number_format($activity->total_payment ?? 0, 2, ',', '.') }}
                      <i
                        class="fa-regular fa-copy copy-icon"
                        title="Copy Total Payment"
                        onclick="copyToClipboard('Rp. {{ number_format($activity->total_payment ?? 0, 2, ',', '.') }}')"
                      ></i>
                    </span>
                </div>

            <div class="status">
                Status :
                <span class="status-label">{{ $activity->status ?? 'N/A' }}</span>
            </div>
        </div>
    @endif

    <div class="button-section">
      <button class="btn-download" onclick="downloadInvoice()">Download Invoice</button>
      <a class="btn-continue" href="{{ route('home') }}">Continue Shopping</a>
    </div>

    <footer>
        <div class="footer-container">
                <h2>TopUpKu</h2>
                <div class="footer-menu-container">
                    <ul>
                        <li><a href="{{ url('home') }}#home">HOME</a></li>
                        <li><a href="{{ url('home') }}#products">PRODUCTS</a></li>
                        <li><a href="{{ route('faq') }}">FAQ</a></li>
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

    <script>
      function downloadInvoice() {
        const invoiceElement = document.querySelector('.invoice');
        html2canvas(invoiceElement).then(canvas => {
          const link = document.createElement('a');
          link.download = 'invoice.png';
          link.href = canvas.toDataURL('image/png');
          link.click();
        });
      }
    </script>
</body>
</html>
