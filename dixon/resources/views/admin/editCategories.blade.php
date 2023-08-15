@extends('layouts.nav')

@section('forum')
    <div class="card" style="margin:20px;">
        <div class="card-header">Edit Post</div>
        <div class="card-body">

            <form action="{{url('admin/categories/' .$categories->id)}}" method="post">
                {!! csrf_field() !!}
                @method('PATCH')
                <input type="hidden" name="id" id="id" value="{{ $categories->id }}" id="id" />
                <label>Name</label><br>
                <input type="text" name="name" id="name" value="{{ $categories->name }}" class="form-control">
                <input type="submit" value="Update" class="btn btn-success"><br>
            </form>

        </div>

    @stop
