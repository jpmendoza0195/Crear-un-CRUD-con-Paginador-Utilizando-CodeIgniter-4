<?= $this->extend('template/template_customer'); ?>

<!--panel contenido-->
<?= $this->section('content'); ?>

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Crear Cliente</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Clientes</a></li>
          <li class="breadcrumb-item active">Crear</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<section class="content">
    <div class="row">
        <div class="col-12">
            <form method="POST" action="<?= site_url('create') ?>">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="first_name" class="col-sm-2 col-form-label">Nombre: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="first_name" name="first_name"> 
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="form-group row">
                        <label for="last_name" class="col-sm-2 col-form-label">Apellido: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="last_name" name="last_name">
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Correo Electronico: </label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="form-group row">
                        <label for="gender" class="col-sm-2 col-form-label">Genero: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="gender" name="gender">
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="form-group row">
                        <label for="ip_address" class="col-sm-2 col-form-label">direccion: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="ip_address" name="ip_address">
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="form-group row">
                        <label for="phone" class="col-sm-2 col-form-label">Telefono: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="phone" name="phone">
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-info">Agregar</button>
                    <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>