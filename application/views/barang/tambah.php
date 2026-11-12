<?php $this->load->view('template/template'); ?>

<h2>Tambah Barang</h2>

<form method="post" action="<?= base_url('barang/tambah') ?>">
    Nama : <input type="text" name="nama" required><br><br>
    Stok : <input type="number" name="stok" required><br><br>
    lokasi : <input type="text" name="lokasi" required><br><br>
   <button type="submit" name="simpan" value="1">simpan</button>
</form>

</div><!-- content -->
</div><!-- wrapper -->
<script src="<?= base_url('assets/css/main.css') ?>"></script>
<script src="<?= base_url('assets/images') ?>"></script>
<script src="<?= base_url('assets/libs/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/libs/bootstrap/css/bootstrap.min.css') ?>"></script>
<script src="<?= base_url('assets/js/dashboard.js') ?>"></script>
</body>
</html>