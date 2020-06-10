<html lang="en">
@include('Admin.includes.header')
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
    @include('Admin.includes.nav')
    @include('Admin.includes.sidebar')
        {{-- @include('Admin.includes.content') --}}
        @yield('content')
        @include('Admin.includes.footer')
    </div>
    @include('Admin.includes.footerLinks')
</body>

</html>