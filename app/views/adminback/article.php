<?php require("header.php")   ?>


 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Article Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Article Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><a href="add" class="btn btn-danger">Add</a></h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
        <table class="table">
            <thead>
              <tr>
                <th>article_Title</th>
                <th>article_dec</th>
                <th>image</th>
                <th>categoryName</th>
                <th>email</th>
                <th>Delete</th>
                <th>Update</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($data as $c):  ?>
              <tr>
                <td><?=  $c['artitle']; ?></td>
                <td><?=  $c['ardesc']; ?></td>
                <td><img src="<?= Domain_Path; ?>images/<?= $c['arimg']; ?>" width="100px" height="100px" /></td>
                <td><?= $c['categoryname']; ?></td>
                <td><?= $c['email']; ?></td>
                <td><a href="delete/<?=  $c['id'];  ?>" class="btn btn-success">Delete</td>
                <td><a href="update/<?=  $c['id']; ?>" class="btn btn-warning">Update</td>
              </tr>
              <?php  endforeach;  ?>
             </tbody>
          </table>  
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>


<?php  require("footer.php")    ?>