<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'app')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.0/css/all.min.css" integrity="sha512-ApSLB1Pd3/bZN8fWB/RG9YhN/7bd9Hkf3AGaE2mPfebjrxagjuBtx2GcgdqIlJkUzwylBo61r9Xa9NmgBI0swA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .nav li a{
            display: flex;
            gap: 15px;
        }
         .nav-link {
            transition: all 0.2s ease-in-out;
            border-radius: 0.375rem;
            color: white;
        }
        .nav-link:hover, .nav-link a:hover {
            background-color:white;
            color: black;
        }
    </style>
</head>

<body class="d-flex hover">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px; height: 100vh;"> <a href="/"
            class="d-flex gap-3 align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none"> 
             <i class="fa-solid fa-graduation-cap fs-4"></i>
           <span class="fs-3">School</span> </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
           
            <li> <a href="#" class="nav-link"> 
                <i class="bi bi-palette"></i>
                    Dashboard
                </a> </li>
            <li> <a href="{{ route('student.index') }}" class="nav-link"> 
                <i class="fa-solid fa-user-graduate"></i>
                    Manage Student
                </a> </li>
            <li> <a href="{{ route('teacher.index') }}" class="nav-link ">
             <i class="fa-solid fa-person-chalkboard"></i>
                    Manage Teacher
                </a> </li>
            <li> <a href="" class="nav-link"> 
                    <i class="bi bi-people"></i>
                    Manage Class
                </a> </li>
        </ul>
        <hr>
        <div class="dropdown"> <a href="#"
                class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                data-bs-toggle="dropdown" aria-expanded="false"> <img src="https://i.pinimg.com/1200x/e6/91/2f/e6912f709474be6a30a0f70cd84bd423.jpg" alt="" width="32"
                    height="32" class="rounded-circle me-2"> <strong>Profile</strong> </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><form action="{{ route('logout') }}" method="POST" >
                   
                    <button class="btn btn-danger">Sign out</button>
                     @csrf
                </form></li>
            </ul>
        </div>
    </div>
    <main class="px-3 w-100 h-100">
        @yield('content')
         
    </main>
   
</body>

</html>