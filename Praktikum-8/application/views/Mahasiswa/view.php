  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?=$title?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Content Place </li>
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
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="row md-2">
            <div class="col-sm-8">
                <table class="table table-striped">
                    <tr>
                        <td><td>NIM</td><td><?=$mhs->nim?></td></td>
                    </tr>
                    <tr>
                        <td><td>Nama Lengkap</td><td><?=$mhs->nama?></td></td>
                    </tr>
                    <tr>
                        <td><td>Jenis Kelamin</td><td><?=$mhs->gender?></td></td>
                    </tr>
                    <tr>
                        <td><td>TTL</td><td><?=$mhs->tmp_lahir, ",", $mhs->tgl_lahir?></td></td>
                    </tr>
                    <tr>
                        <td><td>IPK</td><td><?=$mhs->ipk?></td></td>
                    </tr>    
                    <tr>
                        <td><td>Program Studi</td><td><?=$mhs->prodi_kode?></td></td>
                    </tr>    
                </table>
            </div>
            <div class="col-sm-4">
                <h4 class="text-center">Foto Diri</h4>
            </div>
          </div>
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
  <!-- /.content-wrapper -->