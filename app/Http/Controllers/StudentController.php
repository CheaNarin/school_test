<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = Student::paginate(5);
        return view('student.index', compact('student'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
             $student = Student::all();
        return view('student.create', compact('student'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_id'   => 'required|string|max:50|unique:students,student_id',
        'first_name'   => 'required|string|max:100',
        'last_name'    => 'required|string|max:100',
        'gender'       => 'required|in:Male,Female',
        'date_of_birth'=> 'required|date',
        'phone'        => 'required|string|max:20',
        'address'      => 'required|string|max:255',
        'email'        => 'required|email|max:100|unique:students,email',
        ]);
         Student::create($validated);

    return redirect()->route('student.index')
                     ->with('success', 'Student added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::findOrFail($id);
        return view('student.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Student::findOrFail($id);

        $validated = $request->validate([
            'student_id'   => 'required|string|max:50',
            'first_name'   => 'required|string|max:100',
            'last_name'    => 'required|string|max:100',
            'gender'       => 'required|in:Male,Female',
            'date_of_birth'=> 'required|date',
            'phone'        => 'required|string|max:20',
            'address'      => 'required|string|max:255',
            'email'        => 'required|email|max:100',
        ]);

        $student->update($validated);

        return redirect()->route('student.index')
                         ->with('success', 'Student updated successfully!');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
         //
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route('student.index')->with('message','Student information delete successfully');
    }
}