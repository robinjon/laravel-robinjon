<div class="header">
        <div class="container">
            <h3 class="headertext">portfolio</h3>
            <p class="title-subtext">Robin René Risøy Jönsson</p>
             <div clas="menu-container">
                 <div class="menu">
                    <ul class="nav nav-pills menu">
                        <!--<li  class="nav-item"><a href="{{ route('home') }}/" class="nav-link 
                            @if(Request::url() === route('home'))
                                active-link
                            @endif
                            ">main</a></li>-->
                        <li class="nav-item"><a href="{{ route('projects-summary') }}" class="nav-link
                             @if(Request::url() === route('projects-summary') || isset($project))
                                active-link
                            @endif
                            ">projects</a></li>
                        <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link
                            @if(Request::url() === route('contact'))
                                active-link
                            @endif                            
                            ">contact</a></li>
                    </ul>
                 </div>
            </div>
        </div>
</div>