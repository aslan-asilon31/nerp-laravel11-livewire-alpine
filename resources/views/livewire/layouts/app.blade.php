<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    {{ $title ?? 'No Title' }} | {{ env('APP_NAME') }}
  </title>
  @wireUiScripts
  @filepondScripts
  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="assets-new/images/logo/favicon.ico" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="assets-new/css/style-prefix.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <style>
    .footer-nav-link {
      width: inherit;
    }
  </style>

</head>

<body x-data="{ page: 'formLayout', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }" x-init="darkMode = JSON.parse(localStorage.getItem('darkMode'));
$watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))" :class="{ 'dark text-bodydark bg-boxdark-2': darkMode === true }">

  <livewire:partials.header />


  <main>

    {{ $slot }}

  </main>


  <livewire:partials.footer />


  <!--
    - custom js link
  -->
  <script src="assets-new/js/script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".mySwiper", {
      pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
      },
    });
  </script>
  <script>
    var swiper = new Swiper(".testimonialSwiper", {
      slidesPerView: 3,
      spaceBetween: 28,
      centeredSlides: true,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        0: {
          slidesPerView: 1,
          spaceBetween: 20,
          centeredSlides: false,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 28,
          centeredSlides: true,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 32,
        },
      },
    });
  </script>
</body>

</html>
