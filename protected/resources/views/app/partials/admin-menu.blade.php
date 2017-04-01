<ul class="nav nav-tabs nav-tab-custom">
  <li class="menu {{ Request::is('admin/dashboard') ? 'active' : '' }}">
    <a class="" href="{{ url('admin/dashboard') }}" id="">
      <div class="icon-image-menu">
        <img src="{{ url('public/img/menu/dash.png') }}" alt="">
      </div>
      Dashboard
    </a>
  </li>
  <li class="menu {{ Request::is('admin/dataormas') ? 'active' : '' }}">
    <a class="" href="{{ url('admin/dataormas') }}" id="">
      <div class="icon-image-menu">
        <img src="{{ url('public/img/menu/database.png') }}" alt="">
      </div>
      Organisasi
    </a>
  </li>
  <li class="menu {{ Request::is('admin/datalapangan') ? 'active' : '' }}">
    <a class="" href="{{ url('admin/datalapangan') }}" id="">
      <div class="icon-image-menu">
        <img src="{{ url('public/img/menu/photo.png') }}" alt="">
      </div>
      Verifikasi Lapangan
    </a>
  </li>
  <li class="menu {{ Request::is('admin/datawawancara') ? 'active' : '' }}">
    <a class="" href="{{ url('admin/datawawancara') }}" id="">
      <div class="icon-image-menu">
        <img src="{{ url('public/img/menu/interview.png') }}" alt="">
      </div>
      Wawancara
    </a>
  </li>
  <li class="menu {{ Request::is('admin/datapengambilan') ? 'active' : '' }}">
    <a class="" href="{{ url('admin/datapengambilan') }}" id="">
      <div class="icon-image-menu">
        <img src="{{ url('public/img/menu/folder.png') }}" alt="">
      </div>
      Pengambilan SKT
    </a>
  </li>

  <li class="menu {{ Request::is('admin/pesan') ? 'active' : '' }}">
    <a class="" href="{{ url('admin/pesan') }}" id="">
      <div class="icon-image-menu">
        <img src="{{ url('public/img/menu/envelope.png') }}" alt="">
      </div>
      Messages</a>
    </a>
  </li>

  <li class="menu {{ Request::is('admin/berita') ? 'active' : '' }}">
    <a class="" href="{{ url('admin/berita') }}" id="">
      <div class="icon-image-menu">
        <img src="{{ url('public/img/menu/newspaper.png') }}" alt="">
      </div>
      Berita
    </a>
  </li>

</ul>
