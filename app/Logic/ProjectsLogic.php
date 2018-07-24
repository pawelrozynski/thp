<?php

namespace App\Logic;

use App\Models\Project;

class ProjectsLogic extends Logic
{
 
    /*
     * Sets the attributes of a new Project
     * 
     * @var array
     * 
     * @return Project
     */
    public function create ($request)
    {    
        
        $project = new Project;
    
        
        if ( array_key_exists('name', $request ))
            $project->name = $request['name'];
        
        if ( array_key_exists('description', $request ))
            $project->description = $request['description'];
        
        if ( array_key_exists('active', $request ))
        {
            $project->active = true;
        }
        else 
        {
        $project->active = false;
        }
        
        $project->save();
        
        return $project;
    }
}
