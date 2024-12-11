<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="container">
    <h3>Data Kriteria</h3>
    <!-- Tombol Tambah Kriteria -->
    <button type="button" class="btn btn-primary mb-3" id="btn-add">Tambah Kriteria</button>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Kriteria</th>
                <th>Jenis</th>
                <th>Bobot</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kriteria as $k): ?>
                <tr>
                    <td><?= $k['id_kriteria'] ?></td>
                    <td><?= $k['nama_kriteria'] ?></td>
                    <td><?= $k['jenis'] ?></td>
                    <td><?= $k['bobot'] ?></td>
                    <td>
                        <!-- Tombol Edit -->
                        <button type="button" class="btn btn-warning btn-sm btn-edit" data-id="<?= $k['id_kriteria'] ?>">Edit</button>
                        <a href="<?= site_url('kriteria/delete/'.$k['id_kriteria']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</a>
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
        // Event Tambah Kriteria
        $('#btn-add').on('click', function () {
            $.ajax({
                url: "<?= site_url('kriteria/create') ?>",
                method: "GET",
                success: function (response) {
                    $('#formModal .modal-content').html(response);
                    $('#formModal').modal('show');
                },
                error: function () {
                    alert('Gagal memuat form tambah kriteria.');
                }
            });
        });

        // Event Edit Kriteria
        $('.btn-edit').on('click', function () {
            var id = $(this).data('id');
            $.ajax({
                url: "<?= site_url('kriteria/edit/') ?>" + id,
                method: "GET",
                success: function (response) {
                    $('#formModal .modal-content').html(response);
                    $('#formModal').modal('show');
                },
                error: function () {
                    alert('Gagal memuat form edit kriteria.');
                }
            });
        });
    });
</script>
<?= $this->endSection() ?>
