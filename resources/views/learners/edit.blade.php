@extends('base')

@section('content')

<div class="modal fade" id="deleteLearnerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteLearnerModalLabel">Delete Learner</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                {!! Form::open(['url'=>'/learners', 'method'=>'delete']) !!}
            <div class="modal-body">
                Are you sure you want to delete this learner?
                {!! Form::hidden('user_id', $learners->id) !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-danger btn-sm">Delete Learner</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

<br>

<h2>Edit Learner: [{{ $learners->id }}]</h2>

<div class="row">
    <div class="col-md-5">

        {!!  Form::model($learners, ['url'=>"/learners/$learners->id", 'method'=>'patch']) !!}

        @include('learners._form')

        <div class="form-group">
            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteLearnerModal">
                Delete Learner
            </button>
            <button class="btn btn-primary float-right">Update Learner</button>
        </div>

        {!!  Form::close() !!}

    </div>
    <div class="col-md-7">

        @include('errors')
    </div>
</div>

@endsection