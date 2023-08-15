@extends('layouts.adminNav')



<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Approve Page</title>
</head>

@section('admin')
    <br>
    <div class="container">
        <center>
            <div class="container" align="center" style="margin-top:100px;">
                <h2 style="margin-bottom:-90px;"><u>Game Test Normal Mode</u></h2>
                <table class="table table-bordered">

                    <tbody>
                        <tr>
                            <td><b>User Name</b></td>
                            <td><b>Score</b></td>
                        </tr>
                    

                        @foreach ($scoreNo->sortByDesc('score') as $news)
                            <tr>
                                <td>{{ Auth::user()->name }}</td>
                                <td>{{ $news->score }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </center>
    </div>
@endsection
