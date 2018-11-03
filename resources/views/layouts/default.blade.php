<!doctype html>
<html lang="{{app()->getLocale()}}">
    <head>
        <title>@yield('title')</title>
        <meta name="description" content="@yield('description')">

        @include('partials.head')
        @yield('head')
    </head>

    <body>
        @include('partials.header')

        <div id="content">
            @yield('content')
        </div>
        
        @include('partials.footer')

        <script src="/js/app.js"></script>
        
        @yield('end_body')
    </body>
</html>
