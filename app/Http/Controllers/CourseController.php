<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;


class CourseController extends Controller
{
    // index
    public function index()
    {
        // recuperar registros
        $courses = Course::orderByDesc('created_at')->paginate(10);
        return view('courses.index', ['courses' => $courses]);
    }

    // show
    public function show(Request $request, Course $course)
    {

        // $course = Course::where('id', $request->id)->first();
        return view('courses.show', ['course' => $course]);
    }

    //create
    public function create()
    {
        return view('courses.create');
    }

    //store - Cadastrar no banco de dados
    public function store(Request $request)
    {

        Course::create($request->all());

        return redirect()->route('course.index')->with('success', "Curso $request->name cadastrado com sucesso!");
    }

    //edit
    public function edit(Request $request, Course $course)
    {
        // $course = Course::where('id', $request->course)->first();
        //dd($course);
        //return view('courses.show', ['course' => $course]);
        return view('courses.edit', ['course' => $course]);
    }

    //update
    public function update(Request $request, Course $course)
    {
        $course->update($request->all());
        return redirect()->route('course.index')->with('success', "Curso $request->name atualizado com sucesso!");
    }

    //destroy
    public function destroy(Request $request, Course $course)
    {
        //$course = Course::where('id', $request->id)->first();
        $course = Course::find($request->course)->first();
        $course->delete();
        
        return redirect()->route('course.index')->with('success', "Curso $course->name excluído com sucesso!");
    }
}