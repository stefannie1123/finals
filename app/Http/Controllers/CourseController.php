<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CourseController extends Controller
{
    public function index(){
        $courses = Course::get();
        return view('courses.index', ['courses'=>$courses]);
    }

    public function create(){
        return view('courses.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'description' => 'required',
            'start' => 'required|before:end',
            'end' => 'required|after:start',
            'tags' => 'required',
            'instructor_id' => 'required|numeric',
        ]);

        Course::create($request->all());

        return redirect('/courses')->with('info', 'New course has been Added.');
    }

    public function edit($id){
        $courses = Course::find($id);
        return view('courses.edit', ['courses'=>$courses]);
    }

    public function update(Request $request, $id){
        $courses = Course::find($id);

        $courses->update($request->all());

        return redirect('/courses')->with('info', "Course: $courses->id has been updated.");
    }

    public function rules(){
        return [
            'name'  => 'required',
            'description'  => 'required',
            'start'  => 'required|before:end',
            'end'  => 'required|after:start',
            'tags'  => 'required',
            'instructor_id'  => 'required|numeric',
        ];
    }

    public function delete(Request $request) {
        $courseId = $request['course_id'];
        $courses = Course::find($courseId);
        $name = $courses->course_id;

        $courses->delete();

        return redirect('/courses')->with('info', "Course $name has been deleted");
    }
}

