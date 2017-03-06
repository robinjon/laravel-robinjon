@extends('layouts.default')
@section('content')
    <a href="{{ URL::previous() }}">Back</a>
<br><br>
    <h3>{{ $project->title }}</h3>
    @if (isset($project->gitlink))
        <i>Source: </i><a target="_blank" href="{{$project->gitlink}}">GIT</a>
    @endif
            <p>{{ $project->description}}</p>
@stop