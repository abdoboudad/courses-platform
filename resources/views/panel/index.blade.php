<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <link rel="stylesheet" href={{ url('css/panel/sidebarpanel.css') }}>
    <link rel="stylesheet" href={{ url('css/panel/panel.css') }}>
    <link rel="stylesheet" href={{ url('css/panel/course.css') }}>
    <link rel="stylesheet" href={{ url('css/panel/teacher.css') }}>
    <link rel="stylesheet" href={{ url('css/panel/student.css') }}>
    <link rel="stylesheet" href={{ url('css/animation/removealert.css') }}>
    <title>admin</title>
</head>
<body>
    <div id="header">
        <div id="sidebar">
            <div class="title">
                <i class="fa-solid fa-gamepad" style="color: #d6dce5;"></i>           
                <h4>Tutorial</h4>
            </div>
            <div class="items">
                <a href="{{ route('admin.index') }}">
                    <div class="item">
                        <i class="fa-solid fa-gauge"></i>
                        <span>Dashboard</span>
                    </div>
                </a>
                <a href={{ route('admin.create') }}>
                    <div class="item">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <span>Courses</span>
                    </div>
                </a>
                <a href={{ route('playlist') }}>
                    <div class="item">
                        <i class="fa-sharp fa-solid fa-list"></i>
                        <span>playlist</span>
                    </div>
                </a>
                <a href="#" class="categorie">
                    <div class="item categorie_click">
                        <div>
                            <i class="fa-solid fa-sitemap"></i>                        
                            <span>Categories</span>
                        </div>
                        <div>
                            <i class="fa-sharp fa-solid fa-caret-up"></i>
                            <i class="fa-solid fa-caret-down"></i>
                        </div>
                    </div>
                </a>
                <div class="down">
                    <a href={{ route('domain') }}>
                        <div class="domain">
                            <i class="fa-solid fa-laptop-file"></i>
                            <span>domains</span>
                        </div>
                    </a>
                    <a href={{ route('top') }}>
                        <div class="domain">
                            <i class="fa-brands fa-python"></i>
                            <span>Top topics</span>
                        </div>
                    </a>
                </div>
                <a href={{ route('teacher') }}>
                    <div class="item">
                        <i class="fa-solid fa-chalkboard-user"></i>
                        <span>Teatchers</span>
                    </div>
                </a>
                <a href={{ route('student') }}>
                    <div class="item">
                        <i class="fa-solid fa-users"></i>
                        <span>Students</span>
                    </div>
                </a>
                <a href={{ route('admins') }}>
                    <div class="item">
                        <i class="fa-solid fa-crown"></i>
                        <span>Admins</span>
                    </div>
                </a>
            </div>
        </div>
        <div id="right">
            <div id="navbar">
                <div class="elements">
                    <i class="fa-solid fa-bell"></i>
                    <i class="fa-solid fa-envelope"></i>
                    <span class="user">
                        <i class="fa-solid fa-user"></i>
                    </span>
                </div>
            </div>
            <div id="content">
                @yield('content')
            </div>
        </div>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src={{ url('js/categories.js') }}></script>
    <script src={{ url('js/animation/removealert.js') }}></script>
</body>
</html>