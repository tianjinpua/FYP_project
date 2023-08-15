@extends('layouts.adminNav')

@section('admin')

    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <style>
    body{
        background: #eef5fe;
    }
    </style>

    <div class="container" align="center" style="margin-top:100px;">
        <h2 style="margin-bottom:-90px; margin-left:150px;"><u>View Users</u></h2>


        <table class="table table-bordered">
            <thead>
                <tr>
                    <td align="center"><b>Id</b></td>
                    <td align="center"><b>User Name</b></td>
                    <td align="center"><b>Email</b></td>
                    <td align="center"><b>Type</b></td>

                </tr>
            </thead>

            <tbody>
                @foreach ($users as $item)
                    <tr>
                        <td align="center">{{ $item->id }}</td>
                        <td align="center">{{ $item->name }}</td>
                        <td align="center">{{ $item->email }}</td>
                        <td align="center">{{ $item->type }}</td>

                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
@endsection
