<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="container">
    <h3 class="mb-4">Dashboard</h3>
    <div class="row">
        <!-- Alternatif -->
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Alternatif</h5>
                    <p class="card-text" style="font-size: 24px;"><?= $totalAlternatif ?></p>
                </div>
            </div>
        </div>

        <!-- Kriteria -->
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Kriteria</h5>
                    <p class="card-text" style="font-size: 24px;"><?= $totalKriteria ?></p>
                </div>
            </div>
        </div>

        <!-- Penilaian -->
        <div class="col-md-4">
            <div class="card text-white bg-info mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Penilaian</h5>
                    <p class="card-text" style="font-size: 24px;"><?= $totalPenilaian ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
