<!doctype html>
<html lang="{{ app()->getLocale() }}">
    @include('constants.assetCaller')
    @include('constants.headerCaller')

            <div class="content margin-fall">
                <div class="title m-b-md">
                    <b>{{config('app.name')}}</b>!
                </div>

                <div class="container my_panel">
                  <div class="panel panel-default">
                      <div class="panel-heading">Publicize your Picture!</div>

                      <div class="panel-body">
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
    </body>
</html>
