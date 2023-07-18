<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<br><br>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Update Data Nilai</h3>
        </div>
        <div class="card-body">

            <form method="post" action="<?= base_url('updatenilai/' . $enilai->id) ?>">
                <?= csrf_field(); ?>
                <div class="form-group">
                    <input type="hidden" name="id" class="form-control" value="<?= $enilai->id; ?>" />
                </div>
                <div class="form-group">
                    <label for="nilai">Nim</label>
                    <select name="nim" class="form-control" id="nim" required>
                        <option value="">-Nim-</option>
                        <?php foreach ($data as $row) : ?>
                            <option value="<?= $row->nim; ?>" <?= ($row->nim == $enilai->nim) ? 'selected' : ''; ?>><?= $row->nim; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="nilai">Kode Mata kuliah</label>
                    <select name="kode_mk" class="form-control" id="" required>
                        <option value="">-Kode matakuliah-</option>
                        <?php foreach ($dataku as $row) : ?>
                            <option value="<?= $row->kode_mk; ?>" <?= ($row->kode_mk == $enilai->kode_mk) ? 'selected' : ''; ?>><?= $row->kode_mk; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="nama">Nilai</label>
                    <input type="text" class="form-control" value="<?= $enilai->nilai; ?>" id="nama" name="nilai" required>
                </div>

                <div class="form-group">
                    <a href="<?= base_url('/nilai'); ?>" class="btn btn-secondary">Batal</a>
                    <input type="submit" value="Update" class="btn btn-info" />
                </div>

            </form>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>