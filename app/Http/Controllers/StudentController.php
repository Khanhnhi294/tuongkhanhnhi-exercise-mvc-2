<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class StudentController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function getStudents(){
        $students=Student::all();
        return $students;
    }
    public function showStudents(){
        $students=Student::all();
        return view('students',['students'=>$students]);
    }
   public function getStudentById($id){
        $students=Student::all();
        foreach($students as $row){
            if($row['id']==$id){
                return $row;
            }
        }
        return 'Not found';
   }
}