<!doctype html>
<html lang="en">
<head>
    @include('layouts.admin.meta')

    <title>@yield('title', 'MondayShop')</title>
    @yield('style')
</head>
<body>


    @yield('main')

    @include('layouts.admin.js')
    @yield('script')
</body>
</html>



