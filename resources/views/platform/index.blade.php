<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href={{ url('css/platform/style.css') }}>

</head>
<body>

<header class="header">
   
   <section class="flex">

      <a href="home.html" class="logo">Educa.</a>

      <form action="search.html" method="post" class="search-form">
         <input type="text" name="search_box" required placeholder="search courses..." maxlength="100">
         <button type="submit" class="fas fa-search"></button>
      </form>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>

      <div class="profile">
         <img src="images/pic-1.jpg" class="image" alt="">
         <h3 class="name">shaikh anas</h3>
         <p class="role">studen</p>
         <a href="profile.html" class="btn">view profile</a>
         <div class="flex-btn">
            <a href="login.html" class="option-btn">login</a>
            <a href="register.html" class="option-btn">register</a>
         </div>
      </div>

   </section>

</header>   

<div class="side-bar">

   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">
      @if (Auth::user()->data)
         <img src={{ url('imgs',Auth::user()->data->path) }} class="image" alt="">
         <h3 class="name">{{ Auth::user()->name }}</h3>
         <p class="role">{{ Auth::user()->data->level }}</p>
         @else
         <img src={{ url('imgs',Auth::user()->teachers->path) }} class="image" alt="">
         <h3 class="name">{{ Auth::user()->name }}</h3>
         <p class="role">{{ Auth::user()->teachers->level }}</p>
      @endif
     
      <a href={{ route('platform.profile',Auth::user()->id) }} class="btn">view profile</a>
   </div>

   <nav class="navbar">
      <a href={{ route('platform.index') }}><i class="fas fa-home"></i><span>home</span></a>
      <a href={{ route('platform.about') }}><i class="fas fa-question"></i><span>about</span></a>
      <a href={{ route('platform.courses') }}><i class="fas fa-graduation-cap"></i><span>courses</span></a>
      <a href={{ route('platform.teachers') }}><i class="fas fa-chalkboard-user"></i><span>teachers</span></a>
      <a href={{ route('platform.contact') }}><i class="fas fa-headset"></i><span>contact us</span></a>
   </nav>

</div>

@yield('content')

<footer class="footer">

   &copy; copyright @ 2022 by <span>mr. web designer</span> | all rights reserved!

</footer>

<!-- custom js file link  -->
<script src={{ url('js/platform/script.js') }}></script>

   
</body>
</html>