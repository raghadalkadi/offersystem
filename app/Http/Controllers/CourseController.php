<?php

namespace App\Http\Controllers;


use App\Course;
use App\Teacher;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::all();
        $courses = Course::all();
        return view ('courses.index')->with('courses', $courses)->with('teachers', $teachers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachers = Teacher::all();
        return view('courses.create')->with('teachers', $teachers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'teacher_id' => 'required',
            'price' => 'required',
            'description' => 'required',
            'hours' => 'required'
        ]);

        $course = Course::create([
            'name'=>$request->name,
            'teacher_id'=>$request->teacher_id,
            'description'=>$request->description,
            'hours'=>$request->hours,
            'price'=>$request->price,
            'slug'=> Str::slug($request->name)
        ]);
        return redirect()->route('courses');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $course = Course::where('slug', $slug)->first();
        return view('courses.show')->with('course', $course);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teachers = Teacher::all();
        $course = Course::find($id);
        return view('courses.edit')->with('course', $course)->with('teachers', $teachers);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $course = Course::find($id);

        $course->name = $request->name;
        $course->description = $request->description;
        $course->teacher_id = $request->teacher_id;
        $course->price = $request->price;
        $course->hours = $request->hours;

        $course->save();

        return redirect()->route('courses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();
        return redirect()->route('courses');
    }
}
