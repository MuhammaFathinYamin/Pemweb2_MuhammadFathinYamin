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
              <li class="breadcrumb-item active">Daftar Dosen </li>
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
          <h3 class="card-title">Daftar Dosen STT Terpadu Nurul Fikri</h3>

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
        <table class="table ">
 
 <thead>
     <tr>
         <th>No</th>
         <th>NIDN</th>
         <th>Nama</th>
         <th>Gender</th>
         <th>Tempat Lahir</th>
         <th>Tanggal Lahir</th>
         <th>Pendidikan</th>
     </tr>
 </thead>
 <tbody>
     <?php
     $nomor = 1;
     foreach ($all_dosen as $dsn) {
     ?>
         <tr>
             <td><?= $nomor ?></td>
             <td><?= $dsn->nidn ?></td>
             <td><?= $dsn->nama ?></td>
             <td><?= $dsn->gender ?></td>
             <td><?= $dsn->tgl_lahir ?></td>
             <td><?= $dsn->tmp_lahir ?></td>
             <td><?= $dsn->pendidikan ?></td>
         </tr>
     <?php
         $nomor++;
     }
     ?>
 </tbody>
</table>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
        Muhammad Fathin Yamin - 0110221182
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->