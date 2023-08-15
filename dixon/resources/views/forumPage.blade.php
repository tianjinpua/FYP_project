@extends('layouts.nav')

@section('forum')

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



        @CSRF
        <div class="container" id="ctn">
            <div class="container-fluid" id="forum">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-1"></div>

                        <div class="col-md-4"></div>
                        <center>
                            <br>
                            <h1>FORUM PAGE</h1>
                            <br>
                        </center>
                        <div class="col-md-2"></div>
                        <div class="col-md-3" align="center">

                            <br>
                            <a href="{{ url('addProduct') }}" class="btn btn-success"
                                style="padding:10px 50px; border-radius:30px; color:white;">Add
                                Post</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3" align="center">
                        <form class="table table-bordered" id="show">
                            <br>
                            <p align="center" style="font-size:20px;"><b><u>Prohibited Matters</u></b></p>



                            <li>Abusive comments</li>
                            <li>Pornography</li>
                            <li>Malicious URLs</li>
                            <li>Untrue comments</li>
                            <li>Induced consumption</li>
                            <li>Cyberbullying</li>

                            <br>
                            <ul>
                                If have any problems pls contact us<br>
                                Tel: +6019-949 6632
                            </ul>

                        </form>
                        <br>

                        <form class="table table-bordered" id="show1">
                            <br>
                            <p align="center" style="font-size:20px;"><b><u>Categories</u></b></p>

                            <a href="{{ route('showProduct') }}" class="btn catogories"
                                style="background:#CFD8DC; padding:5px 10px; margin:5px; border-radius:20px; ">All</a>
                            @foreach ($categories as $category)
                                <a href="{{ route('printCategoryProduct', ['id' => $category->id]) }}"
                                    class="btn catogories"
                                    style="background:#CFD8DC; padding:5px 10px; margin:5px; border-radius:20px;">{{ $category->name }}</a>
                            @endforeach
                            <br>
                            <br>
                        </form>
                        <br>
                        <br>

                        <h3 style="color:white;"><u>Our Feedback</u></h3>
                        <br>
                        <div class="container" id="feedback">
                            <div class="card">
                                <div class="content">
                                    <h3>NEXTRIFT</h3>
                                    <p>Warmly welcomes new users and has a positive and constructive community
                                        atmosphere.
                                        In addition, the administrators and moderators are also very friendly, promptly
                                        responding to and resolving any issues raised by users.</p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="container" id="feedback">
                            <div class="card">
                                <div class="content">
                                    <h3>Zing Gadget</h3>
                                    <p>This website is a great aiming game with extremely accurate controls. The
                                        gameplay is
                                        smooth and intuitive, making it easy to hit your targets. Overall, it's an
                                        excellent
                                        game for players of all skill levels.</p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="container" id="feedback">
                            <div class="card">
                                <div class="content">
                                    <h3>The Star</h3>
                                    <p>This website has excellent products that are delivered safely and quickly. The
                                        quality of the products is top-notch, and they are well-packaged to ensure they
                                        arrive in perfect condition.</p>
                                </div>
                            </div>
                        </div>



                    </div>
                    <div class="col-md-6" id="middle">
                        <table class="table table-bordered" id="blee">
                            <tbody>

                                @foreach ($products as $product)
                                    <tr>
                                        <td>
                                            <p style="text-align:left"><img src="{{ asset('logo.png') }}" width="40"
                                                    imagefluid style="border-radius:30px;"> Gaming
                                                Lab

                                            </p>
                                            <a href="{{ route('home') }}">#GAMING LAB 00{{ $product->id }} &nbsp;&nbsp;
                                            </a>【{{ $product->created_at }}】<br><br>
                                            {{ $product->description }}<br>

                                            <img src="{{ asset('images/') }}/{{ $product->image }}" alt=""
                                                imagefluid width="700"><br>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>


                    <div class="col-md-3" align="center">


                        <div class="scroll-image">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <a href="https://www.facebook.com/Southern.Esport.Club"><img
                                                src="{{ asset('wangzherongyao.jpg') }}" alt="First slide" width="380"
                                                height="550"
                                                style="padding:10px 10px; margin:-10px; border-radius:20px;"></a>

                                    </div>
                                    <div class="carousel-item">
                                        <a href="https://www.facebook.com/SUCMIDNIGHT"><img
                                                src="{{ asset('FB_IMG_1691989119640.jpg') }}" alt="Second slide"
                                                width="380" height="550"
                                                style="padding:10px 10px; margin:-10px; border-radius:20px;">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="https://www.facebook.com/SAOSUC"><img src="{{ asset('SAO.jpg') }}"
                                                alt="Third slide" width="380" height="550"
                                                style="padding:10px 10px; margin:-10px; border-radius:20px;"></a>

                                    </div>
                                </div>


                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            <br>
                            <br>
                            <img class="" href="{{ route('showProduct') }}" src="{{ asset('logo.png') }}"
                                width="345" imagefluid>
                            <br>
                            <br>
                            <br>




                            </a>
                        </div>

                    </div>
                </div>
                <br>
                <br>
                <br>
            </div>

        </div>





        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
        <script>
            document.querySelector("#show-login").addEventListener("click", function() {
                document.querySelector(".popup").classList.add("active");
            });
            document.querySelector(".popup .close-btn").addEventListener("click", function() {
                document.querySelector(".popup").classList.remove("active");
            });

            document.querySelector("#show-register").addEventListener("click", function() {
                document.querySelector(".popupp").classList.add("active");
            });
            document.querySelector(".popupp .close-btn").addEventListener("click", function() {
                document.querySelector(".popupp").classList.remove("active");
            });
        </script>
    @endsection
