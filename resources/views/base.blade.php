<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week10 Project | Blade Templating</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <script src="{{url('js/jquery.min.js')}}"></script>
    <script src="{{url('js/popper.min.js')}}"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand">Courseware</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{url('/users')}}">Users</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{url('/instructors')}}">Instructors</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{url('/learners')}}">Learners</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{url('/courses')}}">Courses</a>
                </li>
            
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

<div>
    @yield('content1')
</div>


</body>
</html>