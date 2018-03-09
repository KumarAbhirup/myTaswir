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
          if (\Request::is('/')) {
            if($user = Auth::user()){
                ?>
                  <script type='text/javascript'>window.top.location='{{url('/home')}}';</script>
                <?php
            } else if(Auth::guest()){
            ?>
                  <a href="{{ url('/') }}">Home</a>
                  <a href="{{ url('/login') }}">Login</a>
                  <a href="{{ url('/register') }}">Register</a>
            <?php
          }
        } else{
              if($user = Auth::user()){
                  ?>
                  <a href="{{ url('/') }}">hey, {{ Auth::user()->fname }}!</a>
                  <a href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                  <?php
              } else if(Auth::guest()){
              ?>
                    <a href="{{ url('/') }}">Home</a>
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
              <?php
                }
          }
          ?>
        </div>
