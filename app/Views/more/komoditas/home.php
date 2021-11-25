<?= $this->extend('layout/template'); ?>

<?= $this->Section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Komoditas</small></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Komoditas</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <section class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-12 border-bottom-0">
          <a href="/tanaman/tambah" class="btn btn-primary mr-2"><i class="fas fa-plus"></i> Tambah Komoditas</a>
        </div>
        <div class="col-md-6 mt-3">
          <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert bg-gradient-info alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h5><i class="icon fas fa-check"></i> Data berhasil <?= session()->getFlashdata('pesan'); ?></h5>
            </div>
          <?php endif; ?>
          <div class="card">
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th style="width: 10px;">#</th>
                    <th>Komoditas</th>
                    <th style="width: 100px"></th>
                  </tr>

                </thead>
                <tbody>
                  <?php $i = 1;
                  foreach ($komoditas as $kom) : ?>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><?= $kom['komoditas']; ?> </td>
                      <td>
                        <div class="btn-group">
                          <a href="/tanaman/edit/" class="btn btn-warning btn-sm" type="button">
                            <i class="fa fa-edit"></i> Edit</a>
                          <a href="/tanaman/hapus/" class="btn btn-danger btn-sm" type="button">
                            <i class="far fa-trash-alt"></i> Hapus</a>
                        </div>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>

          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
  </section>

</div>

<?= $this->endSection(); ?>