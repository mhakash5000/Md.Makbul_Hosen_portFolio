<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\model\LearningSource;
use Illuminate\Http\Request;
use Session;

class LearningSourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['LeaningSources']=LearningSource::all();
        $data['users']=LearningSource::count();
        return view('backend.LearningSource.source-view',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backend.LearningSource.create-source');

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
            'title' => 'required',
            'google' => 'required',
            'youtube' => 'required',
            'php' => 'required',
            'laravel' => 'required',
            'react' => 'required',
            'stackoverflow' => 'required',

        ]);
       $userData=new LearningSource();
       $userData->title=$request->title;
       $userData->google=$request->google;
       $userData->youtube=$request->youtube;
       $userData->php=$request->php;
       $userData->laravel=$request->laravel;
       $userData->react=$request->react;
       $userData->stackoverflow=$request->stackoverflow;
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
        $sourceId=LearningSource::find($id);
        return view('backend.LearningSource.edit-source',compact('sourceId'));
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
        $update=LearningSource::find($id);
        $update->title=$request->title;
        $update->google=$request->google;
        $update->youtube=$request->youtube;
        $update->php=$request->php;
        $update->laravel=$request->laravel;
        $update->react=$request->react;
        $update->stackoverflow=$request->stackoverflow;
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
        $data=LearningSource::find($id);
        $data->delete();
       return redirect()->route('source.view');
    }
}
