@extends('layouts.main')
@push('styles')
	<!-- <link rel="stylesheet" href="{{ asset('public/css/report-charts.css') }}"> -->
@endpush

@section('content')
<section class="content">
  <div class="container no-padding">
    <div class="row">
      <div class="col-md-12">
          <div class="card__border--bottom clear-fix">
            <!-- register start  -->
            <form class="col-md-12" method="POST" action="{{ url('/web/register') }}" id="form-register">
                {{ csrf_field() }}
                <div class="col-md-12">

                  <div class="col-md-6">
                      <!-- Email -->
                      <div class="form-group">
                          <label for="email" class="col-md-12 control-label">E-Mail</label>
                          <div class="col-md-12 margin-bottom--20">
                              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                              @if ($errors->has('email'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <!-- Password -->
                      <div class="form-group">
                          <label for="password" class="col-md-12 control-label">Password</label>
                          <div class="col-md-12 margin-bottom--20">
                              <input id="password" type="password" class="form-control" name="password">
                              @if ($errors->has('password'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('password') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <!-- Password Confirm -->
                      <div class="form-group">
                          <label for="password-confirm" class="col-md-12 control-label">Konfirmasi Password</label>
                          <div class="col-md-12 margin-bottom--20">
                              <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                              @if ($errors->has('password_confirmation'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('password_confirmation') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <!-- nama -->
                      <div class="form-group">
                          <label for="name" class="col-md-12 control-label">Nama</label>
                          <div class="col-md-12 margin-bottom--20">
                              <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
                              @if ($errors->has('name'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('name') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <!-- Tempat dan Tanggal Lahir -->
                      <div class="form-group">
                          <label for="tgl_lahir" class="col-md-12 control-label">Tempat / Tanggal lahir</label>
                          <div class="col-md-12 margin-bottom--10">
                            <!-- Tempat lahir -->
                              <div class="col-sm-6 padding-right">
                                <input id="tempat-lahir" type="text" class="form-control" name="tempat_lahir">
                              </div>
                            <!-- Tanggal Lahir      -->
                              <div class='col-sm-6 no-padding'>

                                      <input id="tgl-lahir" type='text' name="tgl_lahir" class="bg-white form-control" data-date-format="dd/mm/yyyy" readonly="true"/>

                               </div>
                             </div>

                      </div>

                      <!-- Jenis Kelamin -->
                      <div class="form-group">
                          <label for="name" class="col-md-12 control-label">Jenis Kelamin</label>
                          <div class="col-md-12 margin-bottom--20">
                            <select name="jenis_kelamin" class="form-control">
                                 <option value=""></option>
                                 <option value="Laki - Laki">Laki - Laki</option>
                                 <option value="Perempuan">Perempuan</option>
                            </select>
                          </div>
                      </div>

                      <!-- Alamat -->
                      <div class="form-group">
                          <label for="name" class="col-md-12 control-label">Alamat</label>
                          <div class="col-md-12 margin-bottom--20">
                              <textarea id="alamat" type="text" class="form-control" name="alamat"></textarea>
                          </div>
                      </div>

                      <!-- Rt / Rw -->
                      <div class="form-group">
                          <label for="name" class="col-md-12 control-label">RT / RW</label>
                          <div class="col-md-12 margin-bottom--10">
                            <!-- Tempat lahir -->
                            <div class="col-sm-6 padding-right">
                              <input id="alamat-rt" type="text" class="form-control" name="rt">
                            </div>
                            <!-- Tanggal Lahir      -->
                            <div class='col-sm-6 no-padding'>
                               <div class="form-group">
                                  <input id="alamat-rw" type="text" class="form-control" name="rw" id=>
                               </div>
                             </div>
                          </div>
                      </div>
                  </div><!-- end col left -->

                  <div class="col-md-6">
                    <!-- kelurahan -->
                     <div class="form-group">
                       <label class="col-md-12 control-label">Kelurahan</label>
                       <div class="col-md-12 margin-bottom--20">
                         <input type="text" class="form-control" name="kelurahan" placeholder="" id="kelurahan"/>
                       </div>
                     </div>
                     <!-- kecamatan -->
                     <div class="form-group">
                         <label class="col-md-12 control-label">Kecamatan</label>
                         <div class="col-md-12 margin-bottom--20" >
                           <input type="text" class="form-control" name="kecamatan" placeholder="" id="kecamatan"/>
                         </div>
                     </div>
                     <!-- Kota -->
                     <div class="form-group">
                         <label class="col-md-12 control-label">Kota</label>
                         <div class="col-md-12 margin-bottom--20">
                           <input type="text" class="form-control" name="kota" placeholder="" id="kota"/>
                         </div>
                     </div>
                     <!-- Agama -->
                     <div class="form-group">
                         <label class="col-md-12 control-label">Agama</label>
                         <div class="col-md-12 margin-bottom--20">
                            <select name="agama" class="form-control" id="agama">
                               <option value=""></option>
                               <option value="Islam">Islam</option>
                               <option value="Kristen Protestan">Kristen Protestan</option>
                               <option value="Kristen Katolik">Kristen Katolik</option>
                               <option value="Budha">Budha</option>
                               <option value="Hindu">Hindu</option>
                             </select>
                         </div>
                     </div>
                     <!-- Pekerjaan -->
                     <div class="form-group">
                         <label class="col-md-12 control-label">Pekerjaan</label>
                         <div class="col-md-12 margin-bottom--20">
                           <input type="text" class="form-control" name="pekerjaan" placeholder="" id="pekerjaan"/>
                         </div>
                     </div>
                     <!-- Status -->
                     <div class="form-group">
                         <label class="col-md-12 control-label">Status Pernikahan</label>
                         <div class="col-md-12 margin-bottom--20">
                            <select name="status_pernikahan" class="form-control" id="status-pernikahan">
                                 <option value=""></option>
                                 <option value="Menikah">Menikah</option>
                                 <option value="Belum Menikah">Belum Menikah</option>
                                 <option value="Cerai">Cerai</option>
                                 <option value="Cerai Hidup">Cerai Hidup</option>
                                 <option value="Cerai Mati">Cerai Mati</option>
                             </select>
                         </div>
                     </div>
                     <!-- No Hp -->
                     <div class="form-group">
                         <label class="col-md-12 control-label">No Hp</label>
                         <div class="col-md-12 margin-bottom--20">
                           <input type="text" class="form-control" name="no_tlp" placeholder="" id='no-tlp'/>
                         </div>
                     </div>
                     <!-- organisasi -->
                     <div class="form-group">
                         <label class="col-md-12 control-label">Nama Organisasi</label>
                         <div class="col-md-12 margin-bottom--20">
                           <textarea type="text" class="form-control" name="organisasi" placeholder="" id="organisasi"></textarea>
                         </div>
                     </div>
                  </div><!-- end rigt col -->

                </div>

                <hr/>
                <!-- Button -->
                <div class="form-group">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-btn fa-user"></i> Register
                        </button>
                        <button type="reset" class="btn btn-warning" name="button">Reset</button>
                    </div>
                </div>
            </form>
            <!-- end register  -->
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@push('scripts')
  <script src="{{ asset('public/js/module/main/register-module.js') }}"></script>
@endpush
