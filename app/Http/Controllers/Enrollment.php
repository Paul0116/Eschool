<?php

namespace App\Http\Controllers;
use App\Models\Students;
use Illuminate\Http\Request;

class Enrollment extends Controller
{
    //
    public function enrollment(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:students',
            'course' => 'required|string|max:255',
        ]);
    
        $enroll = new Students();
        $enroll->name = $validatedData['name'];
        $enroll->email = $validatedData['email'];
        $enroll->courses = $validatedData['course'];
        $enroll->date_of_birth = \Carbon\Carbon::now();
        $enroll->save();
    
        return redirect()->back()->with('success', 'Enrollment successful!');
    }

    public function getUser(){
        $students = Students::select('name', 'email', 'courses')->get();
        return view('dashboard', ['students' => $students]);
    }
}
