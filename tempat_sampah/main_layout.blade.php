<!doctype html>
<html lang="en">
  <head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shirnk-to-fit=no"/>
    <meta name="description" content="Project MAS" />
    <meta name="author" content="Dwiky Lasmana" />
    <!-- library -->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" />
    <script type="js/javascript.js" src="javascript.js"></script>

    <!-- Unused
    <link href="vendor/aos/aos.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">-->
    
    <title>{{ $title }} | PT. Multiplikasi Artha Sejahtera</title>
  </head>


  <!--Top Bar-->
  <body id="page-top">

    <section id="topbar" class="d-flex align-items-center">

      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">multiplikasi@gmail.com</a>
          <i class="bi bi-phone-fill phone-icon"></i> 0838 - 1919 - 2260
        </div>

        <div class="social-links d-none d-md-block">
          <!--<a href="#" class="twitter"><i class="bi bi-twitter"></i></a>-->
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <!--<a href="#" class="instagram"><i class="bi bi-instagram"></i></a>-->
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
        </div>

      </div>
    </section>

    <!--Navbar-->
    @include('layout/navbar_klien')

    <!--Route-->
    <div class="container mt-5">
        @yield('container')
    </div>

    
  </body>
</html>