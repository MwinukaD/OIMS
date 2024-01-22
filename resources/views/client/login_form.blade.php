<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Poppins Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <!-- Custom styles -->
    <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet">
</head>
<body>

<!-- Bubbles Animation -->
<div class="bubble bubble1"></div>
<div class="bubble bubble2"></div>

<div class="login-form-container">
    <div class="login-form">
        <h3><img src="{{asset('assets/images/logo1.png')}}" alt="Logo" class="logo">
        Sign-in</h3>
        <p>Enter your credentials to access the system.</p>
        <form>
            <div class="mb-3 position-relative">
                <label for="username" class="form-label visually-hidden">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Username">
                <i class="bi bi-person form-control-icon"></i>
            </div>
            <div class="mb-3 position-relative">
                <label for="password" class="form-label visually-hidden">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password">
                <i class="bi bi-lock form-control-icon"></i>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <div class="links">
            <a href="#">Forgot password?</a> | <a href="{{route('signup')}}">Don't have an account?</a>
        </div>
    </div>
</div>

<div class="footer">
    &copy; 2024 Office Inventories Management System. All rights reserved.
</div>

<!-- Bootstrap JS and Popper.js (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@include('apis.login');
</body>
</html>
