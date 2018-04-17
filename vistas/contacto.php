<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>

   <header>
  <figure class="logo">
    <img src="../img/omka.png" alt="OMKA" class="img-responsive">
  </figure>
</header>

<nav>
  <ul>
    <a class="selector" href="../index.php">INICIO</a>
    <a class="selector" href="nosotros.php">NOSOTROS</a>
    <a class="selector"  href="servicios.php">SERVICIOS</a>
    <a class="selector" id="select" href="contacto.php">CONTACTO</a>
  </ul>
</nav>

<div class="openclose">
  <i class="fa fa-bars open" aria-hidden="true"></i>
</div>

<section id="contact">
  <div class="container">
    <div class="well well-sm">
      <h3><strong>Datos de contacto</strong></h3>
    </div>

  <div class="row">
    <div class="col-sm-7 col-md-7">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.4175130739004!2d-93.16979078575676!3d16.7558910251216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ecd9707a46de1f%3A0x5e4444bae7b99526!2s4a.+Nte.+Pte.%2C+Ter%C3%A1n%2C+29050+Tuxtla+Guti%C3%A9rrez%2C+Chis.!5e0!3m2!1ses-419!2smx!4v1523906461570" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
        <p class="txt-info"><i class="fas fa-map-marker-alt " style="color: #57C0D3;"></i> Dirección: Av. 4A NTE PTE #688 C2 entre 5-A y 6A PTE Argentin Col. Teran, Tuxtla Gutierrez, Chiapas. C.P. 29050.</p>
        <p class="txt-info"><i class="fas fa-phone " style="color: #57C0D3;"></i> Teléfono: PENDIENTE</p>
        <p class="txt-info"><i class="fas fa-envelope " style="color: #57C0D3;"></i> Correo: info@limpiezaomka.com</p>
        <p class="txt-info"><i class="fas fa-clock " style="color: #57C0D3;"></i> Horario: Lunes a Viernes de 9 am a 6 pm</p>
      </div>

      <div class="col-sm-5 col-md-5">
          <h4 class="tit-fc"><strong>Formulario de contacto</strong></h4>
        <form onSubmit="return false">
          <div class="form-group">
            <input type="text" id="txtNOMBRE" class="form-control" name="" value="" placeholder="Nombre completo">
          </div>
          <div class="form-group">
            <input type="email" id="txtCORREO" class="form-control" name="" value="" placeholder="Correo">
          </div>
          <div class="form-group">
            <input type="tel" id="txtTELEFONO" class="form-control" name="" value="" placeholder="Teléfono">
          </div>
          <div class="form-group">
            <textarea id="txtCOMENTARIO" class="form-control" name="" rows="3" placeholder="Comentario"></textarea>
          </div>
          <div id="_AJAX_PRE_"></div>
          <button class="btn btn-default" type="submit" name="button" onclick="sendCORREO()">
              <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Enviar
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<span class="ir-arriba"><i class="fa fa-chevron-up" aria-hidden="true"></i></span>
<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script src="../js/menu.js"></script>
<script src="../js/sendCORREO.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/botonarriba.js"></script>
</body>
</html>
