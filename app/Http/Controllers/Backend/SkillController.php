<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\model\Skill;
use Illuminate\Http\Request;
use Session;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['skills']=Skill::all();
        // $data['users']=Training::count();
        return view('backend.skill.skill-view',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backend.skill.create-skill');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'skill' => 'required',
            'percentage' => 'required',
            'title' => 'required',


        ]);
       $userData=new Skill();
       $userData->skill=$request->skill;
       $userData->percentage=$request->percentage;
       $userData->title=$request->title;
       $userData->save();
       Session::flash('success','Data Inserted successfully');
       return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $skillId=Skill::find($id);
        return view('backend.skill.edit-skill',compact('skillId'));
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
        $update=Skill::find($id);
        $update->skill=$request->skill;
        $update->percentage=$request->percentage;
        $update->title=$request->title;
        $update->save();
        Session::flash('success','Data Updated successfully');
       return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Skill::find($id);
        $data->delete();
        return redirect()->route('skill.view');
    }
}
