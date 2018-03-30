<?php

  use App\Picture;
  use App\User;

  function addAvatar($size)
  {
    $sizepx = $size.'px';
    if( Auth::user()->avatar == 'NULL' ){
      ?>
        <img class="profile-pic" src="{{ asset('img/user.png') }}" title="{{ Auth::user()->name }}" alt="{{ Auth::user()->name }}" style="width:<?php echo $sizepx; ?>;height:<?php echo $sizepx; ?>;" />
      <?php
    } else if( Auth::user()->avatar != 'NULL' ){
      ?>
          <img class="profile-pic" src="{{ Auth::user()->avatar }}" title="{{ Auth::user()->name }}" alt="{{ Auth::user()->name }}" style="width:<?php echo $sizepx; ?>;height:<?php echo $sizepx; ?>;" />
      <?php
    }
  }

  function TaswirPublicizer($userID, $attribute, $size = '0')
  {
    $user = User::find($userID);
    if($attribute == 'avatar'){
      $img = $user->avatar;
      $name = $user->name;
      $sizepx = $size.'px';
      if ($img == 'NULL') {
        ?>
          <img class="profile-pic" src="{{ asset('img/user.png') }}" title="<?php echo $name; ?>" alt="<?php echo $name; ?>" style="width:<?php echo $sizepx; ?>;height:<?php echo $sizepx; ?>;" />
        <?php
      } else {
        ?>
          <img class="profile-pic" src="<?php echo $img; ?>" title="<?php echo $name; ?>" alt="<?php echo $name; ?>" style="width:<?php echo $sizepx; ?>;height:<?php echo $sizepx; ?>;" />
        <?php
      }
    } else{
      echo $user->$attribute;
    }
  }
