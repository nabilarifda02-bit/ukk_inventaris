<?php $this->load->view('template/template'); ?>

<h2>Pinjam Barang</h2>

<form method="post" action="<?= base_url('pinjam/simpan') ?>">
    Nama : <input type="text" name="nama" required><br><br>

    Barang :
    <select name="id_barang" required>
        <option value="">- pilih -</option>
        <?php foreach($list_barang as $b): ?>
            <?php if($b['stok'] > 0): ?>
                <option value="<?= $b['id'] ?>"><?= $b['nama'] ?> (<?= $b['stok'] ?>)</option>
            <?php endif; ?>
        <?php endforeach; ?>
    </select><br><br>

    Jumlah : <input type="number" name="jml" required><br><br>
    <button name="pinjam">Pinjam</button>
</form>

<hr>

<table border="1" cellpadding="5">
    <tr><th>Nama</th><th>Barang</th><th>Jumlah</th><th>Id</th><th>Status</th><th></th></tr>
    <?php foreach($list_pinjam as $p): ?>
    <tr>
        <td><?= $p['nama_peminjam'] ?></td>
        <td><?= $p['nama_barang'] ?></td>
        <td><?= $p['jumlah'] ?></td>
        <td><?= $p['status'] ?></td>
        <td>
            <?php if($p['status'] != 'kembali'): ?>
                <a href="<?= base_url('pinjam/balik/'.$p['id']) ?>">balik</a>
            <?php else: ?>
                -
            <?php endif; ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

</div><!-- content -->
</div><!-- wrapper -->
<script src="<?= base_url('assets/css/main.css') ?>"></script>
<script src="<?= base_url('assets/images') ?>"></script>
<script src="<?= base_url('assets/libs/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/libs/bootstrap/css/bootstrap.min.css') ?>"></script>
<script src="<?= base_url('assets/js/dashboard.js') ?>"></script>
</body>
</html>