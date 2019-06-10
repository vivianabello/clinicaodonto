<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo constant('URL');?>PUBLIC/font/css/fontawesome.css">
  <link rel="stylesheet" href="<?php echo constant('URL');?>PUBLIC/css/styly.css">
  <link rel="stylesheet" href="<?php echo constant('URL');?>PUBLIC/css/bootstrap-grid.css">
  <link rel="stylesheet" href="<?php echo constant('URL');?>PUBLIC/css/bootstrap-reboot.css">
  <link rel="stylesheet" href="<?php echo constant('URL');?>PUBLIC/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="<?php echo constant('URL');?>PUBLIC/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="<?php echo constant('URL');?>PUBLIC/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo constant('URL');?>PUBLIC/css/bootstrap.min.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'
    integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

  <title>Clinica VitalDent</title>
</head>

<body>
  <header>
    <table>
      <tr>
        <th><img src="<?php echo constant('URL');?>/PUBLIC/imagenes/img1.png"></th>
        <th>Llamanos gratis desde <br> tu celular al</th>
        <th>#262</th>
      </tr>
    </table>
  </header>
  <div class="container">
    <?php
          $vista = constant('VISTA');
          $carpeta = constant('CARPETA');
          //require_once "menu.php";
          require_once "$carpeta/index$vista.php";
       ?>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-4 mt-4" ><img src="<?php echo constant('URL');?>PUBLIC/IMAGENES/diente.jpg" style="width: 300px; height:300px;" alt=""></div>
      <div class="col-md-4 mt-4" ><img src="<?php echo constant('URL');?>PUBLIC/IMAGENES/diente2.jpg" style="width: 300px; height:300px;" alt=""></div>
      <div class="col-md-4 mt-4" ><img src="<?php echo constant('URL');?>PUBLIC/IMAGENES/diente3.jpg" style="width: 300px; height:300px;" alt=""></div>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script type="text/javascript" src="<?php echo constant('URL');?>PUBLIC/js/bootstrap.bundle.js"></script>
  <script type="text/javascript" src="<?php echo constant('URL');?>PUBLIC/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="<?php echo constant('URL');?>PUBLIC/js/bootstrap.js"></script>
  <script type="text/javascript" src="<?php echo constant('URL');?>PUBLIC/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

</html>