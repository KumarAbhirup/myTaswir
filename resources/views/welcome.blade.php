<!doctype html>
<html lang="{{ app()->getLocale() }}">
    @include('constants.assetCaller')
    @include('constants.headerCaller')

            <div class="content">
                <div class="title m-b-md">
                    <b>{{config('app.name')}}</b>!
                </div>

                <div class="links">
                    <a href="https://facebook.com/streamduck" target="_blank">Facebook</a>
                    <a href="https://twitter.com/kumar_abhirup" target="_blank" title="_blank">Twitter</a>
                    <a href="https://youtube.com/c/IQubex" target="_blank">YouTube</a>
                    <a href="https://github.com/KumarAbhirup/mytaswir" target="_blank">GitHub</a>
                </div>

                <div class="container my_panel">
                  <div class="row">
                      <div class="col-md-8 col-md-offset-2">
                          <div class="panel panel-default">
                              <div class="panel-heading">Welcome to the PicWorld!</div>

                              <div class="panel-body">
                                  @if (session('status'))
                                      <div class="alert alert-success">
                                          {{ session('status') }}
                                      </div>
                                  @endif

                                  <div class="ui four column grid">
                                    <div class="column">
                                      <div class="ui segment">
                                        <img src="http://via.placeholder.com/140x200" />
                                      </div>
                                      <div class="ui segment">
                                        <img src="http://via.placeholder.com/140x200" />
                                      </div>
                                      <div class="ui segment">
                                        <img src="http://via.placeholder.com/140x200" />
                                      </div>
                                    </div>
                                    <div class="column">
                                      <div class="ui segment">
                                        <img src="http://via.placeholder.com/140x200" />
                                      </div>
                                      <div class="ui segment">
                                        <img src="http://via.placeholder.com/140x200" />
                                      </div>
                                      <div class="ui segment">
                                        <img src="http://via.placeholder.com/140x200" />
                                      </div>
                                    </div>
                                    <div class="column">
                                      <div class="ui segment">
                                        <img src="http://via.placeholder.com/140x200" />
                                      </div>
                                      <div class="ui segment">
                                        <img src="http://via.placeholder.com/140x200" />
                                      </div>
                                      <div class="ui segment">
                                        <img src="http://via.placeholder.com/140x200" />
                                      </div>
                                    </div>
                                    <div class="column">
                                      <div class="ui segment">
                                        <img src="http://via.placeholder.com/140x200" />
                                      </div>
                                      <div class="ui segment">
                                        <img src="http://via.placeholder.com/140x200" />
                                      </div>
                                      <div class="ui segment">
                                        <img src="http://via.placeholder.com/140x200" />
                                      </div>
                                    </div>
                                  </div>

                              </div>
                          </div>
                      </div>
                  </div>
                </div>

            </div>
        </div>
    </body>
</html>
