<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Project;

class ApiController extends Controller
{

    public function show($id)
    {
        $project = Project::find($id);
        $images = $project->images;
        $videos = $project->videos;
        return view('api', ['projects' => ["description" => $project, "images" => $images], "videos" => $videos]);
    }
    
    
    public function showAll()
    {
        $projectsArray = array();
        $projects =  Project::all();
        foreach ($projects as &$project) {
            $images = $project->images;
            $videos = $project->videos;
            array_push($projectsArray, ["description" => $project, "images" => $images, "videos" => $videos]);
        }
        
        return view('api', ['projects' => $projects]);
    }
}
