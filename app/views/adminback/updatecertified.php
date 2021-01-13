<?php    require("header.php")    ?>


   
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Certificat</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Certified Page</li>
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
          <h3 class="card-title">update certificat</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
           
        <form role="form" action="/admincertif/postupdate" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <labe>CertifiTitle</label>
                    <input type="text" name="certTitle" value="<?= $certdata->cert_tit; ?>" class="form-control"  placeholder="Enter Category Name">
                  </div>
                      <div class="form-group">
                      <img src="<?= Domain_Path; ?>images/<?= $certdata->cert_img; ?>" width="100px" height="100px" alt="" />
                    <br>
                    <label>image input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image1" value="<?=  $certdata->cert_img;  ?>" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <input type="hidden" name="id" value="<?=  $certdata->id; ?>" />
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">update</button>
                </div>
              </form>

        </div>
        <!-- /.card-body -->

<?php    require("footer.php")    ?>