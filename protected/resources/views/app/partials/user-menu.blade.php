<ul class="nav nav-tabs nav-tab-custom">
  <li class="menu {{ Request::is('app/dashboard') ? 'active' : '' }}">
    <a href="{{ url('app/dashboard') }}">
      <div class="icon-image-menu">
        <img src="{{ url('public/img/menu/dash.png') }}" alt="">
      </div>
      Dashboard
    </a>
  </li>
  <li class="menu {{ Request::is('app/registrasi/baru/pengisiandata') ? 'active' : '' }}">
    <a class="" href="{{ url('app/registrasi/baru/pengisiandata') }}" id="tahap-verfikasi-pengisian">
      <div class="icon-image-menu">
        <img src="{{ url('public/img/menu/contract.png') }}" alt="">
      </div>
      Pengisian Data Organisasi
    </a>
  </li>

  <li class="menu {{ Request::is('app/history') ? 'active' : '' }}">
    <a class="" href="{{ url('app/history') }}">
      <div class="icon-image-menu">
        <img src="{{ url('public/img/menu/notification.png') }}" alt="">
      </div>
      Notifikasi
    </a>
  </li>

  <li class="menu {{ Request::is('app/pesan') ? 'active' : '' }}">
    <a class="" href="{{ url('app/pesan') }}" id="">
      <div class="icon-image-menu">
        <img src="{{ url('public/img/menu/envelope.png') }}" alt="">
      </div>
      Pesan
    </a>
  </li>

</ul>
