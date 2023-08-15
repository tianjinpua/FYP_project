@extends('layouts.adminNav')

@section('admin')
    <div class="card mt-4" align="center" style="margin:120px;">
        <div class="card-header">
            <h2 style="margin-bottom:-90px;"><u>View Users Posts</u></h2>
        </div>
        <div class="card-body">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th align="center">Id</th>
                        <th align="center">User Name</th>
                        <th align="center">Description</th>
                        <th align="center">Edit</th>
                        <th align="center">Delete</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($posts as $new)
                        <tr>
                            <td><a href="">GAMING LAB #00{{ $loop->iteration }}</a></td>
                            <td>{{ Auth::user()->name }}</td>
                            <td>{{ $new->description }}</td>
                            <td><img src="{{ asset($new->image) }}" alt="" imagefluid width="500"></td>


                            <td>
                                <form method="POST" action="{{ url('/admin/forum' . '/' . $new->id) }}"
                                    accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn-danger btn-sm" title="Delete Post"
                                        onclick="return confirm("Confirm delete?")">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
@endsection
