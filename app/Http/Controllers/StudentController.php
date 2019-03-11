<?php

namespace App\Http\Controllers;

use App\Group;
use App\Http\Requests\CreateStudentPageRequest;
use App\Http\Requests\CreateStudentRequest;
use App\Http\Requests\DeleteStudentByIdRequest;
use App\Http\Requests\GetStudentByIdRequest;
use App\Http\Requests\GetStudentsRequest;
use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    /**
     * @param GetStudentsRequest $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getStudents(GetStudentsRequest $request)
    {
        $students = Student::all();

        return view('all-students', ['students' => $students]);
    }

    /**
     * @param CreateStudentPageRequest $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function createStudentPage(CreateStudentPageRequest $request)
    {
        $groups = Group::all();

        return view('create-student', ['groups' => $groups]);
    }

    /**
     * @param CreateStudentRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function createStudent(CreateStudentRequest $request)
    {
        $student = Student::create(
            [
                'name' => $request->name,
                'surname' => $request->surname,
                'email' => $request->email,
                'group_id' => $request->group,
                'birthday' => $request->birthday
            ]
        );

        return $student ? redirect("/students/{$student->id}") : redirect('/students');
    }

    /**
     * @param DeleteStudentByIdRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function deleteStudentById(DeleteStudentByIdRequest $request)
    {
        $student = Student::where('id', '=', $request->id)->first();

        return $student->delete() ? redirect("/students") : redirect('/');
    }

    public function getStudentById(GetStudentByIdRequest $request)
    {
        $student = Student::where('id', '=', $request->id)->with('group')->first();

        return view('student', ['student' => $student]);
    }
}
