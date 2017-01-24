<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use Session;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // create a variable and store all the blog posts in it from the database
        $courses=Course::all();
        //return a view and pass in the above variable
        return view('courses.index')->withCourses($courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the data
        $this->validate($request, array(
          'title' => 'required|max:250',
          'body' => 'required'
        ));
        //store in database
        $course = new Course;

        $course->title=$request->title;
        $course->body=$request->body;

        $course->save();
        Session::flash('success', 'Kursi u shtua me sukses!');
        //redirect to another page
        return redirect()->route('courses.show', $course->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::find($id);
        return view('courses.show')->withCourse($course);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      // find the course in the database and save as a variable
      $course =Course::find($id);
      //return the view and pass in the var we previously saved
      return view('courses.edit')->withCourse($course);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      // Validate the data
      $this->validate($request, array(
        'title' => 'required|max:250',
        'body' => 'required'
      ));
      //Save the data to the database
      $course=Course::find($id);

      $course->title=$request->input('title');
      $course->body=$request->input('body');

      $course->save();
      //set flash data with success message
      Session::flash('success', 'Ndryshimet u ruajtën me sukses.');
      // redirect with the flash data to posts.show
      return redirect()->route('courses.show', $course->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $course=Course::find($id);
      $course->delete();
      Session::flash('success', 'Kursi u fshi me sukses.');
      return redirect()->route('courses.index');
    }
}
