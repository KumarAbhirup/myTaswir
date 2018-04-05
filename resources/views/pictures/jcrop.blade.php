<!doctype html>
<html lang="{{ app()->getLocale() }}">
    @include('constants.assetCaller')
    @include('constants.headerCaller')
    <link rel="stylesheet" href="css/jquery.Jcrop.min.css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/jquery.Jcrop.min.js"></script>

            <div class="content margin-fall">
                <div class="title m-b-md">
                    <b>Just Crop</b>!
                </div>

                <div class="container my_panel">
                    <div class="panel panel-default">
                        <div class="panel-heading">Crop this Picture.</div>

                        <div class="panel-body">
                            <div class="well">
                              <h3>Crop your Picture...</h3>
                              <img src="<?php echo $picture; ?>" alt="" title="" id="cropimage"/>
                              <?= Form::open() ?>
                              <?= Form::hidden('image', $picname) ?>
                              <?= Form::hidden('x', '', array('id' => 'x')) ?>
                              <?= Form::hidden('y', '', array('id' => 'y')) ?>
                              <?= Form::hidden('w', '', array('id' => 'w')) ?>
                              <?= Form::hidden('h', '', array('id' => 'h')) ?>
                              <?= Form::submit('Publicize!', ['class' => 'btn btn-primary', 'style' => 'margin-top:15px;']) ?>
                              <?= Form::close() ?>
                              <script type="text/javascript">
                                  $(function() {
                                      $('#cropimage').Jcrop({
                                          onSelect: updateCoords,
                                          aspectRatio: 16 / 9
                                      });
                                  });
                                  function updateCoords(c) {
                                      $('#x').val(c.x);
                                      $('#y').val(c.y);
                                      $('#w').val(c.w);
                                      $('#h').val(c.h);
                                  };
                              </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
