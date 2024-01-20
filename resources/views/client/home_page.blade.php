<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Office Inventory Management System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Custom styles -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            font-size: 1rem;
        }
        .navbar-nav {
            margin-left: auto;
        }
        .navbar-nav .nav-item {
            margin-right: 15px;
        }
        .navbar-nav .nav-link {
            color: #000000 !important;
        }
        .navbar-toggler {
            border-color: #000000;
        }
        .navbar-toggler-icon {
            background-color: #000000;
        }
        .sidebar {
            background-color: #ffffff;
            height: 100vh;
            font-size: 1rem;
            padding-top: 20px;
            box-shadow: 2px 0 6px rgba(0, 0, 0, 0.1);
        }
        .sidebar a {
            color: #000000;
        }
        .container {
            margin: 30px auto;
        }
        .section {
            background-color: #ffffff;
            padding: 30px;
            margin-bottom: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            position: relative;
            background: linear-gradient(135deg, rgba(196, 145, 220, 0.24), #2d2d2d);
            color: #202020;
            text-align: center;
            padding: 20px 0;
        }
        .header h1 {
            margin: 0;
        }
        .bubble {
            position: absolute;
            width: 20px;
            height: 20px;
            background-color: rgba(255, 255, 255, 0.6);
            border-radius: 50%;
            animation: moveBubble linear infinite;
        }
        .bubble1 {
            top: 50px;
            left: 50px;
            animation-duration: 3s;
        }
        .bubble2 {
            top: 100px;
            left: 150px;
            animation-duration: 4s;
        }
        .bubble3 {
            top: 30px;
            left: 200px;
            animation-duration: 2.5s;
        }
        @keyframes moveBubble {
            0%, 100% { transform: translateY(0) translateX(0); }
            50% { transform: translateY(-20px) translateX(20px); }
        }
        h2 {
            color: #000000; /* Adjusted heading color */
        }
        .title {
            font-weight: bold;
            text-align: left;
            color: #ffffff;
            padding-left: 29px;
        }
        .btn-primary {
            background: linear-gradient(135deg, #3498db, #8e44ad);
            border: none;
            color: #ffffff;
        }
        .logo {
            position: absolute;
            top: 10px;
            max-width: 1.3em;
            left: 10px;
            display: none;
        }
        @media (min-width: 568px) {
            .logo {
                display: block;
            }
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <img class="logo" src="{{asset('assets/images/logo1.png')}}" alt="Logo" width="50">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Employees</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> Reports</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> Site</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> Sign-out</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<!-- Sidebar -->
<div class="container-fluid">
    <div class="row">
        <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
            <div class="position-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-clipboard"></i> Registration</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-sign-in-alt"></i> Login Records</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-info-circle"></i> Property Details</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="header">
                <h1 class="title">Office Inventories Management System (OIMS)</h1>
                <!-- Moving Bubbles -->
                <div class="bubble bubble1"></div>
                <div class="bubble bubble2"></div>
                <div class="bubble bubble3"></div>
            </div>

            <!-- Property Registration Section -->
            <div class="section">
                <h2> Property Registration</h2>
                <p>Register properties based on projects and record purchase details.</p>
                <a href="#" class="btn btn-primary">Register Property</a>
            </div>

            <!-- Employee Login Records Section -->
            <div class="section">
                <h2>Employee Login Records</h2>
                <p>Record the details of employees who log in daily.</p>
                <a href="#" class="btn btn-primary">View Login Records</a>
            </div>

            <!-- Property Details Section -->
            <div class="section">
                <h2>Property Details</h2>
                <p>View details of registered properties, including purchase and expiry dates.</p>
                <a href="#" class="btn btn-primary">View Property Details</a>
                <!-- Additional Bubbles -->
                <div class="bubble bubble4"></div>
                <div class="bubble bubble5"></div>
                <div class="bubble bubble6"></div>
            </div>
        </main>
    </div>
</div>

<!-- Bootstrap JS and Popper.js (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Font Awesome JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>

</body>
</html>
