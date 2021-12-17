<!DOCTYPE html>

<html lang="en">

    <head>

        @include('layout/component/head')

    </head>

    <body>

        @include('layout/component/nav_welcome')

        <div class="container mt-5">
            @yield('content')
        </div>

        @include('layout/component/footer_welcome')

    </body>

</html>