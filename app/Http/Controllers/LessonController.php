<?php

namespace App\Http\Controllers;

use App\Lesson;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Course;

class LessonController extends Controller
{
    protected $course;
    protected $lesson;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Course $course, Lesson $lesson)
    {
        $this->course = $course;
        $this->lesson = $lesson;
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($lesson_name)
    {;
        $lesson_name = str_replace('-',' ',$lesson_name);
        $lesson = \DB::table('lessons')->where('lesson_name', $lesson_name)->first();
        $course = $this->course->find($lesson->course_id);
        $course_name = $course->course_name;

        return view('lesson',['lesson'=>$lesson,'course_name'=>$course_name]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
