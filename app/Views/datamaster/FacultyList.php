<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><?= $title; ?></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Beranda</a></li>
            <li class="breadcrumb-item active"><?= $subtitle; ?></li>
          </ol>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="row">
      <div class="col-7">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><?= $subtitle; ?></h3>
          </div>
          <div class="card-body">
            <table id="facultytbl" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>
          <div class="card-footer">
            Footer
          </div>
        </div>
      </div>
      <div class="col-5">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Input Fakultas</h3>
          </div>
          <div class="card-body">
            <form action="" role="form">
              <div class="form-group">
                <label for="faculty_name">Nama Fakultas</label>
                <input type="text" class="form-control" id="faculty_name" placeholder="Input Nama Fakultas">
              </div>
            </form>
          </div>
          <div class="card-footer">
            <button type="button" class="btn btn-block bg-gradient-primary">Tambah</button>
          </div>
        </div>
      </div>
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?= $this->endSection(); ?>