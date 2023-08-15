@extends('layouts.nav')

@section('forum')
<div class="container">
    <div class="row" style="margin:20px;">
    <div class="col-2"></div>
        <div class="col-8">

            <div class="card" style="margin:20px;">
                <div class="card-header">Create New Posts</div>
                <div class="card-body">

                    <form action="{{ url('admin/categories') }}" method="post" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        <label>Name</label><br>
                        <input type="text" name="name" id="name" class="form-control"><br>
                        <input type="submit" value="Save" class="btn btn-success"><br>
                    </form>
                </div>
            </div>
            <button href="{{ url('admin/categories') }}">BACK</button>

        </div>
    </div>
</div>
@stop
