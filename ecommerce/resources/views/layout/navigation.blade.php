{{--<div class="w3-bar w3-theme-l1">--}}
{{--    <a href="#" class="w3-bar-item w3-button">Home</a>--}}
{{--    <a href="#" class="w3-bar-item w3-button">Link 1</a>--}}
{{--    <a href="#" class="w3-bar-item w3-button">Link 2</a>--}}
{{--    <a href="#" class="w3-bar-item w3-button">Link 3</a>--}}
{{--</div>--}}
<!-- Grey with black text -->
{{-- W3Nav --}}

<div class="w3-top">
    <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="{!! url('/') !!}">E-COMMERCE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon w3-text-red w3-blue"><i class="fas fa-bars"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
        <!-- <li class="nav-item active">
                <a class="nav-link" href="{!! url('/') !!}">HOME <span class="sr-only">(current)</span></a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link" href="{!! url('/home') !!}">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{!! url('/portfolio') !!}">PORTFOLIO</a>
            </li>
            {{--            <li class="nav-item dropdown w3-dropdown-hover">--}}
            {{--                <a class="nav-link dropdown-toggle w3-text-white w3-button" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
            {{--                    USER--}}
            {{--                </a>--}}
            {{--                <div class="dropdown-menu w3-dropdown-content w3-bar-block w3-border" aria-labelledby="navbarDropdown">--}}
            {{--                    @if(\Illuminate\Support\Facades\Auth::check())--}}
            {{--                        <a class="dropdown-item w3-bar-item w3-button" href="{!! url('/users/logout') !!}">Logout</a>--}}
            {{--                    @else--}}
            {{--                        <a class="dropdown-item" href="{!! url('/users/login') !!}">Login</a>--}}
            {{--                        <a class="dropdown-item" href="{!! url('/users/register') !!}">Register</a>--}}
            {{--                    @endif--}}
            {{--                </div>--}}
            {{--            </li>--}}
            <li class="nav-item">
                <a class="nav-link" href="{!! url('/contact') !!}">CONTACT</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    ACCOUNT
                </a>
                <div class="dropdown-menu pt-0 pb-0 rounded-0" aria-labelledby="navbarDropdown">
                    @if(\Illuminate\Support\Facades\Auth::check())
                        <a class="dropdown-item" href="{!! url('/dashboard') !!}">{{Auth::user()->name}}</a>
                        <a class="dropdown-item" href="{!! url('/users/logout') !!}">Logout</a>
                    @else
                        <a class="dropdown-item" href="{!! url('/users/login') !!}">Login</a>
                        <a class="dropdown-item" href="{!! url('/users/register') !!}">Register</a>
                    @endif
                </div>
            </li>
            @if(Auth::check())
                @if(Auth::user()->hasRole('Master'))
                    <li class="nav-item">
                        <a class="nav-link w3-hover-text-khaki w3-text-lime w3-flat-midnight-blue" style="text-shadow:1px 1px 0 #444" href="{!! url('/admin') !!}">Dashboard</a>
                    </li>
                @elseif(Auth::user()->roles()->pluck('name')->toArray())
                    <li class="nav-item">
                        <a class="nav-link w3-hover-text-khaki w3-text-lime w3-flat-midnight-blue" style="text-shadow:1px 1px 0 #444" href="{!! url('/admin') !!}">Dashboard</a>
                    </li>
                @endif
            @endif
        </ul>
        {{--        <form class="form-inline my-2 my-lg-0">--}}
        {{--            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">--}}
        {{--            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>--}}
        {{--        </form>--}}
    </div>
</nav>
</div>
