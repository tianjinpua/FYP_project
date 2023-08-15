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
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="200px;"><br><a href="{{ route('approvePage') }}"><center>Default Post</center></a><br></th>
                    </tr>
                    <tr><td style="background-color:#eef5fe;"></td></tr>
                    <tr>
                        <th width="200px;"><br><a href="{{ route('approvePage') }}"><center>Approved Post</center></a><br></th>
                    </tr>
                    <tr><td style="background-color:#eef5fe;"></td></tr>
                    
                    <tr>
                        <th width="200px;"><br><a href="{{ route('approvePage') }}"><center>Declined Post</center></a><br></th>
                    </tr>
                </thead>
            </table>
        </div>
        </center>
    </div>
@endsection
