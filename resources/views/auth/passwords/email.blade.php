<!doctype html>
<html lang="{{ app()->getLocale() }}">
    @include('constants.assetCaller')
    @include('constants.headerCaller')

                <div class="content">
                    <div class="title m-b-md">
                        Enter your Email
                    </div>
                    <div class="links">
                        <a href="https://facebook.com/streamduck" target="_blank">Facebook</a>
                        <a href="https://twitter.com/kumar_abhirup" target="_blank" title="_blank">Twitter</a>
                        <a href="https://youtube.com/c/IQubex" target="_blank">YouTube</a>
                        <a href="https://github.com/KumarAbhirup/streamduck" target="_blank">GitHub</a>
                    </div>
                    <div class="container my_panel">
                      <div class="row">
                          <div class="col-md-8 col-md-offset-2">
                              <div class="panel panel-default">
                                  <div class="panel-heading">Reset Password</div>

                                  <div class="panel-body">
                                      @if (session('status'))
                                          <div class="alert alert-success">
                                              {{ session('status') }}
                                          </div>
                                      @endif

                                      <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                                          {{ csrf_field() }}

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

                                          <div class="form-group">
                                              <div class="col-md-6 col-md-offset-4">
                                                  <button type="submit" class="btn btn-primary">
                                                      Send Password Reset Link
                                                  </button>
                                              </div>
                                          </div>
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </div>
                    </div>
