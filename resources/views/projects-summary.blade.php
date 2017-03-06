@extends('layouts.default')
@section('content')
<div class="col-lg-12">
    <h3>Projects</h3>
            <p>Work in progress</p>
<ul class="list-group">
    @foreach ($projects as $project)
    <li class="list-group-item">
        <div class="project-list-item">
        <h4><a href="project/{{ $project->id }}">{{ $project->title }}</a></h4>
        <br>
        <p>{{ str_limit($project->description, $limit = 60, $end = '...') }}</p>
    </div>
    </li>

</ul>
    
@endforeach
    
    </div>
@stop