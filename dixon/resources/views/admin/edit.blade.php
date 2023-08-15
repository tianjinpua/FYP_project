@extends('layouts.nav')

@section('forum')
    <div class="card" style="margin:20px;">
        <div class="card-header">Edit User</div>
        <div class="card-body">
            <form action="{{ url('admin/users') }}" method="post">
                {!! csrf_field() !!}
                @method('PATCH')
                <input type="hidden" name="id" id="id" value="{{ $users->id }}" id="id" />
                <label>Role</label><br>
                <input type="text" name="type" id="type" value="{{ $users->type }}" class="form-control">

                <input type="submit" value="Update" class="btn btn-success"><br>
            </form>

        </div>

    @stop
