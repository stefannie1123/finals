@extends('base')

@section('content')

<br>

<h2>Create New User</h2>

<div class="row">
    <div class="col-md-5">

        {!!  Form::open(['url'=>'/users', 'method'=>'post']) !!}

        @include('users._form')

        <div class="form-group">
            <button class="btn btn-primary float-right">Create User</button>
        </div>

        {!!  Form::close() !!}

    </div>
    <div class="col-md-7">

        @include('errors')
    </div>
</div>

@endsection