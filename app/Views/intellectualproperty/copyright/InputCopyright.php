<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><?= $subtitle; ?></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card card-primary">
                                        <div class="card-header">
                                            <h3 class="card-title">Informasi Umum</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <!-- form start -->
                                        <form role="form">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="registration_number">Nomor Permohonan</label>
                                                    <input type="text" class="form-control" id="registration_number" placeholder="Nomor Pendaftaran ...">
                                                </div>
                                                <div class="form-group">
                                                    <label for="copyrigth_title">Judul</label>
                                                    <textarea class="form-control" id="copyrigth_title" rows="3" placeholder="Judul Paten ..."></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="copyright_type">Tipe Ciptaan</label>
                                                    <input type="text" class="form-control" id="copyright_type" placeholder="Tipe Ciptaan ...">
                                                </div>
                                                <div class="form-group">
                                                    <label for="recording_number">Nomor Pencatatan</label>
                                                    <input type="text" class="form-control" id="recording_number" placeholder="Tipe Ciptaan ...">
                                                </div>
                                                <div class="form-group">
                                                    <label for="year">Tahun</label>
                                                    <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                                                        <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker4" />
                                                        <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card-body -->
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card card-info">
                                        <div class="card-header">
                                            <h3 class="card-title">Daftar Anggota</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body p-0">
                                            <table class="table table-striped" id="memberTable">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 10px">No.</th>
                                                        <th>Nama</th>
                                                        <th>Fakultas</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1.</td>
                                                        <td>Muhammad Syaiful Aliim, S.T., M.T.</td>
                                                        <td>Teknik</td>
                                                        <td>Ketua</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="card-footer">
                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-addmember" style="float: right;">Tambah Anggota</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- modal add member -->
                            <div class="modal fade" id="modal-addmember">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Default Modal</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="card card-primary">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Detail Anggota Paten</h3>
                                                        </div>
                                                        <div class="card-body table-responsive p-0" style="height: 360px;">
                                                            <table class="table table-head-fixed text-nowrap tbl_member">
                                                                <thead>
                                                                    <tr>
                                                                        <th style="width: 10px">No.</th>
                                                                        <th>Gelar Depan</th>
                                                                        <th>Nama</th>
                                                                        <th>Gelar Belakang</th>
                                                                        <th>Fakultas</th>
                                                                        <th>Aksi</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>1.</td>
                                                                        <td>Prof. Dr.Ing.</td>
                                                                        <td>Retno Supriyanti</td>
                                                                        <td>S.T., M.T.</td>
                                                                        <td>Teknik</td>
                                                                        <td><button class="btn btn-block btn-danger btn-flat btn_row_delete">Hapus</button></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="card card-success">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Form Tambah Anggota</h3>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>Gelar Depan</label>
                                                                        <select class="form-control">
                                                                            <option></option>
                                                                            <option>Dr.Ing</option>
                                                                            <option>Dr.Eng</option>
                                                                            <option>Prof. Dr.Ing</option>
                                                                            <option>Prof. Dr.Eng</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="dol-sm-6">
                                                                    <div class="form-group">
                                                                        <label>Gelar Belakang</label>
                                                                        <select class="form-control">
                                                                            <option></option>
                                                                            <option>S.T.</option>
                                                                            <option>S.T., M.T.</option>
                                                                            <option>Ph.D</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Nama Lengkap</label>
                                                                <input type="text" class="form-control" placeholder="Nama Lengkap">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Fakultas</label>
                                                                <select class="form-control">
                                                                    <option>Kedokteran</option>
                                                                    <option>Teknik</option>
                                                                    <option>Pertanian</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer">
                                                            <button class="btn btn-success btn_row_add" style="float: right;" onclick="">Tambah Anggota</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                            <!-- /.modal add member -->
                            <!-- /.card-body -->
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-edit"></i>
                                        Dokumen Paten
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true">Deskripsi</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill" href="#custom-content-below-profile" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">Surat Permohonan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-content-below-messages-tab" data-toggle="pill" href="#custom-content-below-messages" role="tab" aria-controls="custom-content-below-messages" aria-selected="false">Surat Masuk</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-content-below-settings-tab" data-toggle="pill" href="#custom-content-below-settings" role="tab" aria-controls="custom-content-below-settings" aria-selected="false">Surat Keluar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-content-below-settings-tab" data-toggle="pill" href="#custom-content-below-settings" role="tab" aria-controls="custom-content-below-settings" aria-selected="false">Sertifikat Paten</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-content-below-settings-tab" data-toggle="pill" href="#custom-content-below-settings" role="tab" aria-controls="custom-content-below-settings" aria-selected="false">Sertifikat Pemeliharaan</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="custom-content-below-tabContent">
                                        <div class="tab-pane fade show active" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="card-tools">
                                                        <div class="input-group input-group-sm" style="width: 150px;">
                                                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                                            <div class="input-group-append">
                                                                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body table-responsive p-0">
                                                    <table class="table table-hover text-nowrap">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Nama Dokumen</th>
                                                                <th>Tanggal & Jam Input</th>
                                                                <th>Tanggal Ubah</th>
                                                                <th>Tanggal Hapus</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>

                                                            </tr>
                                                            <tr>

                                                            </tr>
                                                            <tr>

                                                            </tr>
                                                            <tr>

                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- /.card-body -->
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-content-below-profile" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">

                                        </div>
                                        <div class="tab-pane fade" id="custom-content-below-messages" role="tabpanel" aria-labelledby="custom-content-below-messages-tab">

                                        </div>
                                        <div class="tab-pane fade" id="custom-content-below-settings" role="tabpanel" aria-labelledby="custom-content-below-settings-tab">

                                        </div>
                                    </div>
                                    <div class="tab-custom-content">
                                        <p class="lead mb-0">Custom Content goes here</p>
                                    </div>
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<?= $this->endSection(); ?>