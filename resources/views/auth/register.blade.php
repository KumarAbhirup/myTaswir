<!doctype html>
<html lang="{{ app()->getLocale() }}">
    @include('constants.assetCaller')
    @include('constants.headerCaller')

            <div class="content margin-fall">
                <div class="title m-b-md">
                    Register <b>{{config('app.name')}}</b>
                </div>

                <div class="links">
                    <a href="https://facebook.com/streamduck" target="_blank">Facebook</a>
                    <a href="https://twitter.com/kumar_abhirup" target="_blank" title="_blank">Twitter</a>
                    <a href="https://youtube.com/c/IQubex" target="_blank">YouTube</a>
                    <a href="https://github.com/KumarAbhirup/mytaswir" target="_blank">GitHub</a>
                </div>

                <div class="container my_panel">
                  <div class="panel panel-default">
                      <div class="panel-heading">Register</div>

                      <div class="panel-body">
                          <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                              {{ csrf_field() }}

                              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                  <label for="name" class="col-md-4 control-label">Full Name</label>

                                  <div class="col-md-6">
                                      <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                      @if ($errors->has('name'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('name') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>

                              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                  <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                  <div class="col-md-6">
                                      <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                      @if ($errors->has('email'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('email') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>

                              {{-- <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                                  <label for="mobile" class="col-md-4 control-label">Mobile</label>

                                  <div class="col-md-6">
                                      <input id="mobile" type="number" class="form-control" name="mobile" required>

                                      @if ($errors->has('mobile'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('mobile') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div> --}}

                              {{-- <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                                  <label for="mobile" class="col-md-4 control-label">City</label>

                                  <div class="col-md-6">
                                      <input id="city" type="text" class="form-control" name="city" required>

                                      @if ($errors->has('city'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('city') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div> --}}

                              {{-- <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                  <label for="address" class="col-md-4 control-label">Address</label>

                                  <div class="col-md-6">
                                      <textarea id="address" class="form-control" name="address" required></textarea>

                                      @if ($errors->has('address'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('address') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div> --}}

                              {{-- <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                                  <label for="country" class="col-md-4 control-label">Country</label>

                                  <div class="col-md-6">
                                      <input id="country" type="text" class="form-control" name="country" required>

                                      @if ($errors->has('country'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('country') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div> --}}

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
                                  <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                  <div class="col-md-6">
                                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                  </div>
                              </div>

                              <div class="form-group">
                                  <div class="">
                                      <button type="submit" class="btn btn-primary">
                                          Register
                                      </button>
                                  </div>
                              </div>

                              <hr/>

                              <div class="form-group">
                                  <div class="">
                                    <a href="{{url('/redirect')}}" class="btn btn-primary"><i class="fab fa-facebook-square"></i>&nbsp;&nbsp;Register with Facebook</a>
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
