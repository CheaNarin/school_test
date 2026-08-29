<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - School Management System</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
          rel="stylesheet">
</head>

<body class="bg-light">

<div class="container min-vh-100 d-flex justify-content-center align-items-center">

    <div class="card shadow border-0 rounded-4" style="max-width: 420px; width: 100%;">

        <div class="card-body p-4 p-md-5">

            <!-- Logo -->
            <div class="text-center mb-4">

                <div class="bg-primary text-white rounded-circle
                            d-inline-flex justify-content-center align-items-center
                            mb-3"
                     style="width: 70px; height: 70px;">

                    <i class="bi bi-mortarboard-fill fs-2"></i>

                </div>

                <h3 class="fw-bold mb-1">
                    School Management
                </h3>

                <p class="text-muted">
                    Login to your account
                </p>

            </div>


            <!-- Login Form -->
            <form action="{{ route('auth.login') }}" method="POST">

                @csrf

                <!-- Email -->
                <div class="mb-3">

                    <label for="email" class="form-label fw-semibold">
                        Email Address
                    </label>

                    <div class="input-group">

                        <span class="input-group-text bg-white">
                            <i class="bi bi-envelope"></i>
                        </span>

                        <input
                            type="email"
                            name="email"
                            id="email"
                            class="form-control"
                            placeholder="Enter your email"
                            value="{{ old('email') }}"
                            required
                        >

                    </div>

                    @error('email')
                        <div class="text-danger small mt-1">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <!-- Password -->
                <div class="mb-3">

                    <label for="password" class="form-label fw-semibold">
                        Password
                    </label>

                    <div class="input-group">

                        <span class="input-group-text bg-white">
                            <i class="bi bi-lock"></i>
                        </span>

                        <input
                            type="password"
                            name="password"
                            id="password"
                            class="form-control"
                            placeholder="Enter your password"
                            required
                        >

                    </div>

                    @error('password')
                        <div class="text-danger small mt-1">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <!-- Remember + Forgot -->
                <div class="d-flex justify-content-between align-items-center mb-4">

                    <div class="form-check">

                        <input
                            type="checkbox"
                            class="form-check-input"
                            name="remember"
                            id="remember"
                        >

                        <label for="remember" class="form-check-label">
                            Remember me
                        </label>

                    </div>

                    <a href="#" class="text-decoration-none">
                        Forgot Password?
                    </a>

                </div>


                <!-- Login Button -->
                <button type="submit"
                        class="btn btn-primary w-100 py-2 fw-semibold">

                    <i class="bi bi-box-arrow-in-right me-2"></i>
                    Login

                </button>

            </form>


            <!-- Register -->
            <div class="text-center mt-4">

                <span class="text-muted">
                    Don't have an account?
                </span>

                <a href="{{ route('auth.register') }}"
                   class="text-decoration-none fw-semibold">

                    Register

                </a>

            </div>

        </div>

    </div>

</div>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>

</body>
</html>