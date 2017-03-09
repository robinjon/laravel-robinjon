@extends('layouts.default') 
@section('content')

<h3>{{ $project->title }}</h3> @if (isset($project->gitlink))
<i>Source: </i><a target="_blank" href="{{$project->gitlink}}">GIT</a> @endif
<div class="main-text">
    <p>{!! html_entity_decode($project->description) !!}</p>
</div>

@if ($project->images->count() > 0 || $project->videos->count() > 0)

<script language="JavaScript">
    var i = 0;
    var path = new Array();
    var descriptions = new Array();
    var indexes = new Array();

    // LIST OF IMAGES 
    // 
    @for ($j = 0; $j < $project->videos->count(); $j++)
        @if ($project->videos->get($j)->youtube)
        @else
            path[{{$j}}] = '<video src="{{$project->videos->get($j)->src}}" autoplay mute height="385" controls></video> ';
            descriptions[{{$j}}] = "- {{ $project->videos->get($j)->description }}";  
        @endif
        
    @endfor
    {{--*/ $max = $project->images->count() + $j /*--}}
    @for ($i = $j; $i < $max; $i++)
        
        path[{{$i}}] = '<img name="slide" src="{{ route('home') }}/images/{{ $project->images->get($i - $j)->src }}" height="400"/> ';
        descriptions[{{$i}}] = "- {{ $project->images->get($i - $j)->description }}";   
    @endfor
    

    const init = () => {
        if(path.length > 1){
        var navHtml = "";
        
        for(var i = 0; i < path.length; i++){
            navHtml += ' <img src="{{ route('home') }}/images/icons/btn_white.png" onclick="selectImage(' + i + ')" class="slider-btn"/>';
            
        }
        document.getElementById("slider-nav").innerHTML = navHtml;
        }
        
        next();
    }

    const next = () => {
        selectImage(i);
        if (i < path.length - 1) i++;
        else i = 0;
    }
    
    const selectImage = (index) => {
        document.getElementById("slider-description").innerHTML = "<p>" + descriptions[index] + "</p>";
        document.getElementById("slider-image").innerHTML = path[index];
        i = index;
    }
    
    const switchToVideo = () => {
        document.getElementById("slider-image").innerHTML = "Paragraph changed!";
    }
    window.onload = init;
        
</script>
<div class="slider">

    <div class="slider-nav" id="slider-nav">

    </div>

    <div class="slider-image" id="slider-image">

    </div>
    <div class="slider-description"  id="slider-description">
    
    </div>
    </div>
@endif @stop