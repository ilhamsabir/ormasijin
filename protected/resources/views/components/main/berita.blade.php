<?php $news = Ijin::Berita(); ?>
<div class="col-md-8">
    <div class="card__border--top clear-fix" style="padding: 0;">
      <img src="{{ url('public/img/welcome-ijin.png')}}" alt="" style="width: 768px;height: 330px;">
      <!-- <div class="welcome">
        <div class="welcome-title">
          <i class="fa fa-institution"></i>
          <h4>Selamat datang </h4>
        </div>
        <div class="welcome-subtitle">
          <strong>Layanan Perijinan Ormas/LSM</strong>
          <strong>Kota Bandung</strong>
        </div>
      </div> -->
      <!-- @foreach ($news as $key => $berita)
      <div class="news-content">
        <div class="col-sm-5 no-padding">
          <div class="news-content__image">
              <img src="{{ $berita['image'] }}" alt="">
          </div>
        </div>
        <div class="col-sm-7 no-padding">
          <div class="news-content__row">
              <div class="news-content__row--title">
                  <h4>{{ $berita['judul'] }}</h4>
              </div>
              <div class="news-content__row--desc">
                  <p align="justify">{{ $berita['isi'] }}</p>
              </div>
          </div>
          <button type="button" class="btn btn-md btn-warning" name="button">Read More</button>
        </div>
      </div>
      @endforeach -->
    </div>
</div>
