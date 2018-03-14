<body>
  <?php
    if (\Request::is('/')) {
      ?>
        <div class="flex-center position-ref full-height">
      <?php
    } else{
      ?>
        <div class="section-padding-100 position-ref full-height">
      <?php
    }
  ?>
        <div class="top-right links">
          <?php
              if($user = Auth::user()){
                  ?>
                  <a href="{{ url('/home') }}">Hey, {{ Auth::user()->name }}!</a>
                  <a href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
                  <?php
              } else if(Auth::guest()){
              ?>
                    <a href="{{ url('/') }}">Home</a>
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
              <?php
              }
          ?>
        </div>
