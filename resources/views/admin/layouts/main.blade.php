<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>{{ $title ?? 'Company Profile' }}</title>
    <!-- CSS files -->
    <link href="/assets/css/tabler.min.css" rel="stylesheet" />
    <link href="/assets/css/tabler-flags.min.css" rel="stylesheet" />
    <link href="/assets/css/tabler-payments.min.css" rel="stylesheet" />
    <link href="/assets/css/tabler-vendors.min.css" rel="stylesheet" />
    <link href="/assets/css/demo.min.css" rel="stylesheet" />
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>

<body>
    <script src="/assets/js/demo-theme.min.js"></script>
    <div class="page">
        <!-- Navbar -->
        @include('admin.layouts.partials.navbar')

        <div class="page-wrapper">
            <!-- Page header -->
            @yield('page-header')

            <!-- Page body -->
            <div class="page-body">
                <div class="container-xl">
                    @yield('content')
                </div>
            </div>
            @include('admin.layouts.partials.footer')
        </div>
    </div>
    
    <!-- Libs JS -->
    <script src="/assets/libs/apexcharts/dist/apexcharts.min.js" defer></script>
    <script src="/assets/libs/jsvectormap/dist/js/jsvectormap.min.js" defer></script>
    <script src="/assets/libs/jsvectormap/dist/maps/world.js" defer></script>
    <script src="/assets/libs/jsvectormap/dist/maps/world-merc.js" defer></script>
    <!-- Tabler Core -->
    <script src="/assets/js/tabler.min.js" defer></script>
    <script src="/assets/js/demo.min.js" defer></script>
</body>

</html>