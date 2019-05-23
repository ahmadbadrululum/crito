<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('page.layouts.meta')

<body class="layout-3">
    <div id="app">
    @include('auth.navbar')
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @include('page.layouts.script')
</body>

</html>