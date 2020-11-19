<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //Read All
    public function allStudent()
    {
        return Student::all();
    }
    
    public function getStudent($id)
    {
        return Student::find($id);
    }

    public function newStudent()
    {
        $student = new Student();
        $student->name = '9newName';
        $student->email = 'newEmail@mail.com';
        $student->phone = 'newPhone';
        $student->save();

        return $student->id;
    }
}
