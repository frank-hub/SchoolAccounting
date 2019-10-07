<?php

namespace App\Http\Controllers;

use App\Students;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Input;
use App\Parents;
class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Students::all();
        $last_reg = Students::latest()->first();
        $last =$last_reg->reg_name;
        $string=substr($last,3);
        return view('admin.students',compact('students','string'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'adm_date' => 'required',
            'reg_name' => 'required|unique:students',
            'gender' => 'required',
            'class' => 'required',
            'p_fname' => 'required',
            'p_lname' => 'required',
            'p_email' => 'required',
            'p_phone' => 'required',
            'id_no' => 'required',
        ]);

        $student = new Students;
        $student->fname = Input::get('fname');
            $student->lname = Input::get('lname');
            $student->adm_date = Input::get('adm_date');
            $student->reg_name = Input::get('reg_name');
            $student->gender = Input::get('gender');
            $student->class = Input::get('class');
            $student->save();
        return $this->parents($request);

    }

    public function parents(Request $request){

        $parents = new Parents;

        $parents->student_id = Input::get('reg_name');
        $parents->p_fname = Input::get('p_fname');
        $parents->p_lname = Input::get('p_lname');
        $parents->p_email = Input::get('p_email');
        $parents->p_phone = Input::get('p_phone');
        $parents->id_no = Input::get('id_no');
        $parents->p_occupation = Input::get('p_occupation');

        $parents->p1_fname = Input::get('p1_fname');
        $parents->p1_lname = Input::get('p1_lname');
        $parents->p1_email = Input::get('p1_email');
        $parents->p1_phone = Input::get('p1_phone');
        $parents->id1_no = Input::get('id1_no');
        $parents->p1_occupation = Input::get('p1_occupation');
        $parents->save();
        Session::flash('alert-success', 'Student Added Successfully');

        // var_dump($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function show(Students $students)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $students = Students::find($id);
        return view('admin.edit_student',compact('students'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'adm_date' => 'required',
            'reg_name' => 'required',
            'gender' => 'required',
            'class' => 'required',
            'p_fname' => 'required',
            'p_lname' => 'required',
            'p_email' => 'required',
            'p_phone' => 'required',
            'id_no' => 'required',
        ]);
        $students = Students::find($id);

        $input = $request->all();

        $students->fill($input)->save();

        Session::flash('alert-success', 'Student Details Updated Successfully');

        // var_dump($request->all());
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Students::find($id);
        $student->delete();
        Session::flash('alert-danger', 'Student Deleted Successfully');
        return redirect()->back();
    }
}
