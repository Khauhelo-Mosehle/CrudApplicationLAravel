<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $student;
    public function __construct()
    {
        $this->student = new Student();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response['students'] = $this->student->all();
        return view('pages.index')->with($response);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->student->create($request->all());
        return redirect()->back();
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
        $response['student'] = $this->student->find($id);
        return view('pages.edit')->with($response);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $student = $this->$student->find($id);
        // $student->update(array_merge($student->toArray(), $request->toArray()));
        // return redirect('student');

        $student = $this->student->find($id);
        if ($student) {
            $student->update($request->all());
            return redirect('student')->with('success', 'Student updated successfully');
        }

        return redirect('student')->with('error', 'Student not found');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = $this->student->find($id);
        $student->delete();
        return redirect('student');

    }
}
