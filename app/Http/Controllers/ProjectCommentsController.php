<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectComment;
use App\Logic\ProjectCommentsLogic;
use App\Http\Requests\ProjectCommentValidator;

class ProjectCommentsController extends Controller
{

    public function store (ProjectCommentValidator $request)
    {
        $projectcomment = new ProjectCommentsLogic;
        
        $newcomment = $projectcomment->create(request()->all());
        
        return redirect('projects/' . $newcomment->project_id);
    }
}
