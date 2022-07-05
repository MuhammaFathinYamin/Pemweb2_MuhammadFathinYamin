  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Dosen</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dosen</li>
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
          <h1>Daftar Dosen STT Terpadu Nurul Fikri</h1>
          <table class="table">
            <thead class="text-center">
              <tr>
                <th>No</th><th>Kode</th><th>Nama</th><th>Geder</th><td>TTL</td><td>Pendidikan Akhir</td><td>Prodi</td>
              </tr>
            </thead>
            <tbody class="text-center">
              <?php
                $nomor = 1;
                foreach($list_dosen as $row){
              ?>
                <tr>
                  <td><?=$nomor?></td>
                  <td><?=$row->nind?></td>
                  <td><?=$row->nama?></td>
                  <td><?=$row->gender?></td>
                  <td><?=$row->tmp_lahir,"," ,$row->tgl_lahir?></td>
                  <td><?=$row->pendidikan_akhir?></td>
                  <td><?=$row->prodi_kode?></td>
                </tr>
              <?php
                  $nomor++;
                }
              ?>
            </tbody>
          </table>
          <a class="btn btn-primary" href="<?= base_url('index.php/prodi/create')?>" role="button">Create Data</a>
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