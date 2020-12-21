<div class="form-group">
    {{Form::label('name','Course Name')}}
    {{Form::text('name', null, ['class'=>'form-control'])}}
</div>

<div class="form-group">
    {{Form::label('description','Description')}}
    {{Form::text('description', null, ['class'=>'form-control'])}}
</div>

<div class="form-group">
    {{Form::label('start','Start')}}
    {{Form::date('start', null, ['class'=>'form-control'])}}
</div>

<div class="form-group">
    {{Form::label('end','End')}}
    {{Form::date('end', null, ['class'=>'form-control'])}}
</div>

<div class="form-group">
    {{Form::label('tags','Tags')}}
    {{Form::text('tags', null, ['class'=>'form-control'])}}
</div>

<div class="form-group">
    {{Form::label('instructor_id','Instructor')}}
    {{Form::select('instructor_id',
    \App\Instructor::list(),
    null, ['class'=>'form-control', "placeholder"=>'Select Instructor'])}}
</div>