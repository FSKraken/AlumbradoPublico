<div class="container p-5">
    <h3 class="text-primary">Administración</h3>

    <div class="row">
        <div class="col-12 col-md-6">

            <?php if(session("logged")){
                echo "contenido admin";
            }
            else{
            ?>

            <div class="card my-5">
                <div class="card-body">
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">usuario</label>
                        <div class="col-sm-8"><input id="form_usuario" type="text" class="form-control"></div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Password</label>
                        <div class="col-sm-8"><input id="form_password" type="password" class="form-control"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-8 offset-sm-4"><button id="go_login" class="btn btn-primary"><i class="i-llave"></i> Ingresar</button></div>
                    </div>
                </div>
            </div>

            <?php 
            } 
            ?>
        </div>
    </div>
</div>
