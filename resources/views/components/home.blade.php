@section('home')

<div class="section pp-scrollable slide-dark slide-dark-footer slide-personal-intro">
    <div class="slide-container">
        <div class="slide-bg">
        </div>
        <div class="container">
            <div class="slide-num">1</div>
            <div class="row">
                <div class="col-sm-6 col-10">
                    <h1 class="slide-title animate-element delay5 fadeInDown">
                        {{$cv->name}}
                    </h1>
                    <div class="animate-element delay5 fadeInUp">
                        <h3 class="slide-title-sub">
                            {{$cv->profession}}
                        </h3>
                        <div class="slide-descr slide-descr-intro">
                            {{$cv->presentation}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection