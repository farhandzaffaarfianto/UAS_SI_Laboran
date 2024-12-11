<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="container">
    <h3>Data Penilaian</h3>
    <!-- Tombol Tambah Penilaian -->
    <button type="button" class="btn btn-primary mb-3" id="btn-add">Tambah Penilaian</button>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Alternatif</th>
                <th>Kriteria</th>
                <th>Nilai</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($penilaian as $p): ?>
                <tr>
                    <td><?= $p['id_penilaian'] ?></td>
                    <td><?= $p['nama_alternatif'] ?></td>
                    <td><?= $p['nama_kriteria'] ?></td>
                    <td><?= $p['nilai'] ?></td>
                    <td>
                        <!-- Tombol Edit -->
                        <button type="button" class="btn btn-warning btn-sm btn-edit" data-id="<?= $p['id_penilaian'] ?>">Edit</button>
                        <a href="<?= site_url('penilaian/delete/'.$p['id_penilaian']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Konten Modal akan di-load melalui AJAX -->
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
    $(document).ready(function () {
        // Event Tambah Penilaian
        $('#btn-add').on('click', function () {
            $.ajax({
                url: "<?= site_url('penilaian/create') ?>",
                method: "GET",
                success: function (response) {
                    $('#formModal .modal-content').html(response);
                    $('#formModal').modal('show');
                },
                error: function () {
                    alert('Gagal memuat form tambah penilaian.');
                }
            });
        });

        // Event Edit Penilaian
        $('.btn-edit').on('click', function () {
            var id = $(this).data('id');
            $.ajax({
                url: "<?= site_url('penilaian/edit/') ?>" + id,
                method: "GET",
                success: function (response) {
                    $('#formModal .modal-content').html(response);
                    $('#formModal').modal('show');
                },
                error: function () {
                    alert('Gagal memuat form edit penilaian.');
                }
            });
        });
    });
</script>
<?= $this->endSection() ?>
