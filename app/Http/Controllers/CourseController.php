<?php

namespace App\Http\Controllers;

use App\Models\course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // public function index()
    // {
    //     $courses = course::where('is_active', true)->orderByDesc('created_at')->get();

    //     return view('sections.all-courses', [
    //         'course' => $courses
    //     ]);
    // }

    public function showOrCategory($id)
    {
        $courses = course::where('is_active', true)->where('category_id', $id)->get();

        return view('web.pages.courses-list', [
            'course' => $courses,
        ]);
    }
}
