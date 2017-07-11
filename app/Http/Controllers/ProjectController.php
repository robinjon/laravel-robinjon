<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Project;

class ProjectController extends Controller
{
    public function show($id)
    {
        return view('project', ['project' => Project::find($id) ]);
    }
    
    
    public function showSummary()
    {
        return view('projects-summary', ['projects' => Project::all() ]);
    }
}
