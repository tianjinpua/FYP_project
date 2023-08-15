@extends('layouts.app')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAMING LAB</title>

    <link rel="stylesheet" href="home.css">
    <link rel='icon' href="{{ asset('images/logo.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

    <body class="antialiased">
        <div class="Section_top" style="margin-top:0px;">


            <div align="center"
                class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white"
                style="margin-top:10px;">

                @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                        @auth
                            <a href="{{ url('/home') }}"
                                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"></a>
                        @else
                            <a href="{{ route('login') }}" class="animated-button7">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="animated-button1">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                <h3 style="margin-left:-1200px; margin-top:32px; font-size:30px;">Gaming <span>Lab </span>
                    <br> E-SPORT
                </h3>

            </div>
        </div>

        <hr color="#17202A" style="margin:0px;">
        <hr color="#1C2833" style="margin:0px;">
        <hr color="#212F3D" style="margin:0px;">
        <hr color="#273746" style="margin:0px;">

        <div class="intro">
            <div class="Introduction">

                <h2 align="center" style="font-size:50px;">Introduction</h2>
                <div class="hidden">
                    <img src="{{ asset('logo.png') }}" width="500" imagefluid style="margin-left:400px">

                    <div class="container" style="margin-left:950px; margin-top:-420px">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                        <h5>Welcome to Gaming Lab, your ultimate hub for all things gaming! </h5>
                        <h5>Whether you're an avid gamer or just starting your gaming journey, 
                        <h5>we've got you covered with our two exciting features: </h5>
                        </h5>
                        <h5>Gaming Test and Forum Page.</h5>
                    </div>
                </div>
                <br><br>
                <br><br>
                <br><br>
                <br><br>
                <br><br>
                <br>


            </div>
        </div>
        <hr color="#273746" style="margin:0px;">
        <hr color="#212F3D" style="margin:0px;">
        <hr color="#1C2833" style="margin:0px;">
        <hr color="#17202A" style="margin:0px;">


        <div class="forum" style="background-color:#17202A;">
            <div class="FORUM">
                <h2 align="center" style="font-size:50px; margin-top:0px;"><br>Forum</h2>
                <div class="hidden" align="center">
                    <div class="container" style="width:1000px; color:white;">
                        <br>
                        A forum is an online platform or website where people can engage in discussions, share information,
                        and
                        exchange ideas on various topics. It provides a virtual space for individuals with similar interests
                        to
                        come together and interact with each other.
                        <br>
                        <br>

                        In a forum, users can create posts or topics to initiate discussions. Other users can then respond
                        to
                        these posts by adding comments or replies. This threaded structure allows for organized and
                        structured
                        conversations.
                        <br>
                        <br>

                        One of the key features of a forum is user participation. Registered users can create accounts and
                        become members of the forum community. They can customize their profiles. This helps to establish an
                        online identity and fosters a sense of community among forum members.
                        <br>
                        <br>

                        Forums typically have moderators who oversee the discussions and ensure that the forum rules and
                        guidelines are followed. Moderators can delete inappropriate posts, resolve conflicts, and maintain
                        a
                        respectful and welcoming environment for all participants.
                        <br>
                        <br>

                        The benefits of participating in a forum include gaining knowledge, seeking advice, sharing
                        experiences,
                        networking with like-minded individuals, and engaging in meaningful conversations.
                        <br>
                        <br>

                        Overall, a forum serves as an interactive platform that promotes discussion, collaboration, and
                        knowledge sharing among its members. It facilitates the exchange of ideas and fosters a community
                        where
                        individuals can connect with others who share similar interests or have expertise in specific areas.
                        <br>
                        <br>
                    </div>
                </div>
                <center><a href="{{ url('forumPage') }}" class="animated-button1">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        FORUM
                    </a></center>
                <br>
                <br>

                <hr color="#17202A" style="margin:0px;">
                <hr color="#1C2833" style="margin:0px;">
                <hr color="#212F3D" style="margin:0px;">
                <hr color="#273746" style="margin:0px;">
            </div>
        </div>

        <h2 align="center" style="font-size:50px;">Game Test</h2>
        <center>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Ywxu9LQAj04"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
            <br>
            <br>
            <br>
            <div class="hidden" align="center">
                <div class="gtest">
                    <div style="width:1000px; color:white;">
                        The primary aim of Game Test is to provide gamers with a dedicated training environment to
                        enhance
                        their
                        performance in first-person shooter (FPS) games. By simulating realistic shooting scenarios and
                        offering
                        precise measurement and analysis tools, Game Test enables players to practice and improve their
                        aim
                        mechanics in a controlled and measurable way.
                    </div>
                </div>
            </div>
            <br>
            <a href="gameTest" class="animated-button1">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Game Test
            </a>
        </center>
        <br>
        <br>




        </div>
        </div>
        </div>
    </body>
    <script>
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                console.log(entry)
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                } else {
                    entry.target.classList.remove('show');
                }
            });
        });

        const hiddenElements = document.querySelectorAll('.hidden');
        hiddenElements.forEach((el) => observer.observe(el));
    </script>

    </body>
