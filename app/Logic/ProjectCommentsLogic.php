<?php

namespace App\Logic;

use App\Models\ProjectComment;

class ProjectCommentsLogic extends Logic
{
 
    /*
     * Sets the attributes of a new ProjectComment
     * 
     * @var array
     * 
     * @return Project
     */
    public function create ($request)
    {    
        $projectcomment = new ProjectComment;
    
        
        if ( array_key_exists('note', $request ))
            $projectcomment->note = $request['note'];
        
        if ( array_key_exists('project_id', $request ))
            $projectcomment->project_id = $request['project_id'];
       
        
        $projectcomment->save();
        
        return $projectcomment;
    }
}
