<!DOCTYPE html>
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <link href="{{ asset('css/app.css')}}" rel="stylesheet">
        @yield('style')
    </head>


    <body>
        @yield('content')

        <script src="{{ asset('js/app.js')}}"></script>
        @yield('script')
    </body>
</html>