<?php $this->load->view('template/template'); ?>

<h2>Dashboard</h2>

<p>Jumlah barang : <?= $jml ?></p>
<p>Total stok : <?= $stok ?></p>
<p>Lagi dipinjam : <?= $pinjam ?></p>

<br>
<table border="1" cellpadding="5">
    <tr><th>Nama</th><th>Stok</th><th>id</th><th>lokasi</th></tr>
    <?php foreach($barang as $b): ?>
    <tr>
        <td><?= $b['nama'] ?></td>
        <td><?= $b['stok'] ?></td>
        <td><?= $b['id'] ?></td>
        <td><?= $b['lokasi'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>

</div><!-- content -->
</div><!-- wrapper -->
<script src="<?= base_url('assets/libs/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/js/dashboard.js') ?>"></script>
</body>
</html>