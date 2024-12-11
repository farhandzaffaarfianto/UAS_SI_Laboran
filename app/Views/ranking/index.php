<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="container">
    <h3 class="mb-4">Rangking</h3>
    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>Alternatif</th>
                <th>Nilai Akhir</th>
                <th>Peringkat</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rankingData as $row): ?>
                <tr>
                    <td><?= $row['nama_alternatif'] ?></td>
                    <td><?= $row['yi'] ?></td>
                    <td><?= $row['ranking'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
