<!DOCTYPE html>
<html lang="en">
@include('page.layouts.meta')
<body class="layout-3">
    <div id="app">
        <div class="main-wrapper container">
            
            <!-- navbar -->
            @include('page.layouts.navbar')

            <!-- Main Content -->
            <div class="main-content">
                @yield('content')
            </div>

            <!-- footer -->
            @include('page.layouts.footer')

        </div>
    </div>

    @include('page.layouts.script')
</body>

</html>