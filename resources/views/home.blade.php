<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    <div class="navContainer">
        <nav class="wrapperNav">
            <div class="logo">
                <img src="{{ asset('Assets SoftEng/TOPUPKU LOGO.png') }}" alt="TopUpKu Logo">
            </div>
            <ul class="navigationBtn">
                <li><a href="/" class="active">HOME</a></li>
                <li><a href="/">PRODUCTS</a></li>
                <li><a href="{{ route('cart') }}">CART</a></li>
                <li><a href="/">CONTACT US</a></li>
                <li><img src="{{ asset('Assets SoftEng/user logo.png') }}" alt="User Logo"></li>
            </ul>
        </nav>
    </div>
</body>
</html>
