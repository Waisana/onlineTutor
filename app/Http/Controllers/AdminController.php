<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view("admin.dashboard.index");
    }

    public function assignment()
    {
        return view("admin.files.assignments");
    }

    public function teachers()
    {
        return view("admin.teachers.index");
    }

    public function students()
    {
        return view("admin.students.index");
    }

    public function classes()
    {
        return view("admin.classes.index");
    }

    public function subjects()
    {
        return view("admin.subjects.index");
    }

    public function files()
    {
        return view("admin.files.index");
    }

    public function userLogs()
    {
        return view("admin.logs.index");
    }

    public function profile()
    {
        return view("auth.profile");
    }

}
