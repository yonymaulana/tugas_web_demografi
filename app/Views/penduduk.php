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
              <h5 class="card-title">Table Data Penduduk</h5>
              <p><a href="<?= base_url('penduduk/add')?>" class="btn btn-primary">
              <i class="bi bi-plus"></i> Add </a></p>
              <table id="example" class="display" style="width:100%;">
        <thead>
            <tr>
                <th>No</th>
                <th>NIK</th>
                <th>No. KK</th>
                <th>Nama</th>
                <th>Kelurahan</th>
                <th>Penduduk Asli</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody></tbody>        
      </table>
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
  $(document).ready(function () {
    $('#example').DataTable({
        ajax: '<?php echo base_url("penduduk/data_penduduk_json") ?>'
    });
});
</script>