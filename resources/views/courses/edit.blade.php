@extends('base')

@section('content')

<div class="modal fade" id="deleteCourseModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteCourseModalLabel">Delete Course</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                {!! Form::open(['url'=>'/courses', 'method'=>'delete']) !!}
            <div class="modal-body">
                Are you sure you want to delete this course?
                {!! Form::hidden('course_id', $courses->id) !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-danger btn-sm">Delete Courses</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

<br>
    <div class="container">
        
        <h1>Edit Course: [{{ $courses->id }}]</h1>

        <div class="row">
            <div class="col-md-5">

                {!!  Form::model($courses, ['url'=>"/courses/$courses->id", 'method'=>'patch']) !!}

                @include('courses._form')

                <div class="form-group">
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteCourseModal">
                        Delete Course
                    </button>
                    <button class="btn btn-primary btn-sm float-right">
                        Update Course
                    </button>
                </div>

                {!!  Form::close() !!}

            </div>
            <div class="col-md-7">

                @include('errors')
            </div>
        </div>
    </div>
</div>
@endsection