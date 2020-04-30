<?php
ob_start();
include_once('includes/header.php');
include_once('../negocio/NUsuario.php');
$usuarios = new NUsuario;
?>  
    <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">usuarios</h1>
          </div>

          
          <div class="card shadow mb-4">
        <div class="card-header py-3">
        Agregar
        </div>
        <div class="card-body">
                  


             <!-- Page Heading -->
          <form action="../negocio/upload_image.php" class="was-validated" method = "POST" method="post" enctype="multipart/form-data">
          <div class="form-group">
    <label for="uname">Tipo</label>
    <input type="text" class="form-control" id="uname" placeholder="Enter username" name="nombre" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>

  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="fileToUpload" name="fileToUpload" aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="fileToUpload">Choose file</label>
  </div>
</div>

  <button type="submit" class="btn btn-primary">Submit</button>

</div>
</div>
</form>



          </div>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Usuarios</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Email</th>
                      <th>Fecha</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                  
                  <?php foreach($usuarios->getAll() as $usuario): ?>
    <tr>
      <td><?php echo $usuario->nombre?></td>
      <td><?php echo $usuario->email?></td>
      <td><?php echo $usuario->fecha?></td>
      <td><a href="index.php?controller=animal&action=showById&id=<?php echo $animal->id; ?>">Editar</a>
      <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" 
      href="../negocio/NUsuario.php?delete_id=<?php echo($usuario->id); ?>">Eliminar</a></td>
    </tr>
  <?php endforeach;?>
                    <tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>



          
<?php
include_once('includes/footer.php');
?>
