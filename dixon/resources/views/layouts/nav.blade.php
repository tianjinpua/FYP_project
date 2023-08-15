<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../app.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        h1 {
            color: white;
        }
    </style>
    <title>Forum Page</title>
    <link rel='icon' href="{{ asset('images/logo.png') }}">
</head>

<body>

    <div class="header-dark">
        <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
            <div class="container"><a class="navbar-brand" href="{{ route('home') }}">Gaming <span>Lab</span></a>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#"></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#"></a></li>

                        <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item" role="presentation"><a class="nav-link"
                                href="{{ route('gameTest') }}">Gaming Test</a>
                        </li>
                        <li class="nav-item" role="presentation"><a class="nav-link"
                                href="{{ url('forumPage') }}">Forum</a></li>
                    </ul>

                    <a style="margin-right:10px; margin-left:320px;">{{ Auth::user()->name }}</a>
                    <a class="btn btn-light action-button" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                    <div class="dropdown-content" style="display:none;">
                        <a style="margin-right:10px; margin-left:100px;">
                            {{ Auth::user()->name }}
                        </a>

                        <a class="btn btn-light action-button" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <main>
        @yield('forum','game','product')

    </main>
</body>

</html>
