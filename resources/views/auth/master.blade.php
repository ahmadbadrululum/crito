<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('page.layouts.meta')
<body class="layout-3">
    <div id="app">
        <div class="navbar-bg" style="height:70px;"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
            <a href="index.html" class="navbar-brand sidebar-gone-hide">Crito</a>
            <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
            <form class="form-inline ml-auto">
                <ul class="navbar-nav">
                    <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                        class="fas fa-search"></i></a>
                    </li>
                </ul>
            </form>
            <ul class="navbar-nav navbar-right">
                <li class="nav-item active"><a href="#" class="nav-link">login</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Register</a></li>
            </ul>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @include('page.layouts.script')
</body>
</html>


