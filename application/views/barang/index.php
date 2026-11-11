<?php $this->load->view('template/template'); ?>

<h2>Barang</h2>
<a href="<?= base_url('barang/tambah') ?>">+ tambah</a>
<br><br>

<table border="1" cellpadding="5">
    <tr><th>Nama</th><th>Stok</th><th></th></tr>
    <?php foreach($barang as $b): ?>
    <tr>
        <td><?= $b['nama'] ?></td>
        <td><?= $b['stok'] ?></td>
        <td>
            <a href="<?= base_url('barang/hapus/'.$b['id']) ?>"
               onclick="return confirm('hapus?')">hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

</div><!-- content -->
</div><!-- wrapper -->
<script src="<?= base_url('assets/js/script.js') ?>"></script>
</body>
</html>