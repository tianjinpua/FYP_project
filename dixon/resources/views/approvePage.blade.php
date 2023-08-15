@extends('layouts.adminNav')
@section('admin')

    <head>
        <!-- Required meta tags -->


        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Approve Page</title>



        <title>Admin Approve Page</title>
        <link rel='icon' href="{{ asset('logo.png') }}">

        <style>
            body {
                background: #eef5fe;
            }
        </style>

    </head>


    @csrf
    <div class="container">

        <div class="row">
            <div class="col-sm-12">

                <table class="table table" id="acc">
                    <thead>
                        <tr>
                            <td align="center"><b>ID</b></td>
                            <td align="center"><b>Image</b></td>
                            <td align="center"><b>Description</b></td>
                            <td align="center"><b>Category</b></td>
                            <td align="center"><b>Time Created</b></td>
                            <td align="center"><b>Role</b></td>
                            <td align="center" style="width:210px;"><b>Action</b></td>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td><img src="{{ asset('images/') }}/{{ $product->image }}" alt="" imagefluid
                                        width="250"></td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->idName }}</td>
                                <td>{{ $product->created_at }}</td>
                                <td>{{ $product->role }}</td>
                                <td><a href="{{ route('approveProduct', [$product->id]) }}"
                                        class="btn btn-warning btn-xs">Approve</a>
                                    <a href="{{ route('declineProduct', [$product->id]) }}" class="btn btn-warning btn-xs"
                                        onClick="return confirm('Are you sure to decline this comment?')">Decline</a>
                                </td>
                            </tr>
                        @endforeach
                </table><br><br>
            </div>
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
@endsection
