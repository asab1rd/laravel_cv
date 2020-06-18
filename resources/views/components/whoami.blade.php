@section('whoami')
<div class="section pp-scrollable slide-personal-whoami">
    <div class="slide-container">
        <div class="slide-bg">
            <div class="slide-photo circle-light slide-whoami-circle2 transformLeft"></div>
            <div class="slide-photo circle-brown slide-whoami-circle1 transformRight"></div>
        </div>
        <div class="container">
            <div class="slide-num">2</div>
            <div class="row">
                <div class="col-md-4">
                    <div class="animate-element delay5 fadeInDown">
                        <h2 class="slide-title slide-title-personal-whoami slide-title-lg">
                            21
                        </h2>
                        <div class="d-md-none">
                            <div class="slide-title-sub slide-title-sub-sm">
                                Years Old
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="slide-title-info animate-element delay5 fadeInDown">
                        Since I was a kid, when I see something interesting I try to learn it.
                        Below I list some of my the best thing
                        <span class="text-primary">I learned by myself.</span>
                    </h3>
                </div>
            </div>

            <div class="row animate-element delay5 fadeInUp">
                <div class="col-md-4 d-none d-md-block">
                    <div class="slide-title-sub slide-title-sub-sm">
                        MY MAIN
                        <div class="d-none d-md-block"></div>
                        HOBBIES
                    </div>
                    <div class="slide-descr slide-descr-personal-whoami font-italic">
                        *Crafting beautiful brands and websites.
                        <a href="#Contact" class="text-primary text-underline">Contact me</a>
                        for more servies.
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="whoami-list row">
                        @foreach ($whoamis as $whoami)
                        <div class="col-md-6">
                            <div class="whoami-item">
                                <div class="whoami-item-title slide-title-sub">
                                    {{$whoami->title}}
                                </div>
                                <div class="whoami-item-descr slide-descr">
                                    {{$whoami->description}}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('whoami-fr')
<div class="section pp-scrollable slide-personal-whoami">
    <div class="slide-container">
        <div class="slide-bg">
            <div class="slide-photo circle-light slide-whoami-circle2 transformLeft"></div>
            <div class="slide-photo circle-brown slide-whoami-circle1 transformRight"></div>
        </div>
        <div class="container">
            <div class="slide-num">2</div>
            <div class="row">
                <div class="col-md-4">
                    <div class="animate-element delay5 fadeInDown">
                        <h2 class="slide-title slide-title-personal-whoami slide-title-lg">
                            21
                        </h2>
                        <div class="d-md-none">
                            <div class="slide-title-sub slide-title-sub-sm">
                                ANS
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="slide-title-info animate-element delay5 fadeInDown">
                        J'ai toujours été curieux, dès qu'un domaine m'interesse,
                        et que j'ai les moyens d'apprendre je fonce.
                        Voici quelques dommaines que <span class="text-primary">j'ai appris par moi même.</span>
                    </h3>
                </div>
            </div>

            <div class="row animate-element delay5 fadeInUp">
                <div class="col-md-4 d-none d-md-block">
                    <div class="slide-title-sub slide-title-sub-sm">
                        Centres
                        <div class="d-none d-md-block"></div>
                        D'interets
                    </div>
                    <div class="slide-descr slide-descr-personal-whoami font-italic">
                        *Crafting beautiful brands and websites.
                        <a href="#Contact" class="text-primary text-underline">Contact me</a>
                        for more servies.
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="whoami-list row">
                        @foreach ($whoamis as $whoami)
                        <div class="col-md-6">
                            <div class="whoami-item">
                                <div class="whoami-item-title slide-title-sub">
                                    {{$whoami->frTitle}}
                                </div>
                                <div class="whoami-item-descr slide-descr">
                                    {{$whoami->frDescription}}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection