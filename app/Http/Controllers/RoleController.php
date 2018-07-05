<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $roles=\App\role::all();//sab data fetch garna ko lagi 
        $roles= role::paginate(2);
       return view('back.roles.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.roles.Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request->all());
        $roles=new \App\role;
        $roles->name=$request->get('name');
        $roles->save();
        return redirect('role')->with('success','Information has been added');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $roles= role::find($id);
        //return $users;
        return view ('back.roles.show',compact('roles')); //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roles = \App\role::find($id);
        return view ('back.roles.edit',compact('roles','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $roles= \App\role::find($id);
        $roles->name=$request->get('name');
        $roles->save();
        return redirect('role')->with('success','Information has been updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $roles= \App\role::find($id);
        $roles->delete();
        return redirect('role')->with('success','Information has been deleted');
    }
}
