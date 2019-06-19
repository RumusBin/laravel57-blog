<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title', 'Welcome')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
<!-- Right Side Of Navbar -->
    {{--<ul class="navbar-nav ml-auto">--}}
        {{--<!-- Authentication Links -->--}}
        {{--@guest--}}
        {{--<li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>--}}
        {{--<li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>--}}
        {{--@else--}}
            {{--<li><a class="nav-link" href="{{ route('users.index') }}">Manage Users</a></li>--}}
            {{--<li><a class="nav-link" href="{{ route('roles.index') }}">Manage Role</a></li>--}}
            {{--<li class="nav-item dropdown">--}}
                {{--<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                    {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                {{--</a>--}}


                {{--<div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                    {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                       {{--onclick="event.preventDefault();--}}
                                                         {{--document.getElementById('logout-form').submit();">--}}
                        {{--{{ __('Logout') }}--}}
                    {{--</a>--}}


                    {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                        {{--@csrf--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                   {{--onclick="event.preventDefault();--}}
                                                         {{--document.getElementById('logout-form').submit();">--}}
                    {{--{{ __('Logout') }}--}}
                {{--</a>--}}


                {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                    {{--@csrf--}}
                {{--</form>--}}

            {{--</li>--}}
            {{--@endguest--}}
    {{--</ul>--}}
<!-- START NAV -->
    <nav class="navbar">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="../">
                    <img src="../images/bulma.png" alt="Logo">
                </a>
                <span class="navbar-burger burger" data-target="navbarMenu">
                            <span></span>
                    <span></span>
                    <span></span>
                    </span>
            </div>
            <div id="navbarMenu" class="navbar-menu">
                <div class="navbar-end">
                    <a class="navbar-item is-active" href="{{route('main')}}">
                        Home
                    </a>
                    {{--<a class="navbar-item" href="{{route('')}}">--}}
                        {{--Blog--}}
                    {{--</a>--}}
                    <a class="navbar-item" href="{{route('advertising')}}">
                        Advertising
                    </a>
                    <a class="navbar-item">
                        Team
                    </a>
                    <a class="navbar-item">
                        Archives
                    </a>
                    <a class="navbar-item">
                        Help
                    </a>
                    @guest
                        <a class="navbar-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                        <a class="navbar-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @else
                        <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">
                            Account
                        </a>
                        <div class="navbar-dropdown">
                            <a class="navbar-item">
                                Dashboard
                            </a>
                            <a class="navbar-item">
                                Profile
                            </a>
                            <a class="navbar-item">
                                Settings
                            </a>
                            <hr class="navbar-divider">
                            <div class="navbar-item">
                                <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                    @endguest
                </div>
            </div>
        </div>
    </nav>
<!-- END NAV -->
    @yield('content')
    @include('partials._footer')
    @yield('scripts')
</body>
</html>