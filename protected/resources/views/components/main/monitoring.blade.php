<div class="col-md-12">
  <div class="card__border--bottom">
    <div class="card-content">
      <div class="card-header-title">
        <h4>Monitoring Berkas</h4>
        <!-- Monitoring form -->
      </div>
      <form class="form-horizontal" role="form" method="POST" action="{{ url('/web/login') }}">
        {{ csrf_field() }}
          <div class="form-group no-padding">
              <div class="col-md-12">
                  <input type="text" class="form-control" name="kode_registrasi" placeholder="Kode Registrasi">
              </div>
          </div>
          <div class="form-group no-padding">
              <div class="col-md-12">
                <button type="submit" class="btn button--primary">
                    <i class="fa fa-search"></i> Search
                </button>
              </div>
          </div>
        </form>
    </div>
  </div>
</div>
