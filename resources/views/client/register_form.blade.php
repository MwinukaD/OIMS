<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign-up Form</title>
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
        Sign-up</h3>
        <p>Fill all the input fields</p>
        <form id="register-form">
            @csrf
            <input type="hidden" value="{{csrf_token()}}" name="token">
            <div class="mb-3 position-relative">
                <input type="email" class="form-control" id="email" name="email" placeholder="*Email" required>
            </div>
            <div class="mb-3 position-relative">
                <input type="text" class="form-control" id="uniqueID" name="uniqueID" placeholder="*uniqueID" required>
            </div>
            <div class="mb-3 position-relative">
                <input type="password" class="form-control" id="password" name="password" placeholder="*Password" required>
            </div>
            <div class="mb-3 position-relative">
                <input type="password" class="form-control" id="repassword" name="repassword" placeholder="*Confirm Password" required>
            </div>
            <input type="submit" class="btn btn-primary" value="Register">
        </form>
        <div class="links">
            <a href="{{route('signin')}}">Go To Login</a> | <a href="{{route('signin')}}">I have an account?</a>
        </div>
    </div>
</div>

<div class="footer">
    &copy; 2024 Office Inventories Management System. All rights reserved.
</div>
<!-- Bootstrap JS and Popper.js (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@include('apis.register')
</body>
</html>
