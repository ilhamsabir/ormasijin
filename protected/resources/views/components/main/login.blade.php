<div class="col-md-4">
    <div class="card__border--bottom">
      <div class="card-content">
        <div class="card-header-title">
          <h4>Login</h4>
        </div>
        <!-- Login input -->
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/web/login') }}">
          {{ csrf_field() }}
              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="col-md-12">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="email">
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="col-md-12">
                    <input id="password" type="password" class="form-control" name="password" placeholder="password">
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

              <div class="form-group">
                <div class="col-md-6">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> Remember Me
                        </label>
                    </div>
                </div>
            </div>

              <div class="form-group">
                <div class="col-md-6">
                    <button type="submit" class="btn button--primary">
                        <i class="fa fa-btn fa-sign-in"></i> Login
                    </button>
                </div>
                <div class="col-md-12">
                  <a class="btn btn-link no-padding" href="{{ url('/web/register') }}">Daftar</a>
                </div>
                <div class="col-md-12">
                  <a class="btn btn-link no-padding" href="{{ url('/web/password/reset') }}">Forgot Your Password?</a>
                </div>
              </div>
          </div>
        </form>
      </div>
    </div>
</div>
