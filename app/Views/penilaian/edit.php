<div class="modal-header bg-primary text-white">
    <h5 class="modal-title fw-bold">Edit Penilaian</h5>
    <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
    <form id="form-penilaian" action="<?= site_url('penilaian/update/'.$penilaian['id_penilaian']) ?>" method="post">
        <div class="mb-3">
            <label for="id_alternatif" class="form-label fw-semibold">Alternatif</label>
            <select id="id_alternatif" name="id_alternatif" class="form-select rounded border border-secondary" required>
                <?php foreach ($alternatif as $a): ?>
                    <option value="<?= $a['id_alternatif'] ?>" <?= $penilaian['id_alternatif'] == $a['id_alternatif'] ? 'selected' : '' ?>><?= $a['nama_alternatif'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="id_kriteria" class="form-label fw-semibold">Kriteria</label>
            <select id="id_kriteria" name="id_kriteria" class="form-select rounded border border-secondary" required>
                <?php foreach ($kriteria as $k): ?>
                    <option value="<?= $k['id_kriteria'] ?>" <?= $penilaian['id_kriteria'] == $k['id_kriteria'] ? 'selected' : '' ?>><?= $k['nama_kriteria'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="nilai" class="form-label fw-semibold">Nilai</label>
            <input type="number" class="form-control rounded border border-secondary" id="nilai" name="nilai" value="<?= $penilaian['nilai'] ?>" step="0.01" required>
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
