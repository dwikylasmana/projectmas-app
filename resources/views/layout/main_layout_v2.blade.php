<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" name="Project MAS" />
        <meta name="author" name="Dwiky Lasmana" />
    
        <!-- Font Google -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        
        <!-- Vendor -->
        <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
        
        <link href="/css/style.css" rel="stylesheet">
        <script type="/js/main.js" src="javascript.js"></script>
        <link href="/css/trix.css" rel="stylesheet">
        <script type="text/javascript" src="/js/trix.js"></script>

        <!-- Belum fungsi
        <link href="/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        -->


        <title>{{ $title }} |PT. Multiplikasi Artha Sejahtera</title>

    </head>

    <body>

        @include('layout/component/nav')

        <div class="container mt-5">
            @yield('content')
        </div>

        @include('layout/component/footer')

        @include('layout/component/footer_script')

    </body>

</html>