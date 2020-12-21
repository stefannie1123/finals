@extends('base')

@section('content')

<br>

<h2>Create New Learner</h2>

<div class="row">
    <div class="col-md-5">
    
        {!!  Form::open(['url'=>'/learners', 'method'=>'post']) !!}

            @include('learners._form')

            <div class="form-group">
                <button class="btn btn-primary float-right">Create Learner</button>
            </div>

        {!!  Form::close() !!}
    
    </div>

    <div class="col-md-7">
        @include('errors')
    </div>
</div>
@endsection