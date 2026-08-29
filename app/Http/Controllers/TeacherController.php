<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $teacher = Teacher::paginate(6);
        return view('teacher.index',compact('teacher'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teacher = Teacher::all();
        return view('teacher.create',compact('teacher'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Teacher $teacher)
    {
        //
        $validated = $request->validate([
        'teacher_id'   => 'required|string|max:50',
        'first_name'   => 'required|string|max:100',
        'last_name'    => 'required|string|max:100',
        'gender'       => 'required|in:Male,Female',
        'hire_date'    => 'required|date',
        'phone'        => 'required|string|max:20',
        'address'      => 'required|string|max:255',
        'email'        => 'required|email|max:100',
        'image'        => 'nullable|image|mimes:jpg,jpeg,png,gif,svg,webp|max:2048'
        ]);
        $imagePath = null;
        if($request->hasFile('image')){
            if($teacher->image && Storage::disk('public')->exists($teacher->image)){
                Storage::disk('public')->delete($teacher->image);
            }
            $imagePath = $request->file('image')->store('teachers','public');
            $validated['image'] = $imagePath;
        }
        Teacher::create($validated);
        return redirect()->route('teacher.index')->with('message','Teacher create successfully');
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
            $teacher = Teacher::findOrFail($id);
        return view('teacher.edit',compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
          $teacher = Teacher::findOrFail($id);
          $validated = $request->validate([
        'teacher_id'   => 'required|string|max:50',
        'first_name'   => 'required|string|max:100',
        'last_name'    => 'required|string|max:100',
        'gender'       => 'required|in:Male,Female',
        'hire_date'    => 'required|date',
        'phone'        => 'required|string|max:20',
        'address'      => 'required|string|max:255',
        'email'        => 'required|email|max:100',
        'image'        => 'nullable|image|mimes:jpg,jpeg,png,gif,svg,webp|max:2048'
        ]);
          if ($request->hasfile('image')) {
            if ($teacher->image) {
                Storage::disk('public')
                    ->delete($teacher->image);
            }
            
            $imagepath=$request->file('image')->store('teachers', 'public');
            $validated['image'] = $imagepath;
        }
        $teacher->update($validated);
        return redirect()->route('teacher.index')->with('message','Teacher create successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();
        return redirect()->route('teacher.index')->with('message','Teacher information delete successfully');
    }
}
