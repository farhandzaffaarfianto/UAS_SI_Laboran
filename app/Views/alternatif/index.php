<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="container">
    <h3>Data Alternatif</h3>
    <!-- Tombol Tambah Alternatif -->
    <button type="button" class="btn btn-primary mb-3" id="btn-add">Tambah Alternatif</button>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Alternatif</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alternatif as $a): ?>
                <tr>
                    <td><?= $a['id_alternatif'] ?></td>
                    <td><?= $a['nama_alternatif'] ?></td>
                    <td>
                        <!-- Tombol Edit -->
                        <button type="button" class="btn btn-warning btn-sm btn-edit" data-id="<?= $a['id_alternatif'] ?>">Edit</button>
                        <a href="<?= site_url('alternatif/delete/'.$a['id_alternatif']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</a>
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
        // Event Tambah Alternatif
        $('#btn-add').on('click', function () {
            $.ajax({
                url: "<?= site_url('alternatif/create') ?>",
                method: "GET",
                success: function (response) {
                    $('#formModal .modal-content').html(response);
                    $('#formModal').modal('show');
                },
                error: function () {
                    alert('Gagal memuat form tambah alternatif.');
                }
            });
        });

        // Event Edit Alternatif
        $('.btn-edit').on('click', function () {
            var id = $(this).data('id');
            $.ajax({
                url: "<?= site_url('alternatif/edit/') ?>" + id,
                method: "GET",
                success: function (response) {
                    $('#formModal .modal-content').html(response);
                    $('#formModal').modal('show');
                },
                error: function () {
                    alert('Gagal memuat form edit alternatif.');
                }
            });
        });
    });
</script>
<?= $this->endSection() ?>
