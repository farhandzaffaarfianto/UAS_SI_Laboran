<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="container">
    <h3 class="mb-4">Nilai Yi</h3>
    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>Alternatif</th>
                <th>Max</th>
                <th>Min</th>
                <th>Yi (Max - Min)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($yiData as $row): ?>
                <tr>
                    <td><?= $row['nama_alternatif'] ?></td>
                    <td><?= $row['max'] ?></td>
                    <td><?= $row['min'] ?></td>
                    <td><?= $row['yi'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
