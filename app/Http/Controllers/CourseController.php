<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function test()
    {
        return response()->json([
            "message" => "kas"
        ], 201);
    }

    public function store(Request $request)
    {
        $validate = $request->validate
        ([
            "title" => "required|max:255",
            "text" => "required",
            "views" => "required|integer"
        ]);
    }
    
    public function index()
    {  
        return response()->json
        (Course::all());  
    }
}
