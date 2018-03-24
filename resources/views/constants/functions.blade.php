<?php
  function addAvatar()
  {
    if( Auth::user()->avatar == 'NULL' ){
      echo null;
    } else if( Auth::user()->avatar != 'NULL' ){
      ?>
          <img class="sm-profile-pic" src="{{ Auth::user()->avatar }}" title="{{ Auth::user()->name }}" alt="{{ Auth::user()->name }}" />
      <?php
    }
  }
?>
