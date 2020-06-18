@section('socials')
<li>
    <a href="/my/github"><i class="lni lni-github-original"></i></a>
</li>
<li>
    <a href="/my/linkedin"><i class="lni lni-linkedin"></i></a>
</li>
<li>
    <a href="/my/instagram"><i class="lni lni-instagram-original"></i></a>
</li>
@endsection

@section('copyright')
&copy; Artkodes 2020<br />
All Rights Reserved
@endsection


@section('menu-links')
<nav class="menu-main" id="accordion">
    <ul id="menuMain">
        <li data-menuanchor="intro" class="active">
            <a href="#intro">Intro</a>
        </li>
        <li data-menuanchor="whoami">
            <a href="#whoami">Who Am I ?</a>
        </li>
        {{-- <li data-menuanchor="projects">
            <a href="#projects">Projects</a>
        </li> --}}
        <li data-menuanchor="experience">
            <a href="#experience">Experience</a>
        </li>
        <li data-menuanchor="contact"><a href="#contact">Contact</a></li>
    </ul>
</nav>
@endsection

@section('menu-links-fr')
<nav class="menu-main" id="accordion">
    <ul id="menuMain">
        <li data-menuanchor="intro" class="active">
            <a href="#intro">Intro</a>
        </li>
        <li data-menuanchor="whoami">
            <a href="#whoami">Ce que j'aime</a>
        </li>
        {{-- <li data-menuanchor="projects">
            <a href="#projects">Mes projets</a>
        </li> --}}

        <li data-menuanchor="experience">
            <a href="#experience">Mon experience</a>
        </li>
        <li data-menuanchor="contact">
            <a href="#contact">Contactez-moi</a>
        </li>
    </ul>
</nav>
@endsection