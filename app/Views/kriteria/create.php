<div class="modal-header bg-primary text-white">
    <h5 class="modal-title fw-bold">Tambah Kriteria</h5>
    <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
    <form id="form-kriteria" action="<?= site_url('kriteria/store') ?>" method="post">
        <div class="mb-3">
            <label for="nama_kriteria" class="form-label fw-semibold">Nama Kriteria</label>
            <input type="text" class="form-control rounded border border-secondary" id="nama_kriteria" name="nama_kriteria" required>
        </div>
        <div class="mb-3">
            <label for="jenis" class="form-label fw-semibold">Jenis</label>
            <select id="jenis" name="jenis" class="form-select rounded border border-secondary" required>
                <option value="Benefit">Benefit</option>
                <option value="Cost">Cost</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="bobot" class="form-label fw-semibold">Bobot</label>
            <input type="number" class="form-control rounded border border-secondary" id="bobot" name="bobot" step="0.01" required>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-success">
                <i class="fas fa-save me-2"></i>Simpan
            </button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                <i class="fas fa-times me-2"></i>Batal
            </button>
        </div>
    </form>
</div>
