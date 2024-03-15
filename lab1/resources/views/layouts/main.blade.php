<html>
    <head>
        <title>App @yield('title')</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        
    </head>
    <body>
        @section('navbar')
        @include('includes.navbar')
        @show
        <div class="container">
            @yield('content')
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
        $(document).ready(function () {
            // Initialize Bootstrap components
            $('.dropdown-toggle').dropdown();
            $('.navbar-toggler').click(function () {
                $('.navbar-collapse').toggleClass('show');
            });
        });
    </script>

    </body>
</html>