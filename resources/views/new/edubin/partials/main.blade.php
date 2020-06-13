<html lang="en">
<head>
    @include('new.edubin.includes.header')
</head>
<body>
    @include('new.edubin.includes.pre_load')
    <header id="header-part">
        @include('new.edubin.includes.top_nav')
        @include('new.edubin.includes.nav')
    </header>
    @include('new.edubin.includes.search')
    @yield('content')
    @include('new.edubin.includes.footer')
    @include('new.edubin.includes.footer_link')
</body>
</html>