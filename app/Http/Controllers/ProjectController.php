<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Project::all();
        return view('template.template', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $project= Project::all();
        $skills = Skill::all();

        return view('backend.projectB',compact('project','skills'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newEntry = new Project;
        $newEntry->src = $request->file('src')->hashName();
        $newEntry->nom = $request->nom;
        $newEntry->description = $request->description;
        $newEntry->tag = $request->tags;
        $newEntry->save();
        $request->file('src')->storePublicly('img','public');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $id)
    {
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datas = Project::find($id); 
        return view ('backend.projectBE', compact('datas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $update = Project::find($id); 

        Storage::disk('public')->delete('img/'. $update->src);
        $update->nom = $request->nom; 
        $update->description = $request->description; 
        $update->tag = $request->tags; 
 
        $update->save();
        $request->file('src')->storePublicly('img','public');
 
        return redirect()->back(); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Project::find($id); 
        $delete->delete(); 
        Storage::disk('public')->delete('img/'.$delete->src);
        return redirect()->back(); 
    }
}
