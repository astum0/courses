<?php

namespace App\Http\Controllers;

use App\Models\course;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function showOrCategory($id)
    {
        $course = course::where('is_active', true)->where('category_id', $id)->get();

        return view('web.pages.courses-list', [
            'course' => $course,
        ]);
    }
    public function details($id)
    {
        $details = course::where('is_active', true)->where('id', $id)->first();
        return view('web.pages.course-detail', [
            'details' => $details,
        ]);
    }
}
