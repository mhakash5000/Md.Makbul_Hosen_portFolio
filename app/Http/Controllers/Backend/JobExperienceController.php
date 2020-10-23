<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\model\JobExperience;
use Illuminate\Http\Request;
use Session;

class JobExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['JobExperiences']=JobExperience::all();
        // $data['users']=JobExperience::count();
        return view('backend.JobExperience.experience-view',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backend.JobExperience.create-experience');

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
            'designation' => 'required',
            'date' => 'required',
            'company_name' => 'required',
            'company_address' => 'required',
            'company_website' => 'required',

        ]);
       $userData=new JobExperience();
       $userData->designation=$request->designation;
       $userData->date=$request->date;
       $userData->company_name=$request->company_name;
       $userData->company_address=$request->company_address;
       $userData->company_website=$request->company_website;
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
        $experienceId=JobExperience::find($id);
        return view('backend.jobExperience.edit-experience',compact('experienceId'));
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
        $update=JobExperience::find($id);
        $update->designation=$request->designation;
        $update->date=$request->date;
        $update->company_name=$request->company_name;
        $update->company_address=$request->company_address;
        $update->company_website=$request->company_website;
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
        $data=JobExperience::find($id);
        $data->delete();
        return redirect()->route('experience.view');
    }
}
