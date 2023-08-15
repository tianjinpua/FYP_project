@extends('layouts.nav')

@section('forum')
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Game Test</title>
    <link rel='icon' href="{{ asset('images/logo.png') }}">


    <link rel="stylesheet" href="../gametest.css">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../gametest.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Bootstrap CSS -->
</head>


    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br><br>
    <br>
    <br>
    <br>
    <br>
    <div class="container"><img src="{{ asset('images/game1.png') }}" width="500" imagefluid
            style="margin-top:-350px; margin-left:0px;">
        <br>
        <br>
        <Center>
            <a href="{{ url('gameTestEz') }}"><button>Easy Mode</button></a><br>
            <a href="{{ url('gameTestNo') }}"><button>Normal Mode</button></a><br>
            <a href="{{ url('gameTestHa') }}"><button>Hard Mode</button></a><br>
        </Center>
        <br>
        <br>
        <br>
        <br>
        <br>

    </div>
    <img src="{{ asset('images/game2.jpg') }}" width="1100" imagefluid style="margin-top:0px; margin-left:0px;">
    <br>
    <br>
@endsection
