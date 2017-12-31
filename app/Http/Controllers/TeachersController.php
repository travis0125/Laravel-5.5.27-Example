<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Input;
use App\Teacher;

class TeachersController extends Controller
{
    public function index()
    {
        //$teachers = Teacher::latest()->get();
        //$teachers = Teacher::latest('employed_at')->employed()->get();
        $teachers = Teacher::all();
        return view('teachers.index', compact('teachers'));
    }

    public function create()
    {
        return view('teachers.create');
    }

    public function store(Request $request)
    {
        /*
        $teacher_new = new Teacher;
        $teacher_new->name = $request->input('name');
        $teacher_new->email = $request->input('email');
        $teacher_new->professional = $request->input('professional');
        $teacher_new->url = $request->input('url');
        $teacher_new->save();
        */
        Teacher::create($request->all());
        return redirect('teachers');
    }

    /*
    public function store() {
    // 使用 Input 來取得使用者從表單輸入之資料
    $name = Input::get('teacher_name');
    $id = Input::get('teacher_id');
    return '教師名稱：' . $name . '，教師編號：' . $id;
    }
    */

    public function show($id)
    {
        return view('teachers.show')->with('teacher', Teacher::findOrFail($id));
    }

    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('teachers.edit', compact('id', 'teacher'));
    }

    public function update($id,Request $request)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->update($request->all());
        return redirect('teachers');
    }

    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();
        return redirect('teachers');
    }
}