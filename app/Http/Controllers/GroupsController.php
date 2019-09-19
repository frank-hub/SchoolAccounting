<?php

namespace App\Http\Controllers;

use App\Groups;
use Illuminate\Http\Request;
use Session;

class GroupsController extends Controller
{

    public function index()
    {
        $groups = Groups::All();
        return view('admin/groups',compact('groups'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $request->validate([
            'group_name'=>'required|unique:groups',
            'group_type'=>'required',
        ]);

        $groups = new Groups;
        $groups->group_name = $request->get('group_name');
        $groups->group_type = $request->get('group_type');
        $groups->save();
        // return Response::json($groups);
        Session::flash('alert-success', 'Group Created Successfuly');
        return redirect()>back();
    }

  
    public function show(Groups $groups)
    {
        //
    }

    public function edit(Groups $groups)
    {
        //
    }

    public function update(Request $request, Groups $groups)
    {
        //
    }


    public function destroy(Groups $groups,$id)
    {
        $groups = Groups::find($id);
        $groups->delete();
        return redirect()->back();
    }
}
