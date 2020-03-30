<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ str_replace('_', '-', app()->getLocale()) }} | $title?? ''</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="#">
    <!-- Bootstrap core CSS -->
    <link href="dist/css/lib/bootstrap.min.css" type="text/css" rel="stylesheet">
    <!-- Diff core CSS -->
    <link href="dist/css/diff.min.css" type="text/css" rel="stylesheet">
    <!-- Favicon -->
    <link href="dist/img/favicon.png" type="image/png" rel="icon">
</head>
<body>
<!-- Layout Nav Side -->
<div class="nav-side">
    <!-- Start of Navigation -->
@include('layouts.sidebar')
<!-- End of Navigation -->
    <!-- Start of Main -->
    <div class="main">
        @yield('content')
    </div>
    <!-- End of Main -->
</div>
<!-- Layout Nav Side -->
<script src="dist/js/vendor/jquery-slim.min.js"></script>
<script src="dist/js/vendor/popper.min.js"></script>
<script src="dist/js/vendor/feather.min.js"></script>
<script src="dist/js/vendor/bootstrap.min.js"></script>
<script src="dist/js/diff.min.js"></script>
</body>
</html>
