<?php
include_once('includes/header.php');
?>
        
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Planes</h1>
    </div>
    
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        Formulario
        </div>
        <div class="card-body">
                  <!-- Page Heading -->
          <form action="/action_page.php" class="was-validated">
  <div class="form-group">
    <label for="uname">Username:</label>
    <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember" required> I agree on blabla.
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Check this checkbox to continue.</div>
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
    </div>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-body">
                    <form action="save_task.php" method="POST">
                        <div class="form-group">
                         <input type="text" name="title" class="form-control" placeholder="Task Title" autofocus="task name">
                        </div>
                        <div class="form-group">
                        <textarea name="description"  rows="2" class ="form-control" placeholder="task description"></textarea>
                        </div>
                        <input type="submit" class="btn btn-success btn-block" value="Guardar" name="save_task">
                    </form>
                </div>
            </div>
            <div class="col-md-8">
            <table class="table table-bordered">
            <thead>
                <th>Img</th>
                <th>Tipo</th>
              </thead>
            <tbody>
                <?php $query = "SELECT * FROM task";
                    $result_tasks = mysqli_query($conn,$query);
                        while($row = mysqli_fetch_array($result_tasks)) {?>
                            <tr>
                                <td><?php echo $row['title'];?></td>
                                <td><?php echo $row['description'];?></td>
                                <td><?php echo $row['created_at'];?></td>
                                <td><a href="edit_task.php?id=<?php echo $row['id'];?>" class ="btn btn-secondary"><i class="fas fa-marker"></i></a>
                                <a href="delete_task.php?id=<?php echo $row['id'];?>" class ="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                
                                </td>
                            </tr>
                    <?php } ?>
             </tbody>
            </table>
            </div>
        </div>
    </div>


<?php
include_once('includes/footer.php');
?>
