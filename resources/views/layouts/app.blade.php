<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('page-title') - LaraBB</title>

    <!-- Styles -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/custom.css">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    LaraBB
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                    <li><a href="{{ url('/unread') }}">Unread Posts</a></li>
                    <li><a href="{{ url('/unread/replies') }}">Unread Replies</a></li>
                    <li><a href="{{ url('/members') }}">Members</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ (Auth::guest() ? 'Hello, Guest!' : Auth::user()->name) }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                @if (Auth::guest())
                                <li><a href="{{ url('/login') }}"><i class="fa fa-btn fa-sign-in"></i> Login</a></li>
                                <li><a href="{{ url('/register') }}"><i class="fa fa-btn fa-user"></i> Register</a></li>
                                @else
                                <li><a href="{{ url('/profile') }}"><i class="fa fa-btn fa-user"></i> Profile</a></li>
                                <li><a href="{{ url('/profile/settings') }} "><i class="fa fa-btn fa-cog"></i> Settings</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i> Logout</a></li>
                                @endif
                            </ul>
                        </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <div id="footer" class="navbar-default">
        <div class="container">
            <div class="row">&nbsp;</div>
            <div class="row">
                <div class="col-md-5 hidden-xs">
                    <p class="text-muted text-center">
                        <small><a href="http://larabb.org">Powered by LaraBB</a></small><br />
                        <small>LaraBB v0.1.0 Alpha</small>
                    </p>
                </div>
                <div class="col-md-2">
                    <p class="text-center">
                        <a href="{{ url('feed/rss') }}" title="RSS 2.0"><i class="fa fa-rss-square fa-2x text-info"></i></a>
                        &nbsp;
                        <a href="{{ url('feed/atom') }}" title="Atom Feed"><i class="fa fa-rss-square fa-2x text-warning"></i></a>
                    </p>
                </div>
                <div class="col-md-5 hidden-xs">
                    <p class="text-muted text-center">
                        <small><a href="http://larabb.org/themes">LaraBB Theme</a></small><br />
                        <small>Developed by <a href="https://jasonclemons.me">Jason Clemons</a></small>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
