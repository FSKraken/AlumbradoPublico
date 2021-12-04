<div class="container p-5">
    <h3 class="text-primary">Administración</h3>
    <i class="i-usuario"></i> <?php echo session("logged"); ?>

    <nav class="mt-3">
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <button class="nav-link active" id="nav-reporte-tab" data-bs-toggle="tab" data-bs-target="#nav-reporte" type="button" role="tab" aria-controls="nav-reporte" aria-selected="true"><i class="i-pin text-primary"></i> Reportes abiertos</button>
        <button class="nav-link" id="nav-csv-tab" data-bs-toggle="tab" data-bs-target="#nav-csv" type="button" role="tab" aria-controls="nav-csv" aria-selected="false"><i class="i-pin text-primary"></i> Cargar CSV</button>
    </div>
    </nav>

    <div class="card mb-5" style="border-radius: 0 0 5px 5px; border-top:none"><div class="card-body" style="border-top:none">
        <div class="tab-content mb-5" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-reporte" role="tabpanel" aria-labelledby="nav-reporte-tab">
                <table class="table striped display">
                    <thead><tr><th>saas</th><th>saas</th><th>saas</th><th>saas</th><th>saas</th><th>asdas</th></tr></thead>
                    <tbody>
                    <tr><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td class="text-end"><a href="javascript:open_reporte(1)"><i class="i-lupa"></i></a></td></tr>
                    <tr><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td class="text-end"><a href="javascript:open_reporte(1)"><i class="i-lupa"></i></a></td></tr>
                    <tr><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td class="text-end"><a href="javascript:open_reporte(1)"><i class="i-lupa"></i></a></td></tr>
                    <tr><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td class="text-end"><a href="javascript:open_reporte(1)"><i class="i-lupa"></i></a></td></tr>
                    </tbody>
                </table>
            </div>

            <div class="tab-pane fade" id="nav-csv" role="tabpanel" aria-labelledby="nav-csv-tab">
                <?php if($zona == "csv" && $data) echo "<div>{$data} Luminarias agregadas</div>"; ?>
                <form method="POST" action="<?php echo base_url("/go/cargaCSV") ?>"  enctype="multipart/form-data">
                    <input value="" name="csv_file" type="file" class="form-control"><br>
                    <button type="submit" class="btn btn-primary"><i class="i-ok"></i> Carga CSV</button>
                </form>
            </div>            
        </div>
    </div></div>

    <a class="btn btn-primary" href="<?php echo base_url(); ?>/go/admin_logout"><i class="i-cerrado"></i> Cerrar sesión</a>
</div>

<script type="text/javascript">
    function open_reporte(id) {
        $('#detalles_reporte').modal('show');
    }
</script>


<div class="modal" tabindex="-1" id="detalles_reporte">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Reporte # 1</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      xxx<br>xxx<br>xxx<br>xxxxx xxx<br>xxx<br>xxx<br>xxxxx xxx<br>xxx<br>xxx<br>xxxxx xxx<br>xxx<br>xxx<br>xxxxx xxx<br>xxx<br>xxx<br>xxxxx xxx<br>xxx<br>xxx<br>xxxxx
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Guardar cambios</button>
      </div>
    </div>
  </div>
</div>