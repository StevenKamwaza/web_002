<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TeacherController extends Controller
{

    public function index(){
        $teachers = Teacher::all();

        $data = [
            'status' => 200,
            'teachers' => $teachers,
        ];
        if ($teachers->count() > 0) {
            return response()->json($data, 200);
        } else {
            return response()->json([
                'status' => 404,
                'message' => "No records found"
            ], 404);
        }
    }

    //saveTeacher
    public function saveTeacher(Request $request){
        $validator = Validator::make(
            $request->all(), [
                'firstName' =>'required |string| max:191',
                'lastName' =>'required |string: max:191',
                'email' =>'required | email|max:191',
                'courseNumber' =>'required |string: max:191',
                'phone ' =>'required | digits:10',
            ]
        );
    }
}
