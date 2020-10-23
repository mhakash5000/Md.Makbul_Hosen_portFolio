<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\model\Training;
use Illuminate\Http\Request;
use Session;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['trainings']=Training::all();
        // $data['users']=Training::count();
        return view('backend.training.training-view',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backend.Training.create-training');

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
            'training_name' => 'required',
            'institute_name' => 'required',
            'institute_location' => 'required',

        ]);
       $userData=new Training();
       $userData->training_name=$request->training_name;
       $userData->institute_name=$request->institute_name;
       $userData->institute_location=$request->institute_location;
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
        $trainingId=Training::find($id);
        return view('backend.training.edit-training',compact('trainingId'));
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
        $update=Training::find($id);
        $update->training_name=$request->training_name;
        $update->institute_name=$request->institute_name;
        $update->institute_location=$request->institute_location;
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
        $data=Training::find($id);
        $data->delete();
        return redirect()->route('training.view');
    }
}
