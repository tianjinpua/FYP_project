<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAMING LAB</title>

    <link rel="stylesheet" href="../adminCss.css">

    <!-- Fonts -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="../admin.js" defer></script>
</head>

<body>

    <nav class="sidebar locked">
        <div class="logo_items flex">
            <span class="nav_image">
                <img src="../logo.png" alt="logo_img" />
            </span>
            <span class="logo_name">GamingLab</span>
            <i class="bx bx-lock-alt" id="lock-icon" title="Unlock Sidebar"></i>
            <i class="bx bx-x" id="sidebar-close"></i>
        </div>
        <div class="menu_container">
            <div class="menu_items">
                <ul class="menu_item">
                    <div class="menu_title flex">
                        <span class="title">Dashboard</span>
                        <span class="line"></span>
                    </div>
                    <li class="item">
                        <a href="users" class="link flex">
                            <i class="bx bx-home-alt"></i>
                            <span>Manage Users</span>
                        </a>
                    </li>
                </ul>
                <ul class="menu_item">
                    <div class="menu_title flex">
                        <span class="title">Forum</span>
                        <span class="line"></span>
                    </div>
                    <li class="item">
                        <a href="{{ route('approvePage') }}" class="link flex">
                            <i class="bx bx-grid-alt"></i>
                            <span>Manage Forum</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="{{ route('addCategory') }}" class="link flex">
                            <i class="bx bx-cloud-upload"></i>
                            <span>New Categories</span>
                        </a>
                    </li>
                </ul>
                <ul class="menu_item">
                    <div class="menu_title flex">
                        <span class="title">GameScore</span>
                        <span class="line"></span>
                    </div>
                    <li class="item">
                        <a href="{{ route('showEz') }}" class="link flex">
                            <i class="bx bx-game"></i>
                            <span>Easy Game</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="{{ route('showNo') }}" class="link flex">
                            <i class="bx bx-game"></i>
                            <span>Normal Game</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="{{ route('showHa') }}" class="link flex">
                            <i class="bx bx-game"></i>
                            <span>Hard Game</span>
                        </a>
                    </li>

                </ul>
                <ul class="menu_item">
                    <div class="menu_title flex">
                        <span class="title">Setting</span>
                        <span class="line"></span>
                    </div>
                    <li class="item">
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                            class="link flex">
                            <i class="bx bx-log-out"></i>
                            <span>Logout</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
            <div class="sidebar_profile flex">
                <span class="nav_image">
                    <img src="../customer service.png" alt="logo_img" />
                </span>
                <div class="data_text">
                    <span class="name">{{ Auth::user()->name }}</span>
                    <span class="email">{{ Auth::user()->email }}</span>
                </div>
            </div>
        </div>
    </nav>

    <main>
        @yield('admin')

    </main>

</body>

</html>
