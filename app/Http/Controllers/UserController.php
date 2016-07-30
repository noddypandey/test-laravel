<?php

namespace app\Http\Controllers;

use app\User;
use app\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class UserController extends Controller
{
    public function index()
    {
        return User::all()->toJson();
    }

    public function add()
    {
        $departments = User::where('parent_id', null)->get();
        $dep = Department::all();

        return view('users.add', ['d' => $departments, 'dep' => $dep]);
    }

    public function store(Request $request)
    {
        if ($request['parent_id'] == 0) {
            $de = new User();
            $de->name = $request['name'];
            $de->email = $request['email'];
            $de->class = $request['class'];
            $de->save();
            $d = Department::find($request['department_id']);
            $de->departments()->attach($d);
        } else {
            $root = User::find($request['parent_id']);
            $de = new User();
            $de->name = $request['name'];
            $de->email = $request['email'];
            $de->class = $request['class'];
            $d = Department::find($request['department_id']);
            $de->departments()->attach($d);
            $de->save();
            $de->makeChildOf($root);
        }

        return redirect('/users');
    }

    public function parent($id)
    {
        return User::find($id)->children->toJson();
    }

    public function department($p_id, $d_id)
    {
        $d_users = [];
        $users = Department::find($d_id)->users;
        foreach ($users as $u) {
            if ($u->parent_id == $p_id) {
                $d_users[] = $u;
            }
        }
        $uu = Collection::make($d_users);

        return $uu->toJson();
    }
}
