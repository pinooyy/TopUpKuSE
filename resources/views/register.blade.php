<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
    <div class="container" id="signup">
        <h1 class="form-title">Register</h1>
        <form action="{{ route('register.post') }}" method="post">
            @csrf
            <div class="input-group">
                <i class="fas fa-user"></i>
                <label for="fname">Username</label>
                <input type="text" name="username" id="username" placeholder="Username" required>
            </div>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" placeholder="E-mail" required>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" required>
            </div>
            <input type="submit" class="btn" value="REGISTER" name="REGISTER">
            <div class="links">
                <p>Sudah punya Akun?</p>
                <a href="{{ route('login') }}">Login</a>
            </div>
            <div class="mt-5">
                @if ($errors->any())
                 <div class="col-12">
                    @foreach ($errors->all() as $errors)
                        <div class="alert alert-danger">{{ $errors }}</div>
                    @endforeach
                </div>
                @endif
        
                @if (session()->has('error'))
                    <div class="alert alert-danger">{{session('error')}}</div>
                @endif
        
                @if (session()->has('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
                @endif
            </div>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>
