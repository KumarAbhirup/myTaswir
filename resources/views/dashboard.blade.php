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
                            <a class="active item" href="{{ url('/dashboard') }}">
                              Manage
                            </a>
                            <a class="item" href="{{ url('/pictures/create') }}">
                              Publicize
                            </a>
                            <a class="item" href="{{ url('/settings') }}">
                              Settings
                            </a>
                            <div class="right menu">
                              <div class="item">
                                <div class="ui transparent icon input">
                                  <input type="text" placeholder="Search HashTag">
                                  <i class="search link icon"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="ui segment">
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
