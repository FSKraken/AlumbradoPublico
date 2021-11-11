<div id="map"></div>
<a href="javascript:ventana()" class="firo-bottom lg firo-demo-back">Reportar un problema</a>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAzV2K_INKLUT_BmPwTq2WFnmwScLfOJho"></script>

<div class="modal" tabindex="-1" id="ventana">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-body">
        <h3 class="text-primary">Reportar un problema de alumbrado público en Villa de Álvarez</h3>
        <ol class="mt-4 mb-0">
            <li>Ubicar en el mapa la luminaria</li>
            <li>Click en ella para abrir el menu</li>
            <li>Seleccionar la opción de Nuevo Reporte</li>
            <li>Llenar el formulario de la opción de Nuevo Reporte</li>
            <li>Click en el botón de Enviar</li>
            <li>Los detalles del reporte generado y su seguimiento se te enviarán por correo electrónico</li>
        </ol>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal"><i class="i-cancelar"></i> Cerrar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal" tabindex="-1" id="start_reporte">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-body">
        <h3 class="text-primary">Reporte de alumbrado público</h3>

        <h1>L3-3445</h1>
        <p>Calle: Leonel Ramirez Garcia<br>Colonia: Nombre de colonia</p>

        <form method="POST" class="m-0" enctype="multipart/form-data">


<div class="form-group my-3">
<label for="txtReporte">Tipo de Reporte:</label>
<select class="form-select" name="txtReporte" id="txtReporte">
    <option>Apagada</option>
    <option>Prendida durante el día</option>
    <option>Poste dañado</option>
    <option>Sin luminaria</option>
    <option>En mal estado</option>
</select>
</div>

<div class="form-group my-3">
<label for="txtComentario">Comentario:</label>
<textarea type="text" class="form-control" name="txtComentario" id="txtComentario" rows="3"></textarea>
</div>

Nombre: <input type="text" class="form-control" name="txtNombre" placeholder="">
<br>
Telefono: <input type="text" class="form-control" name="txtTelefono" placeholder="Ejemplo 3121111111">

</form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="i-cancelar"></i> Cancelar</button>
        <button type="submit" name="accion" class="btn btn-primary"><i class="i-ok"></i> Enviar reporte</imput>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    var luminarias  = <?php echo json_encode($coordenadas); ?>,
        repositorio = "<?php echo base_url(); ?>/imagenes/";
</script>