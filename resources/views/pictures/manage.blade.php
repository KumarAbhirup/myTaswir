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
                      <div class="panel-heading">Your Pictures</div>

                      <div class="panel-body">
                        @include('constants.messages')

                        <div class="grid">
                          @if (count($pictures)>0)
                            @foreach ($pictures as $picture)
                              <div class="well">
                                <h3>{{ $picture->hash }}</h3>
                                <img src="{{ asset('storage/pubpics/'.$picture->pubpic) }}" alt="{{ $picture->hash }}" title="{{ $picture->hash }}" style="width:100%;" />
                                 {!!Form::open(['action' => ['PictureController@destroy', $picture->id], 'method' => 'POST', 'style' => 'margin-top:20px;'])!!}
                                  {{Form::hidden('_method', 'DELETE')}}
                                  {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                 {!! Form::close() !!}
                              </div>
                            @endforeach
                          @else
                            You didn't publicized any pictures yet.
                          @endif
                        </div>

                      </div>
                  </div>
                </div>

            </div>
        </div>
    </body>
</html>
