<html>
  <head>
    <title>Actividad1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Actividad Nº 1</h5>
        <p class="card-text">
          Aplicación para calcular el pago de una factura según el registro de horas
          de trabajo de un desarrollador de software. Pueden ser horas normales o extras.
          <br>
          <b>Formato</b> <i>diaSemana-horaInicio-HoraFin</i>
          <br>
          <b>Ejemplo</b> <i>Lun-08:00-13:00;Mar-17:00-19:00</i>
        </p>
      </div>
    </div>
    <?php
      $costo_hora = 8;
      $costo_hora_extra = 10;

      $primera_variable = "Hola Mundo";
      print("Aqui pondremos el codigo php. $primera_variable");

      function EjemploCompleto ($valor, &$refe, $predet = "dos") {
        $refe = "Juntos, ".$valor. " para ".$predet;
        return $predet;
      }

      $bebida = "café";
      $cuantos = EjemploCompleto($bebida, $cad);

      echo $cad."<br>\n"; //Escribe “Juntos, café para dos”
      echo $cuantos."<br>\n"; //Escribe “dos”
    ?>
  </body>
</html>