@extends('base')

@section('content')

@include('info')
<br>

<div class="float-right">
    <a href="{{url('/learners/create')}}" class="btn btn-primary btn-sm">
        Add New Learner
    </a>
</div>

<h1>List of Learners</h1>

<table class="table table-bordered table-striped table-sm">
    <thead class="bg-secondary">
        <tr>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Level</th>
            <th>Status</th>
            <th>Option</th>
        </tr>
    </thead>

    <tbody>
        @foreach($learners as $lrn)

            <tr>
                <td>{{$lrn->lname}}</td>
                <td>{{$lrn->fname}}</td>
                <td>{{$lrn->level}}</td>
                <td>{{$lrn->status}}</td>
                <td>
                    <a href="{{url('/learners/edit', ['lname'=>$lrn]) }}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-check"></i> Edit
                    </a>
                </td>
            </tr>

        @endforeach
    </tbody>
</table>


@stop