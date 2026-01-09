 <header id="header" class="header d-flex align-items-center fixed-top">
   <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

     <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto me-xl-0">
       <!-- Uncomment the line below if you also wish to use an image logo -->
       <!-- <img src="assets/img/logo.webp" alt=""> -->
       <h1 class="sitename">TheProperty</h1>
     </a>

     <nav id="navmenu" class="navmenu">
       <ul>
         <li><a href="{{ route('home') }}" class="active">Home</a></li>
         <li><a href="{{ route('about') }}">About</a></li>
         </li>
         <li><a href="{{ route('contact') }}">Contact</a></li>
       </ul>
       <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
     </nav>

     <a class="btn-getstarted" href="#">Get Started</a>

   </div>
 </header>