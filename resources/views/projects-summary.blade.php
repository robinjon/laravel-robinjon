@extends('layouts.default')
@section('content')

<h3>Projects</h3>
<ul class="projects-list">
    @foreach ($projects as $project)
    <li class="projects-list-item">
            <a href="project/{{ $project->id }}">
        <div>
                <h5>{{ $project->title }}</h5>
                <p>{{ str_limit($project->description, $limit = 70, $end = '...') }}</p>
        </div>
            </a>
    </li>
@endforeach
</ul>
    

    
    
@stop