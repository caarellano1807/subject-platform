<?php

namespace App\Http\Controllers\Modules\School;

use Illuminate\Http\Request;
use App\Models\Modules\School\SchSubjects;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SchSubjectsController extends Controller
{
    public function index()
    {
        return view('school/add-subject');
    }

    public function store(Request $request)
    {
        $student = new SchSubjects();
        $student->name=$request->name;
        $student->code=$request->code;
        $student->save();
        return back()->with('subject_created ', 'Asignatura registrada');
    }
}
