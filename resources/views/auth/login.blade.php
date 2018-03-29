<!doctype html>
<html lang="{{ app()->getLocale() }}">
    @include('constants.assetCaller')
    @include('constants.headerCaller')

            <div class="content margin-fall">
                <div class="title m-b-md">
                    Login <b>{{config('app.name')}}</b>
                </div>

                <div class="container my_panel">
                  <div class="panel panel-default">
                      <div class="panel-heading">Login</div>

                      <div class="panel-body">
                          <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                              {{ csrf_field() }}

                              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                  <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                  <div class="col-md-6">
                                      <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                      @if ($errors->has('email'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('email') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>

                              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                  <label for="password" class="col-md-4 control-label">Password</label>

                                  <div class="col-md-6">
                                      <input id="password" type="password" class="form-control" name="password" required>

                                      @if ($errors->has('password'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('password') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>

                              <div class="form-group">
                                  <div class="">
                                      <div class="checkbox">
                                          <label>
                                              <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                          </label>
                                      </div>
                                  </div>
                              </div>

                              <div class="form-group">
                                  <div class="">
                                      <button type="submit" class="btn btn-primary">
                                          Login
                                      </button>
                                  </div>
                                  <div class="">
                                      <a class="btn btn-link" href="{{ route('password.request') }}">
                                          Forgot Your Password?
                                      </a>
                                  </div>
                              </div>

                              <hr/>

                              <div class="form-group">
                                  <div class="">
                                    <a href="{{url('/redirect')}}" class="btn btn-primary"><i class="fab fa-facebook-square"></i>&nbsp;&nbsp;Login with Facebook</a>
                                  </div>
                              </div>

                          </form>
                      </div>
                  </div>
                </div>

            </div>
        </div>
    </body>
</html>
