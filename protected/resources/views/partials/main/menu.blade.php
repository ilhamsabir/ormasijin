<?php
    $data = Ijin::mainMenu();
?>
<section class="menu">
  <div class="container">
    <div class="row">
      <nav class="main-menu navbar navbar-default navbar-static-top">
      <div class="container">
          <div class="navbar-header">
              <!-- Collapsed Hamburger -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                  <span class="sr-only">Toggle Navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <!-- Branding Image -->
              <!-- <a class="navbar-brand" href="{{ url('/') }}">
                  Home
              </a> -->
          </div>
          <div class="collapse navbar-collapse" id="app-navbar-collapse">
              <!-- Left Side Of Navbar -->
              <ul class="nav font-color navbar-nav">
                @foreach ($data as $key => $row)
                  <li><a href="{{ url('/') }}/{{ $row['URL'] }}">{{ $row['nama'] }} <i class="{{ $row['icon'] }}"></i></a></li>
                @endforeach
              </ul>
          </div>
      </div>
  </nav>
    </div>
  </div>
</section>
