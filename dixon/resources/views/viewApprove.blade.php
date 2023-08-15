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
    <title>Approved Page</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="assets/css/Forum.css">
    <style>
        h1 {
            color: white;
        }

        body {
            background-color: black;
        }
    </style>

    <title>Admin Approve Page</title>
        <link rel='icon' href="{{ asset('logo.png') }}">

</head>

<body>


    @CSRF
    <div class="container" style="max-width: 100%;">
    
        <div class="row">
        <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4"></div>
                    <center>
                        <br>
                        <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Approved Comment</h1>
                        
                    </center>
                    <div class="col-md-2"></div>
                   
                    <div class="col-md-2">

                        <br>
                        <a href="{{route('approvePage')}}" class="btn btn-success"
                            style="padding:10px 20px; border-radius:30px; color:white;">Forum History</a>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-12"><br>
                <table class="table table" id="acc">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Image</td>
                            <td>Description</td>
                            <td>Category</td>
                            <td>Time Created</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td><img src="{{ asset('images/') }}/{{ $product->image }}" alt="" imagefluid
                                        width="250"></td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->idName}}</td>
                                <td>{{ $product->created_at }}</td>
                                <td>
                                    <a href="{{ route('declineProduct', [$product->id]) }}"
                                        class="btn btn-warning btn-xs"
                                        onClick="return confirm('Are you sure to delete this comment?')">Delete</a>
                                </td>
                            </tr>
                        @endforeach

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
</body>

</html>
