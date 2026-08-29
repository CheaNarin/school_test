<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>School Management System</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
          rel="stylesheet">
</head>

<body class="bg-light">

<!-- ================= NAVBAR ================= -->

<nav class="navbar navbar-expand-lg bg-white shadow-sm">

    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand fw-bold text-primary" href="#">
            <i class="bi bi-mortarboard-fill me-2"></i>
            School Management
        </a>

        <!-- Mobile Button -->
        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">

            <span class="navbar-toggler-icon"></span>

        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item">
                    <a class="nav-link active" href="#">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#features">
                        Features
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#about">
                        About
                    </a>
                </li>

                <li class="nav-item ms-lg-3">
                    <a href="{{ route('loginForm') }}"
                       class="btn btn-outline-primary px-4">

                        Login

                    </a>
                </li>

                <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
                    <a href="{{ route('auth.register') }}"
                       class="btn btn-primary px-4">

                        Register

                    </a>
                </li>

            </ul>

        </div>

    </div>

</nav>


<!-- ================= HERO ================= -->

<section class="py-5">

    <div class="container">

        <div class="row align-items-center min-vh-75">

            <!-- Left -->
            <div class="col-lg-6 text-center text-lg-start">

                <span class="badge bg-primary-subtle text-primary px-3 py-2 mb-3">
                    School Management System
                </span>

                <h1 class="display-4 fw-bold mb-3">

                    Manage Your School
                    <span class="text-primary">
                        Easily
                    </span>

                </h1>

                <p class="lead text-muted mb-4">

                    A simple and powerful school management system
                    for managing students, teachers, subjects,
                    schedules, results, and more.

                </p>

                <div class="d-flex gap-2 justify-content-center justify-content-lg-start">

                    <a href="{{ route('loginForm') }}"
                       class="btn btn-primary btn-lg px-4">

                        <i class="bi bi-box-arrow-in-right me-2"></i>
                        Get Started

                    </a>

                    <a href="#features"
                       class="btn btn-outline-secondary btn-lg px-4">

                        Learn More

                    </a>

                </div>

            </div>


            <!-- Right -->
            <div class="col-lg-6 text-center mt-5 mt-lg-0">

                <div class="bg-white rounded-4 shadow p-5">

                    <i class="bi bi-mortarboard-fill text-primary"
                       style="font-size: 100px;">
                    </i>

                    <h3 class="fw-bold mt-4">
                        Welcome to Our School
                    </h3>

                    <p class="text-muted mb-0">
                        Everything you need to manage your school
                        in one place.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= FEATURES ================= -->

<section id="features" class="py-5 bg-white">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="fw-bold">
                System Features
            </h2>

            <p class="text-muted">
                Everything you need to manage your school
            </p>

        </div>


        <div class="row g-4">

            <!-- Students -->
            <div class="col-md-6 col-lg-4">

                <div class="card border-0 shadow-sm h-100 text-center">

                    <div class="card-body p-4">

                        <i class="bi bi-people-fill text-primary fs-1"></i>

                        <h5 class="fw-bold mt-3">
                            Student Management
                        </h5>

                        <p class="text-muted">
                            Easily manage student information,
                            profiles, and records.
                        </p>

                    </div>

                </div>

            </div>


            <!-- Teachers -->
            <div class="col-md-6 col-lg-4">

                <div class="card border-0 shadow-sm h-100 text-center">

                    <div class="card-body p-4">

                        <i class="bi bi-person-workspace text-success fs-1"></i>

                        <h5 class="fw-bold mt-3">
                            Teacher Management
                        </h5>

                        <p class="text-muted">
                            Manage teacher information,
                            profiles, and responsibilities.
                        </p>

                    </div>

                </div>

            </div>


            <!-- Subjects -->
            <div class="col-md-6 col-lg-4">

                <div class="card border-0 shadow-sm h-100 text-center">

                    <div class="card-body p-4">

                        <i class="bi bi-book-fill text-warning fs-1"></i>

                        <h5 class="fw-bold mt-3">
                            Subject Management
                        </h5>

                        <p class="text-muted">
                            Create and manage subjects,
                            credits, and academic information.
                        </p>

                    </div>

                </div>

            </div>


            <!-- Schedule -->
            <div class="col-md-6 col-lg-4">

                <div class="card border-0 shadow-sm h-100 text-center">

                    <div class="card-body p-4">

                        <i class="bi bi-calendar-week-fill text-danger fs-1"></i>

                        <h5 class="fw-bold mt-3">
                            Class Schedule
                        </h5>

                        <p class="text-muted">
                            Organize class schedules,
                            rooms, teachers, and subjects.
                        </p>

                    </div>

                </div>

            </div>


            <!-- Results -->
            <div class="col-md-6 col-lg-4">

                <div class="card border-0 shadow-sm h-100 text-center">

                    <div class="card-body p-4">

                        <i class="bi bi-bar-chart-fill text-info fs-1"></i>

                        <h5 class="fw-bold mt-3">
                            Student Results
                        </h5>

                        <p class="text-muted">
                            Record and manage student grades
                            and academic results.
                        </p>

                    </div>

                </div>

            </div>


            <!-- Security -->
            <div class="col-md-6 col-lg-4">

                <div class="card border-0 shadow-sm h-100 text-center">

                    <div class="card-body p-4">

                        <i class="bi bi-shield-lock-fill text-secondary fs-1"></i>

                        <h5 class="fw-bold mt-3">
                            Secure Access
                        </h5>

                        <p class="text-muted">
                            Role-based access for teachers,
                            students, and administrators.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= ABOUT ================= -->

<section id="about" class="py-5">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-8 text-center">

                <h2 class="fw-bold mb-3">
                    About Our System
                </h2>

                <p class="text-muted lead">

                    Our School Management System helps schools
                    organize and manage their daily academic
                    activities in one simple platform.

                </p>

                <a href="{{ route('loginForm') }}"
                   class="btn btn-primary px-4">

                    Start Using System

                </a>

            </div>

        </div>

    </div>

</section>


<!-- ================= FOOTER ================= -->

<footer class="bg-dark text-white py-4">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-md-6">

                <h6 class="fw-bold">
                    <i class="bi bi-mortarboard-fill me-2"></i>
                    School Management System
                </h6>

                <small class="text-secondary">
                    Manage your school easily and efficiently.
                </small>

            </div>

            <div class="col-md-6 text-md-end mt-3 mt-md-0">

                <small class="text-secondary">
                    © {{ date('Y') }} School Management System
                </small>

            </div>

        </div>

    </div>

</footer>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>

</body>
</html>