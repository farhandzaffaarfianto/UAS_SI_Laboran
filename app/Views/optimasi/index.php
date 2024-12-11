<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="container">
    <h3 class="mb-4">Nilai Optimasi</h3>
    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>Alternatif</th>
                <?php foreach ($kriteria as $k): ?>
                    <th>C<?= $k['id_kriteria'] ?> - <?= $k['nama_kriteria'] ?></th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($optimasi as $row): ?>
                <tr>
                    <td><?= $row['nama_alternatif'] ?></td>
                    <?php foreach ($kriteria as $k): ?>
                        <td><?= $row['C' . $k['id_kriteria']] ?? '0.00' ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
