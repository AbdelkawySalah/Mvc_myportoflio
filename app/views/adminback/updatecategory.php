<?php require('header.php'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
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
          <h3 class="card-title">Title</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
        <form role="form" action="/admincategory/postupdate" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <labe>CategoryName</label>
                    <input type="text" name="categoryname" value="<?= $categorydata->categoryname;  ?>"
                           class="form-control"  placeholder="Enter Category Name">
                  </div>
                  <div class="form-group">
                    <label>linkname</label>
                    <input type="text" name="categorylink" value="<?= $categorydata->categorylink; ?>"
                           class="form-control" placeholder="Entercategorylink">
                  </div>
                </div>
                <!-- /.card-body -->
                <input type="hidden" name="id" value="<?=  $categorydata->id; ?>" />
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">update</button>
                </div>
              </form>
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



<?php require('footer.php'); ?>
