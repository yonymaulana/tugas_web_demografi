<?= $this->include('header'); ?>
<?= $this->include('sidemenu'); ?>
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Data Penduduk</h1>
    <nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Tambah Data Penduduk</h5>

            <form class="form-horizontal" action="<?= base_url('penduduk/pro_add') ?>" method="POST" enctype="multipart/form-data">
              <?= csrf_field(); ?>     
              <table class="table table-striped" style="font-weight: bold;">
                <tr>
                  <td style="font-weight: bold;color: black;">NIK</td>
                  <td style="font-weight: bold;color: black;">:</td>
                  <td style="font-weight: bold;color: black;"><input type="number" name="nik" placeholder="NIK" class="form-control form-control-sm" required></td>
                </tr>
                <tr>
                  <td style="font-weight: bold;color: black;">No. KK</td>
                  <td style="font-weight: bold;color: black;">:</td>
                  <td style="font-weight: bold;color: black;"><input type="number" name="no_kk" placeholder="No. KK" class="form-control form-control-sm" required></td>
                </tr>
                <tr>
                  <td style="font-weight: bold;color: black;">Nama Lengkap</td>
                  <td style="font-weight: bold;color: black;">:</td>
                  <td style="font-weight: bold;color: black;"><input type="text" name="nama_lengkap" placeholder="Nama Lengkap" class="form-control form-control-sm" required></td>
                </tr>                
                <tr>
                  <td style="font-weight: bold;color: black;">Tempat Lahir</td>
                  <td style="font-weight: bold;color: black;">:</td>
                  <td style="font-weight: bold;color: black;"><input type="text" name="tempat_lahir" placeholder="Tempat Lahir" class="form-control form-control-sm" required></td>
                </tr>                
                <tr>
                  <td style="font-weight: bold;color: black;">Tgl Lahir</td>
                  <td style="font-weight: bold;color: black;">:</td>
                  <td style="font-weight: bold;color: black;"><input type="date" name="tgl_lahir" placeholder="Tgl Lahir" class="form-control form-control-sm" required></td>
                </tr> 
                <tr>
                  <td style="font-weight: bold;color: black;width:20%;">Jenis Kelamin</td>
                  <td style="font-weight: bold;color: black;width:5%;">:</td>
                  <td colspan="2"><select name="jenis_kelamin" class="form-control form-control-sm" data-placeholder="jenis_kelamin" required>
                      <option value="0">--Pilih--</option>
                      <option value="Pria">Pria</option>
                      <option value="Wanita">Wanita</option>
                    </select></td>
                </tr>              
                <tr>
                  <td style="font-weight: bold;color: black;">Alamat Lengkap</td>
                  <td style="font-weight: bold;color: black;">:</td>
                  <td style="font-weight: bold;color: black;"><input type="text" name="alamat_lengkap" placeholder="Alamat Lengkap" class="form-control form-control-sm" required></td>
                </tr>
                <tr>
                  <td style="font-weight: bold;color: black;width:20%;">Agama</td>
                  <td style="font-weight: bold;color: black;width:5%;">:</td>
                  <td colspan="2"><select name="agama" class="form-control form-control-sm" data-placeholder="Agama" required>
                      <option value="0">--Pilih--</option>
                      <?php
                      foreach ($opt_agama as $row) {
                        echo "<option value=" . $row->id . ">" . $row->agama . "</option>";
                      }
                      ?>
                    </select></td>
                </tr>
                <tr>
                  <td style="font-weight: bold;color: black;width:20%;">Pendidikan</td>
                  <td style="font-weight: bold;color: black;width:5%;">:</td>
                  <td colspan="2"><select name="pendidikan" class="form-control form-control-sm" data-placeholder="Pendidikan" required>
                      <option value="0">--Pilih--</option>
                      <?php
                      foreach ($opt_pendidikan as $row) {
                        echo "<option value=" . $row->id . ">" . $row->pendidikan . "</option>";
                      }
                      ?>
                    </select></td>
                </tr>
                <tr>
                  <td style="font-weight: bold;color: black;width:20%;">Pendapatan</td>
                  <td style="font-weight: bold;color: black;width:5%;">:</td>
                  <td colspan="2"><select name="pendapatan" class="form-control form-control-sm" data-placeholder="pendapatan" required>
                      <option value="0">--Pilih--</option>
                      <?php
                      foreach ($opt_pendapatan as $row) {
                        echo "<option value=" . $row->id . ">" . $row->pendapatan . "</option>";
                      }
                      ?>
                    </select></td>
                </tr>
                <tr>
                  <td style="font-weight: bold;color: black;width:20%;">Kelurahan</td>
                  <td style="font-weight: bold;color: black;width:5%;">:</td>
                  <td colspan="2"><select name="kelurahan" class="form-control form-control-sm" data-placeholder="Kelurahan" required>
                      <option value="0">--Pilih--</option>
                      <?php
                      foreach ($opt_kelurahan as $row) {
                        echo "<option value=" . $row->id . ">" . $row->kelurahan . "</option>";
                      }
                      ?>
                    </select></td>
                </tr>           
                <tr>
                  <td style="font-weight: bold;color: black;width:20%;">Penduduk Asli</td>
                  <td style="font-weight: bold;color: black;width:5%;">:</td>
                  <td colspan="2"><select name="penduduk_asli" class="form-control form-control-sm" data-placeholder="penduduk_asli" required>
                      <option value="0">--Pilih--</option>
                      <option value="Ya">Ya</option>
                      <option value="Tidak">Tidak</option>
                    </select></td>
                </tr>
              </table>
         
                            
              
              <div class="text-right">
                <button type="button" class="btn btn-danger btn-rounded pull-right" onClick="javascript:history.go(-1)">
                  <i class="far fa-times-circle fa-lg"></i><b> Back</b>
                </button>
                <button type="submit" class="btn btn-warning btn-rounded pull-right">
                  <i class="far far fa-paper-plane fa-lg"></i><b> Submit</b>
                </button>
              </div>
              <br>
            </form>

          </div>
        </div>
      </div>
    </div>
  </section>

</main><!-- End #main -->
<?= $this->include('footer'); ?>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet">
<script>
  $(document).ready(function() {
    $('#example').DataTable({
      ajax: '<?php echo base_url("penduduk/data_penduduk_json") ?>'
    });
  });
</script>