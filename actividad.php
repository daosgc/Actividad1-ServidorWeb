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
          de trabajo de un desarrollador de software. De Lunes a Viernes el costo por
          hora es de $8 y fin se semana el costo es de $15.
          <br>
          <b>Formato</b> <i>diaSemana-horaInicio-HoraFin</i>
          <br>
          <b>Ejemplo</b> <i>Lun-08:00-13:00;Dom-17:00-19:00</i>
        </p>
      </div>
    </div>
    <?php
      $registros_usuario = "Lun-08:00-13:00;Dom-17:00-19:00";
      ObtenerCostoFactura($registros_usuario);

      function ObtenerRegistroPorDia ($registro)
      {
        $rangosHoras = explode(";", $registro);
        return $rangosHoras;
      }

      function ObtenerCostoHoraSegunDia($dia)
      {
        switch ($dia) {
          case $dia === 'Sab':
            $costo_hora = 15;
            break;
          case $dia === 'Dom':
            $costo_hora = 15;
            break;
          default:
            $costo_hora = 8;
            break;
        }
        return $costo_hora;
      }

      function ObtenerHoras($inicio, $fin)
      {
        $fecha_inicio = "2020-12-08".$inicio;
        $fecha_fin = "2020-12-08".$fin;
        $timestamp_inicio = strtotime($fecha_inicio);
        $timestamp_fin = strtotime($fecha_fin);
        $hour = abs($timestamp_fin - $timestamp_inicio)/(60*60);
        return $hour;
      }

      function ObtenerCostoFactura($data)
      {
        $registros_dia = ObtenerRegistroPorDia($data);
        $costo_factura = 0;
        foreach ($registros_dia as &$registro) {
          $data_formateada = explode("-", $registro);
          $dia = $data_formateada[0];
          $hora_inicio = $data_formateada[1];
          $hora_final = $data_formateada[2];
          $costo_hora = ObtenerCostoHoraSegunDia($dia);
          $horas = ObtenerHoras($hora_inicio, $hora_final);
          $costo_dia = $horas * $costo_hora;
          $costo_factura = $costo_dia + $costo_factura;
          echo "El costo por dia:".$costo_dia."<br>\n";
        }
        echo "Tienes una factura de:".$costo_factura."<br>\n";
      }
    ?>
  </body>
</html>