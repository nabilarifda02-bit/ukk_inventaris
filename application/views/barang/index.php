<?php $this->load->view('template/template'); ?>

<h2>Barang</h2>
<a href="<?= base_url('barang/tambah') ?>">+ tambah</a>
<br><br>

<table border="1" cellpadding="5">
    <tr><th>Nama</th><th>Stok</th><th>Id</th><th>lokasi</th></tr>
    <?php foreach($barang as $b): ?>
    <tr>
        <td><?= $b['nama'] ?></td>
        <td><?= $b['stok'] ?></td>
        <td><?= $b['id'] ?></td>
        <td><?= $b['lokasi'] ?></td>
        <td>
            <a href="<?= base_url('barang/hapus/'.$b['id']) ?>"
               onclick="return confirm('hapus?')">hapus</a>
            <a href="<?= base_url('barang/edit/'.$b['id']) ?>"
               onclick="return confirm('edit')">edit</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

</div><!-- content -->
</div><!-- wrapper -->
<script src="<?= base_url('assets/libs/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/js/dashboard.js') ?>"></script>
</body>
</html>