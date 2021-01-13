<?php require('header.php') ?>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Articles</h1>
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
          <h3 class="card-title">Add Articles</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
           
        <form role="form" action="/adminarticle/postupdate" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <labe>ATitle</label>
                    <input type="text" name="artTitle" value="<?= $articledata->artitle; ?>" class="form-control"  placeholder="Enter Category Name">
                  </div>
                  <!-- <div class="form-group">
                    <labe>ADesc</label>
                    <input type="text" name="artdec" value="<?= $articledata->ardesc; ?>" class="form-control"  placeholder="Enter Category Name">
                  </div> -->
                  <label for="exampleInputFile">Desc</label>
                  <textarea class="form-control textarea" name="artdec"><?= $articledata->ardesc; ?></textarea>
                  </div>
                  <div class="form-group">
                    <label>category_id</label>
                    <input type="text" name="category_id"  value="<?=  $articledata->category_id;  ?>" class="form-control" placeholder="CategoryNumber">
                  </div>
                      <div class="form-group">
                      <img src="<?= Domain_Path; ?>images/<?= $articledata->arimg; ?>" width="100px" height="100px" alt="" />
                    <br>
                    <label>image input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image1" value="<?=  $articledata->arimg;  ?>" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <input type="hidden" name="id" value="<?=  $articledata->id; ?>" />
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



<?php require('footer.php') ?>
