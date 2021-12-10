<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Blog Home - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
</head>

<body>
    <!-- Responsive navbar-->
    @include("layouts.web.includes.navbar")
    <!-- Page header with logo and tagline-->
    @include("layouts.web.includes.header")
    <!-- Page content-->
    <div class="container">
        <div class="row">
            <!-- Blog entries-->
            @yield("content")
            <!-- Side widgets-->
            <div class="col-lg-4">
                <!-- Search widget-->

                <!-- Categories widget-->
                @include("layouts.web.includes.category")
                <!-- Side widget-->
                @include("layouts.web.includes.side_widget")
            </div>
        </div>
    </div>
    <!-- Footer-->
    @include("layouts.web.includes.footer")
    <!-- Bootstrap core JS-->
    @include("layouts.web.includes.scripts")
</body>

</html>
