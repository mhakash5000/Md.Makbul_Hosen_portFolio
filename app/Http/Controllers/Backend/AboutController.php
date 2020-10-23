<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\model\About;
use Illuminate\Http\Request;
use Auth;
use Session;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['abouts']=About::all();
        $data['users']=About::count();
        return view('backend.about.about-view',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backend.about.create-about');

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
            'description' => 'required',
            'image' => 'required',

        ]);
       $userData=new About();
       $userData->title=$request->title;
       $userData->description=$request->description;
       if($request->hasFile('image')){
        $file=$request->file('image');
        $extension=$file->getClientOriginalExtension();
        $newImage=time().'.'.$extension;
        $file->move('upload/user_images/',$newImage);
        $userData->image=$newImage;
    }else{
        return $request;
        $userData->image='';
    }
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
        $aboutId=About::find($id);
        return view('backend.about.edit-about',compact('aboutId'));
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
        $update=About::find($id);
        $update->title=$request->title;
        $update->description=$request->description;
        $update->image=$request->image;
        if($request->hasFile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $myImage=time().'.'.$extension;
            $file->move('upload/user_images/',$myImage);
            $update->image=$myImage;
        }
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
        $data=About::find($id);
        $data->delete();
       return redirect()->route('about.view');
    }
}
