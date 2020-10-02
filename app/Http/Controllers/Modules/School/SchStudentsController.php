<?php

namespace App\Http\Controllers\Modules\School;

use Illuminate\Http\Request;
use App\Models\Modules\School\SchStudents;
use App\Http\Controllers\Controller;
use App\Models\Modules\School\SchSubjectStudents;

class SchStudentsController extends Controller
{
    public function index()
    {
        return view('school/add-student');
    }

    public function store(Request $request)
    {
        $student = new SchStudents();
        $student->name=$request->name;
        $student->phone=$request->phone;
        $student->save();

        $subjectStudents = new SchSubjectStudents();
        $subjectStudents->student_id=$student->id;
        $subjectStudents->subject_id=$request->subject_id;
        $subjectStudents->save();
        return back()->with('student_created ', 'Estudiante registrado');
    }
}
