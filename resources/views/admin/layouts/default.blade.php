<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        @include('admin.partials.multi.head')
    </head>
    <body class="sb-nav-fixed">
        @include('admin.partials.multi.nav')
        <div id="layoutSidenav">
            @include('admin.partials.multi.sidebar')
            <div id="layoutSidenav_content">
                <main>
                    @yield('main')
                </main>
                @include('admin.partials.multi.footer')
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <!-- <script src="{ asset('js/jquery.js') }}"></script> -->
    </body>
</html>
