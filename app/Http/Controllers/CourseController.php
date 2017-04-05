<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Course;
class CourseController extends Controller
{
    protected $course;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Course $course)
    {
        $this->course = $course;
    }
    public function index()
    {
        $courses = \DB::table('courses')->get();
        return view('index')->with('courses',$courses);
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
    public function show($name)
    {
        $course_name = $name;
        $courses = \DB::table('courses')->where('course_name', $course_name)->first();
        $course_id = $courses->id;
        $lessons = \App\Course::find($course_id)->lessons()->where('course_id', $course_id)->get();
        $course_name = strtolower(str_replace(" ", "", $course_name));
        if (!empty($lessons)) {
            switch ($course_name) {
                case "foundation":
                    return view('foundation')->with([
                        'lessons' => $lessons,
                        'course_name' => $course_name,
//                        'bundle' => $bundle,
//                        'id' => $id
                    ]);
                    break;
                case "skilled":
                    return view('skilled')->with([
                        'lessons' => $lessons,
                        'course_name' => $course_name,
//                        'bundle' => $bundle,
//                        'id' => $id
                    ]);
                    break;
                case "ats":
                    return view('ats')->with([
                        'lessons' => $lessons,
                        'course_name' => $course_name,
//                        'bundle' => $bundle,
//                        'id' => $id
                    ]);
                    break;
                case "professional":
                    return view('prof')->with([
                        'lessons' => $lessons,
                        'course_name' => $course_name,
//                        'bundle' => $bundle,
//                        'id' => $id
                    ]);
                    break;
                default:
                    return view('index');
            }

        }
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
