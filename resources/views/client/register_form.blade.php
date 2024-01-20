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
        Sign-up</h3>
        <p>Fill all the input fields</p>
        <form>
            <div class="mb-3 position-relative">
                <input type="email" class="form-control" id="email" name="email" placeholder="*Email">
            </div>
            <div class="mb-3 position-relative">
                <input type="text" class="form-control" id="uniqueID" name="uniqueID" placeholder="*uniqueID">
            </div>
            <div class="mb-3 position-relative">
                <input type="password" class="form-control" id="password" name="password" placeholder="*Password">
            </div>
            <div class="mb-3 position-relative">
                <input type="password" class="form-control" id="repassword" name="repassword" placeholder="*Confirm Password">
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
        <div class="links">
            <a href="{{route('signin')}}">Go To Login</a> | <a href="{{route('signin')}}">I have an account?</a>
        </div>
    </div>
</div>

<div class="footer">
    &copy; 2024 Laravel project by Diaz
</div>

<!-- Bootstrap JS and Popper.js (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
