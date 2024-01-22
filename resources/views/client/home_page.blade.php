@include('includes.top')
@include('includes.sidebar')

        <!-- Main Content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <br>

            <!-- Property Registration Section -->
            <div class="section">
                <h2> Property Registration</h2>
                <p>Register properties based on projects and record purchase details.</p>
                <a href="#" class="btn btn-primary">Register Property</a>

                <!-- Moving Bubbles -->
                <div class="bubble bubble1"></div>
                <div class="bubble bubble2"></div>
                <div class="bubble bubble3"></div>
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

@include('includes.footer')

<!-- Bootstrap JS and Popper.js (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Font Awesome JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>

</body>
</html>
