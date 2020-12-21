@extends('base')

@section('content')

<br> 
    <div class="container">

        <h2>Create New Courses</h2>

        <div class="row">
            <div class="col-md-5">
            
                {!!  Form::open(['url'=>'/courses', 'method'=>'post']) !!}

                    @include('courses._form')

                    <div class="form-group">
                        <button class="btn btn-primary btn-sm float-right">Create Course</button>
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