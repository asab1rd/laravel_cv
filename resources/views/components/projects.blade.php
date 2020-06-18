@section('projects')
<div class="section pp-scrollable slide-dark slide-dark-bg slide-personal-projects">
    <div class="carousel-project-personal a-carousel-projects owl-carousel owl-theme">
        @foreach ($projects as $project)
        <div class="carousel-project-item text-white" style="background-image: url({{$project->imageurl}});">
            <div class="slide-container">
                <div class="container">
                    <div class="slide-num">{{$project->id}}</div>
                    <div class="animate-element delay5 fadeInDown">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="slide-title-sub slide-title-sub-md">
                                    My Projects
                                </div>
                            </div>
                            <div class="col-md-5 text-md-right">
                                <div class="project-date">{{$project->date}}</div>
                                <div class="slide-title-sub slide-title-sub-md mb-md-3">
                                    {{$project->role}}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <h3 class="slide-title text-white">
                                    {{$project->name}}
                                </h3>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="slide-descr slide-descr-projects">
                                            {{$project->description}}
                                        </div>
                                    </div>
                                </div>
                                <div class="slide-btn slide-btn-projects">
                                    <a href="{{$project->url}}" class="btn btn-success">view project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

@section('projects-fr')
<div class="section pp-scrollable slide-dark slide-dark-bg slide-personal-projects">
    <div class="carousel-project-personal a-carousel-projects owl-carousel owl-theme">
        @foreach ($projects as $project)
        <div class="carousel-project-item text-white" style="background-image: url({{$project->imageurl}});">
            <div class="slide-container">
                <div class="container">
                    <div class="slide-num">{{$project->id}}</div>
                    <div class="animate-element delay5 fadeInDown">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="slide-title-sub slide-title-sub-md">
                                    Mes Projets
                                </div>
                            </div>
                            <div class="col-md-5 text-md-right">
                                <div class="project-date">{{$project->frdate}}</div>
                                <div class="slide-title-sub slide-title-sub-md mb-md-3">
                                    {{$project->frrole}}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <h3 class="slide-title text-white">
                                    {{$project->frname}}
                                </h3>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="slide-descr slide-descr-projects">
                                            {{$project->frdescription}}
                                        </div>
                                    </div>
                                </div>
                                <div class="slide-btn slide-btn-projects">
                                    <a href="{{$project->url}}" class="btn btn-success">Voir le projet</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection