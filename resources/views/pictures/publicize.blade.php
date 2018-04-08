<!doctype html>
<html lang="{{ app()->getLocale() }}">
    @include('constants.assetCaller')
    @include('constants.headerCaller')

            <div class="content margin-fall">
                <div class="title m-b-md">
                    Dashboard
                </div>

                <div class="container my_panel">
                  <div class="panel panel-default">
                      <div class="panel-heading">Dashboard</div>

                      <div class="panel-body">
                          @if (session('status'))
                              <div class="alert alert-success">
                                  {{ session('status') }}
                              </div>
                          @endif

                          <div class="ui pointing menu">
                            <a class="item" href="{{ url('/dashboard') }}">
                              Manage
                            </a>
                            <a class="active item" href="{{ url('/pictures/create') }}">
                              Publicize
                            </a>
                          </div>
                          <div class="ui segment">
                            @include('constants.messages')
                            {!! Form::open(array(
                                'action' => 'PictureController@store',
                                'method' => 'POST',
                                'files' => true
                              ))
                            !!}
                              <div class="form-group">
                                {{ Form::label('hashtag', 'HashTag') }}
                                {{ Form::text('hashtag', '', ['placeholder' => 'Eg. #Happiness', 'class' => 'form-control', 'name' => 'hashtag' /*'required'*/]) }}
                              </div>
                              <div class="form-group">
                                {{ Form::label('pubpic', 'Picture to Publicize') }}
                                {{ Form::file('pubpic', ['class' => 'form-control']) }}
                              </div>
                                {{ Form::submit('Publicize', ['class' => 'btn btn-primary']) }}
                            {!! Form::close() !!}
                          </div>
                         </div>
                  </div>
                </div>
            </div>
        </div>
    </body>
</html>
