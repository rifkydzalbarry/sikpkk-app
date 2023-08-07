<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h3 class="mb-2 text-gray-800">Tables Cek Kehamilan</h3>
  <div class="row nt-2">
    <div class="col-4">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Form Cek Kehamilan</h6>
        </div>
        <div class="card-body">
          <form action="<?= base_url('kehamilan/tambahCekKehamilan') ?>" method="post">
            <div class="form-group" hidden>
              <input type="text" class="form-control" name="id_ibu" id="" value="<?= $kehamilan['id_ibu'] ?>" hidden>
            </div>
            <div class="form-group">
              <label><strong>NIK - Nama Lengkap</strong></label>
              <input type="text" name="" class="form-control" value="<?= $kehamilan['nik'] ?> - <?= $kehamilan['nama_lgkp'] ?>" placeholder="" disabled>
              <!-- <label label for="hbkel"><strong>Nomor Induk Kependudukan</strong></label>
                <select class="form-control" name="id_ibu" id="" disabled>
                  <option hidden>--Pilih Data Keluarga--</option>
                  <?php foreach ($kehamilan as $hml) : ?>
                    <option value="<?= $hml['nik'] ?>" selected><?= $hml['nik'] ?> - <?= $hml['nama_lgkp'] ?></option>
                  <?php endforeach; ?>
                </select> -->
            </div>
            <div class="form-group">
              <label for="tgl_cek"><strong>Tanggal Pemeriksaan</strong></label>
              <input type="date" class="form-control" name="tgl_cek" id="" value="<?= set_value('tgl_cek') ?>">
            </div>
            <div class="form-group">
              <label for="bb"><strong>Berat Badan</strong></label>
              <input type="text" class="form-control" name="bb" id="" value="<?= set_value('bb') ?>">
            </div>

            <div class="form-group">
              <label for="tb"><strong>Tinggi Badan</strong></label>
              <input type="text" class="form-control" name="tb" id="" value="<?= set_value('tb') ?>">
            </div>
            <div class="form-group">
              <label for="kondisi"><strong>Kondisi</strong></label>
              <textarea class="form-control" name="kondisi" id="" cols="5" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <button type="reset" class="btn btn-danger">Reset</button>
          </form>
        </div>
      </div>
    </div>
    <!-- DataTales Example -->
    <div class="col-8">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Data Cek Kehamilan
          </h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <?php if ($this->session->flashdata('alert')) : ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Cek Kehamilan <strong>Berhasil!</strong> <?= $this->session->flashdata('alert') ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <?php endif; ?>
            <table class="table table-bordered" id="dataTable" cellspacing="0">
              <thead>
                <tr class="text-center">
                  <th>No</th>
                  <th>Tanggal</th>
                  <th>BB</th>
                  <th>TB</th>
                  <th>Kondisi</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1;
                foreach ($hamil as $hml) : ?>
                  <?php if ($hml['id_ibu'] == $kehamilan['id_ibu']) { ?>
                    <tr>
                      <td><?= $no++  ?></td>
                      <td><?= $hml['tgl_cek']  ?></td>
                      <td><?= $hml['bb']  ?></td>
                      <td><?= $hml['tb'] ?></td>
                      <td><?= $hml['kondisi']  ?></td>
                      <td class="text-center">
                        <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal<?= $hml['id_cek'] ?>">
                          <i class="fas fa-fw fa-pencil-alt"></i>
                        </button>
                        <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delModal<?= $hml['id_cek'] ?>">
                          <i class="fas fa-fw fa-trash"></i>
                        </button>
                      </td>
                    </tr>
                  <?php } ?>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Kegiatan
        </h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <?php if ($this->session->flashdata('alert')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              Data Kegiatan <strong>Berhasil!</strong> <?= $this->session->flashdata('alert') ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <?php endif; ?>
          <table class="table table-bordered" id="dataTable" cellspacing="0">
            <thead>
              <tr class="text-center">
                <th>No</th>
                <th>Nama Kegiatan</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($kegiatan as $kgt) : ?>
                <tr>
                  <td><?= $no++  ?></td>
                  <td><?= $kgt['nama_kegiatan']  ?></td>
                  <td class="text-center">
                    <a href="" class="btn btn-primary btn-sm"><i class="fas fa-user fa-sm fa-fw"></i></a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div> -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Add Modal -->
<!-- <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open_multipart('kegiatan/tambahKegiatan') ?>
        <div class="form-group">
          <label for="exampleFormControlInput1"><strong>Nama Kegiatan</strong></label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name="nama_kegiatan">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      <?= form_close() ?>
    </div>
  </div>
</div>

Add Modal Member
<div class="modal fade" id="addModalMember" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Member</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open_multipart('kegiatan/tambahKegiatanMember') ?>
        <div class="form-group">
          <label for="exampleFormControlInput1"><strong>Nama Kegiatan</strong></label>
          <select class="form-control" name="id_kegiatan" id="">
            <option hidden> -- Pilih Kegiatan -- </option>
            <?php foreach ($kegiatan as $kgt) : ?>
              <option value="<?= $kgt['id_kegiatan'] ?>"><?= $kgt['nama_kegiatan'] ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1"><strong>Nama Members</strong></label>
          <select class="form-control" name="nik" id="">
            <option hidden> -- Pilih Members -- </option>
            <?php foreach ($keluarga as $klg) : ?>
              <option value="<?= $klg['nik'] ?>"><?= $klg['nik'] ?> - <?= $klg['nama_lgkp'] ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1"><strong>Keterangan</strong></label>
          <textarea class="form-control" name="keterangan" id="" cols="30" rows="3"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      <?= form_close() ?>
    </div>
  </div>
</div> -->

<!-- Edit Modal -->
<!-- <?php $no = 0;
      foreach ($kegiatan as $kgt) : $no++; ?>
  <div class="modal fade" id="editModal<?= $kgt['id_kegiatan'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Edit Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?= form_open_multipart('kegiatan/ubahKegiatan') ?>
          <input type="hidden" name="id" value="<?= $kgt['id_kegiatan'] ?>">
          <div class="form-group">
            <label for="exampleFormControlInput1"><strong>Nama Kegiatan</strong></label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="nama_kegiatan" value="<?= $kgt['nama_kegiatan'] ?>">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Ubah</button>
        </div>
        <?= form_close() ?>
      </div>
    </div>
  </div>
<?php endforeach; ?> -->


<!-- Hapus Modal -->
<!-- <?php foreach ($kegiatan as $kgt) ?>
<div class="modal fade" id="delModal<?= $kgt['id_kegiatan'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open_multipart('kegiatan/hapusKegiatan') ?>
        <input type="hidden" name="id" value="<?= $kgt['id_kegiatan'] ?>">
        <p>Apakah Yakin Akan Menghapus Data Ini?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Delete</button>
      </div>
      <?= form_close() ?>
    </div>
  </div>
</div> -->