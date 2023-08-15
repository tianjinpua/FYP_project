@extends('layouts.adminNav')

@section('admin')
    <div class="card mt-4" align="center" style="margin:120px;">
        <div class="card-header">
            <h2 style="margin-bottom:-90px;"><u>Create New Category</u></h2>
        </div>
        <div class="card-body">
            <a href="{{ url('admin/categories/create') }}" class="btn btn-success btn-sm" title="Add New Category"><button>
                    Add New</button>
            </a>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th align="center"><u>Id</u></th>
                            <th align="center"><u>Name</u></th>
                            <th align="center"></th>
                            <th align="center"></th>
                            <th align="center"><u>Edit</u></th>
                            <th align="center"><u>Delete</u></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($categories as $new)
                            <tr>
                            </tr>
                            <tr>
                            </tr>
                            <tr>
                            </tr>
                            <tr>
                                <td align="center">{{ $loop->iteration }}</td>
                                <td align="center">{{ $new->name }}</td>
                                <td></td>
                                <td></td>
                                <td align="center">
                                    <a href="{{ url('/admin/categories/' . $new->id . '/edit') }}" title="Edit Post"><button
                                            class="btn btn-primary btn-sm">Edit</button></a>
                                </td>
                                <td align="center">

                                    <form method="POST" action="{{ url('/admin/categories' . '/' . $new->id) }}"
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
            </div>
        </div>
    </div>
@endsection
