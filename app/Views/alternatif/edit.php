<div class="modal-header bg-primary text-white">
    <h5 class="modal-title fw-bold">Edit Alternatif</h5>
    <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
    <form id="form-alternatif" action="<?= site_url('alternatif/update/'.$alternatif['id_alternatif']) ?>" method="post">
        <div class="mb-3">
            <label for="nama_alternatif" class="form-label fw-semibold">Nama Alternatif</label>
            <input type="text" class="form-control rounded border border-secondary" id="nama_alternatif" name="nama_alternatif" value="<?= $alternatif['nama_alternatif'] ?>" required>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-success">
                <i class="fas fa-save me-2"></i>Update
            </button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                <i class="fas fa-times me-2"></i>Batal
            </button>
        </div>
    </form>
</div>
