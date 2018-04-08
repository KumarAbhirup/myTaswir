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
                        <div class="panel-heading">Welcome to the PicWorld!</div>

                        <div class="panel-body">
                            @include('constants.messages')

                            <div class="grid">
                              @if (count($pictures)>0)
                                @foreach ($pictures as $picture)
                                  <div class="well">
                                    <h3>{{ $picture->hash }}</h3>
                                    <img src="{{ asset('storage/pubpics/'.$picture->pubpic) }}" alt="{{ $picture->hash }}" title="{{ $picture->hash }}" style="width:100%;" />
                                    <div class="date">
                                      {{ $picture->created_at->format('d M Y') }}
                                    </div>
                                    <div class="score-counter">
                                      <a class="score duke like"><i class="fas fa-chess-queen"></i><span class="magnitude">234</span></a>
                                      <a class="score ditch like"><i class= "fas fa-frown"></i><span class="magnitude">87</span></a>
                                      <li class="score user">
                                        {{ TaswirPublicizer($picture->user_id, 'avatar', '25') }}
                                      </li>
                                    </div>
                                  </div>
                                @endforeach
                              @else
                                No pictures found.
                              @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <script>
          var token = '{{ Session::token() }}';
          var urlLike = '{{ route('like') }}';
        </script>
        <script src="{{ asset('js/duke.js') }}"></script>

    </body>
</html>
