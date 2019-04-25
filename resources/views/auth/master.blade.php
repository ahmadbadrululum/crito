<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('page.layouts.meta')

<body class="layout-3">
    <div id="app">
        <div class="navbar-bg" style="height:70px;"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
            <a href="{{ url('/') }}" class="navbar-brand sidebar-gone-hide">Crito</a>

            <ul class="navbar-nav navbar-right ml-auto">
                <!-- Authentication Links -->
                @guest
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @include('page.layouts.script')
</body>

</html>