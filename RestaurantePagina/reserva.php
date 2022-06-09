<!DOCTYPE html>

<html lang="es">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="build/css/normalize.css">
    <link rel="stylesheet" href="build/css/estilos.css">
    <link rel="icon" href="build/img/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&family=Sofia&display=swap" rel="stylesheet">

    <title>Poké Station</title>
    </head>

  <body>
      <?php
        if(isset($_POST['Enviar'])){#name de submit
            $_nombre=$_POST['nombre'];
            $_email=$_POST['email'];
            $_cantidad=$_POST['cantidad'];
            $_hora=$_POST['hora'];
            $_fecha=$_POST['fecha'];
            include("conexion.php");
            $sql="insert into reserva(nombre,email,cantidad,hora,fecha)
            values('".$nombre."','".$email."','".$cantidad."','".$hora."','".$fecha."')";
            $resultado=mysqli_query($conexion,$sql);
            if($resultado){
                echo "<script language=''JavaScript'>
                alert('Los datos fueron ingresados correctamente');
                location.assign('lista.php');</script>";
            }
            else{
                echo "<script language=''JavaScript'>
                alert('ERROR: Los datos NO fueron ingresados correctamente');
                location.assign('lista.php');</script>";
            }
            mysqli_close($conexion);
        }else{
      ?>
      <!--Empezar a trabajar-->
    <div class="header">
      <div class="header__contenedor contenedor">

        <div class="header__meta">
          <div class="header__logo">
            <img src="build/img/logo.png" alt="Logo">
          </div>

          <div class="header__contenedor-titulo">
            <h1 class="header__titulo">Poké Station</h1>
          </div>
        </div>

        <div class="header__nav">
          <div class="navegacion">
            <a href="index.html" class="navegacion__enlaces">Inicio</a>
            <a href="conocenos.html" class="navegacion__enlaces">Conocenos</a>
            <a href="galeria.html" class="navegacion__enlaces">Galeria</a>
            <a href="reserva.html" class="navegacion__enlaces">Reserva</a>
          </div>
        </div>
      </div>

    </div>

    <main class="contenedor reserva">
      <h2 class="reserva__titulo">Reserva tu Mesa</h2>

      <div class="reserva__formulario-contenedor">
        <form  class="reserva_formulario" action="<?_SERVER['PHP_SELF']?>" method="post"><!--Permite enviar desde este archivo-->
          <div class="campo">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" placeholder="Tu Nombre" autocomplete="name" required name="nombre"><!--agregar name a los campos-->
          </div>

          <div class="campo">
            <label for="email">Email:</label>
            <input type="email" id="email" placeholder="Tu Email" autocomplete="email" required name="email"><!--agregar name a los campos-->
          </div>

          <div class="campo">
            <label for="nombre">Numero de Personas</label>
            <select name="cantidad" id=""><!--agregar name a los campos-->
              <option value="" disabled selected>-- Seleccione --</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="mas">+4</option>
            </select>
          </div>

          <div class="campo">
            <label for="hora">Hora:</label>
            <input type="time" id="hora" name="hora"><!--agregar name a los campos-->
          </div>

          <div class="campo">
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha"><!--agregar name a los campos-->
          </div>

          <div class="campo">
            <input type="submit" value="Enviar" name="Enviar">
          </div>
        </form>
        <?php
            }
        ?><!--cerramos else-->

        <div class="reserva__imagen-container">
          <div class="reserva__imagen">
            <img src="build/img/logo-mobile-blanco.png" alt="Logo Pokémon Station">
          </div>
        </div>
      </div>
    </main>

    <footer class="footer">
      <div class="footer__contacto">

                
        <!-- <img src="https://svgsilh.com/svg/2027398.svg" alt="logo"> -->
                
        <div class="navegacion">
          <a href="index.html" class="navegacion__enlaces">Inicio</a>
          <a href="conocenos.html" class="navegacion__enlaces">Conocenos</a>
          <!-- <a href="#" class="navegacion__enlaces">Galeria</a> -->
          <a href="reserva.html" class="navegacion__enlaces">Reserva</a>
        </div>
      </div>

      <div class="footer__copy">
        <div class="footer__frase">
          <p>facturacion</p>
        </div>

        <div class="footer__frase">
          <p>Map Sitio</p>
        </div>

        <div class="footer__frase">
          <p>Terminos y Condiciones</p>
        </div>

        <div class="footer__frase">
          <p>Avisos de Privacidad</p>
        </div>

        <div class="footer__frase">
          <p> &#169 2022 Poké Station</p>
        </div>
      </div>


      <div class="footer__redes-sociales">
        <div class="footer__red-social">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Facebook_icon_2013.svg/1200px-Facebook_icon_2013.svg.png" alt="">
          <p>Siguenos en Facebook</p>
        </div>

        <div class="footer__red-social">
          <img src="data:image/png;base64,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" alt="">
          <p>Siguenos en Twitter</p>
        </div>

        <div class="footer__red-social">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/768px-Instagram_logo_2016.svg.png" alt="">
          <p>Siguenos en Instagram</p>
        </div>
      </div>
    </footer>
  </body>

</html>