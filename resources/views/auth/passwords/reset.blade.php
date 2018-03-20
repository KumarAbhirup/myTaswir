<!doctype html>
<html lang="{{ app()->getLocale() }}">
    @include('constants.assetCaller')
    @include('constants.headerCaller')

                <div class="content margin-fall">
                    <div class="title m-b-md">
                        Password Reset
                    </div>
                    <div class="links">
                        <a href="https://facebook.com/streamduck" target="_blank">Facebook</a>
                        <a href="https://twitter.com/kumar_abhirup" target="_blank" title="_blank">Twitter</a>
                        <a href="https://youtube.com/c/IQubex" target="_blank">YouTube</a>
                        <a href="https://github.com/KumarAbhirup/mytaswir" target="_blank">GitHub</a>
                    </div>
                    <div class="container my_panel">
                      <div class="panel panel-default">
                          <div class="panel-heading">Reset Password</div>

                          <div class="panel-body">
                              <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
                                  {{ csrf_field() }}

                                  <input type="hidden" name="token" value="{{ $token }}">

                                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                      <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                      <div class="col-md-6">
                                          <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

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

                                  <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                      <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                                      <div class="col-md-6">
                                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                          @if ($errors->has('password_confirmation'))
                                              <span class="help-block">
                                                  <strong>{{ $errors->first('password_confirmation') }}</strong>
                                              </span>
                                          @endif
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <div class="">
                                          <button type="submit" class="btn btn-primary">
                                              Reset Password
                                          </button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                    </div>
