<?php

namespace app\Http\Controllers;

use app\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        return Department::all()->toJson();
    }

    public function add()
    {
        $departments = Department::all();

        return view('departments.add', ['d' => $departments]);
    }

    public function store(Request $request)
    {
        $root = Department::find($request['parent_id']);
        $de = new Department();
        $de->name = $request['name'];
        $de->display_name = $request['display_name'];
        $de->save();
        $de->makeChildOf($root);

        return redirect('/departments');
    }

    public function users($id)
    {
        return Department::find($id)->users->toJson();
    }
}
