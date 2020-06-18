@extends('layouts.app')
@include('components.components')
@include('components.variables')
@section("lang","en")
@section('wrapper')
<div class="wrapper">
  <header id="header" class="header header-fixed">
    <div class="header-bg"></div>
    <div class="container-fluid clearfix">
      <div class="brand">
        <a href="/">
          <div class="brand-name font-custom">@yield('header-brand')</div>
        </a>
      </div>
      <button class="nav-toggle-btn a-nav-toggle">
        <span class="nav-toggle">
          <span class="stick stick-1"></span>
          <span class="stick stick-2"></span>
          <span class="stick stick-3"></span>
        </span>
      </button>

      <div class="header-content d-none d-md-block">
        <div class="row">
          <div class="col-md-3">
            <div class="header-tagline">
              Web developer<br />
              Artist
            </div>
          </div>
          <div class="col-md-9">
            <div class="header-contacts">
              <div class="header-contact-item">
                Contact.&nbsp;
                <a href="tel:+330682963560" class="phone-link">(+33)682963560</a>
              </div>
              <div class="header-contact-divider">/</div>
              <div class="header-contact-item">
                <a href="mailto:zach@artkodes.com" class="mail-link">zach@artkodes.com</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="hide-menu a-nav-toggle"></div>

    <div class="menu">
      <div class="menu-lang">
        <a href="/" class="menu-lang-item active">Eng</a>
        <a href="/fr" class="menu-lang-item">Fra</a>
      </div>

      @yield('menu-links')

      <div class="menu-footer">
        <ul class="social social-rounded">
          @yield('socials')
        </ul>
        <div class="menu-copyright">
          @yield('copyright')
        </div>
      </div>
    </div>
  </header>

  <div id="content" class="content">
    <div class="homepage-personal a-pagepiling">
      @yield('home')
      @yield('whoami')
      {{-- @yield('projects') --}}
      @yield('experience')
      @yield('contact')

    </div>
  </div>

  <footer id="footer" class="footer">
    <ul class="social social-fixed">
      @yield('socials')
    </ul>

    <div class="copyright copyright-fixed d-none d-md-block">
      @yield('copyright')
    </div>
  </footer>
</div>
@endsection