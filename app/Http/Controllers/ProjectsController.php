<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Logic\ProjectsLogic;
use App\Http\Requests\ProjectValidator;

class ProjectsController extends Controller
{
    public function index ()
    {
        $projects = Project::all();
    
        return view('projects.index', compact('projects'));
    }
    
    public function active ()
    {
        $projects = Project::active();
    
        return view('projects.index', compact('projects'));
    }
    
    public function closed ()
    {
        $projects = Project::closed();
    
        return view('projects.index', compact('projects'));
    }
    
    public function show ($id)
    {
        $project = Project::find($id);
        $comments = $project->comments;
    
        return view('projects.show', compact('project', 'comments'));
    }
    
    public function create ()
    {    
        return view('projects.create');
    }
    
    public function store (ProjectValidator $request)
    {

        $project = new ProjectsLogic;
        
        $project->create(request()->all());
        
        return $this->index();
    }
}
