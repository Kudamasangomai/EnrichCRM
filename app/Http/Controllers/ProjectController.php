<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Clients;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Requests\projectformrequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::with(['user','client'])->paginate(10);
        return view('projects.projects-list',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $project = Project::with('user','client');
        $users = User::where('is_admin',1)->get();
        $clients = Clients::all();
        return view('projects.create-project',compact('clients','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(projectformrequest $request)
    {
        //
     
        $project = project::create($request->validated());
       
        return redirect('/projects')->with('success','Role created successfully');


        
     
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
          $project = Project::find($id);
          $project->with('user', 'client');
    
        return view('projects.project',compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::with('user','client')->find($id);
        $users = User::where('is_admin',1)->get();
        return view('projects.edit-project',compact('project','users'));
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
        dd($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();
        return redirect('/projects')->with('success','Project deleted successfully');

    }
}
