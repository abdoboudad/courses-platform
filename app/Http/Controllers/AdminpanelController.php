<?php

namespace App\Http\Controllers;

use App\Models\Adminpanel;
use App\Models\Course;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class AdminpanelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::all();
        $courses = Course::all();
        $students = Student::all();
        return view('panel.main',compact('teachers','courses','students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('panel.courses');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Adminpanel $adminpanel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Adminpanel $adminpanel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Adminpanel $adminpanel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Adminpanel $adminpanel)
    {
        //
    }

    public function teachers(){
        $teachers = Teacher::all();
        return view('panel.teacher',compact('teachers'));
    }

    public function student(){
        $students = Student::all();
        return view('panel.student',compact('students'));
    }

    public function playlist(){
        $courses = Course::all();
        return view('panel.playlist',compact('courses'));
    }

    public function domain(){
        return view('panel.domain');
    }

    public function top(){
        return view('panel.top');
    }

    public function admins(){
        // $admin = Student::all();
        return view('panel.admin');
    }
}
