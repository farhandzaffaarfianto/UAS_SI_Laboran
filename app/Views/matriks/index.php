<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="container">
    <h3 class="mb-4">Matriks Keputusan</h3>
    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>Alternatif</th>
                <?php foreach ($kriteria as $index => $k): ?>
                    <th><?= 'C' . ($index + 1) . ' - ' . $k['nama_kriteria'] ?></th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($matriks as $row): ?>
                <tr>
                    <td><?= $row['nama_alternatif'] ?></td>
                    <?php foreach ($kriteria as $k): ?>
                        <td><?= $row[$k['nama_kriteria']] ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
