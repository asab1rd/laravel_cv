@section('experience')
<div class="section pp-scrollable slide-dark slide-personal-experience">
    <div class="slide-container">
        <div class="slide-bg">

        </div>
        <div class="container">
            <div class="slide-num">5</div>
            <div class="row align-items-center mb-4 animate-element delay5 fadeInDown">
                <div class="col-8">
                    <h2 class="slide-title mb-0">experience</h2>
                </div>
                <div class="col-4 text-right">
                    <div class="a-carousel-nav carousel-nav"></div>
                </div>
            </div>
            <div class="animate-element delay5 fadeInUp">
                <div class="carousel-experience a-carousel-experience owl-carousel owl-theme">
                    <div class="experience-list">
                        <div class="experience-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="experience-item-date">{{$experiences[0]->date}}</div>
                                    <div class="experience-item-company slide-title-sub company-blue">
                                        {{$experiences[0]->client}}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="experience-item-title slide-title-sub">
                                        {{$experiences[0]->role}}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="experience-item-descr slide-descr">
                                        {{$experiences[0]->description}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="experience-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="experience-item-date">{{$experiences[1]->date}}</div>
                                    <div class="experience-item-company slide-title-sub company-blue">
                                        {{$experiences[1]->client}}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="experience-item-title slide-title-sub">
                                        {{$experiences[1]->role}}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="experience-item-descr slide-descr">
                                        {{$experiences[1]->description}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="experience-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="experience-item-date">{{$experiences[2]->date}}</div>
                                    <div class="experience-item-company slide-title-sub company-blue">
                                        {{$experiences[2]->client}}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="experience-item-title slide-title-sub">
                                        {{$experiences[2]->role}}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="experience-item-descr slide-descr">
                                        {{$experiences[2]->description}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-btn">
                        <a href="#" class="btn btn-success"><i class="lni lni-download mr-3"></i>download my cv</a>
                    </div>
                    </count>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('experience-fr')
<div class="section pp-scrollable slide-dark slide-personal-experience">
    <div class="slide-container">
        <div class="slide-bg">

        </div>
        <div class="container">
            <div class="slide-num">5</div>
            <div class="row align-items-center mb-4 animate-element delay5 fadeInDown">
                <div class="col-8">
                    <h2 class="slide-title mb-0">Parcours</h2>
                </div>
                <div class="col-4 text-right">
                    <div class="a-carousel-nav carousel-nav"></div>
                </div>
            </div>
            <div class="animate-element delay5 fadeInUp">
                <div class="carousel-experience a-carousel-experience owl-carousel owl-theme">
                    <div class="experience-list">
                        <div class="experience-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="experience-item-date">{{$experiences[0]->date}}</div>
                                    <div class="experience-item-company slide-title-sub company-blue">
                                        {{$experiences[0]->client}}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="experience-item-title slide-title-sub">
                                        {{$experiences[0]->frRole}}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="experience-item-descr slide-descr">
                                        {{$experiences[0]->frDescription}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="experience-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="experience-item-date">{{$experiences[1]->date}}</div>
                                    <div class="experience-item-company slide-title-sub company-blue">
                                        {{$experiences[1]->client}}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="experience-item-title slide-title-sub">
                                        {{$experiences[1]->frRole}}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="experience-item-descr slide-descr">
                                        {{$experiences[1]->frDescription}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="experience-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="experience-item-date">{{$experiences[2]->date}}</div>
                                    <div class="experience-item-company slide-title-sub company-blue">
                                        {{$experiences[2]->client}}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="experience-item-title slide-title-sub">
                                        {{$experiences[2]->frRole}}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="experience-item-descr slide-descr">
                                        {{$experiences[2]->frDescription}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-btn">
                        <a href="#" class="btn btn-success"><i class="lni lni-download mr-3"></i>download my cv</a>
                    </div>
                    </count>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection