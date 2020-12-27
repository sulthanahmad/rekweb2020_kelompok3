<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">


    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit Daerah</h1>

    <form action="/admin/update/<?= $lokasi['id']; ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <input type="hidden" name="kota" value="<?= $lokasi['kota']; ?>">
        <input type="hidden" name="lokasiLama" value="<?= $lokasi['daerah']; ?>">
        <div class="mb-3">
            <label for="daerah">Daerah</label>
            <input type="text" class="form-control <?= $validation->hasError('daerah') ? 'is-invalid' : ''; ?>" id="daerah" name="daerah" autofocus value="<?= (old('daerah')) ? old('daerah') : $lokasi['daerah'] ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('daerah'); ?>
            </div>
        </div>
        <div class="mb-3">
            <label for="kota" class="form-label">Kota</label>
            <input type="text" class="form-control" name="kota" id="kota" aria-describedby="kotaHelp" value="<?= (old('kota')) ? old('kota') : $lokasi['kota'] ?>">
        </div>
        <div class="mb-3">
            <label for="latitude" class="form-label">Latitude</label>
            <input type="text" class="form-control" name="latitude" id="latitude" aria-describedby="latitudeHelp" value="<?= (old('latitude')) ? old('latitude') : $lokasi['latitude'] ?>">
        </div>
        <div class="mb-3">
            <label for="longitude" class="form-label">Longitude</label>
            <input type="text" class="form-control" name="longitude" id="longitude" aria-describedby="longitudeHelp" value="<?= (old('longitude')) ? old('longitude') : $lokasi['longitude'] ?>">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<!-- End-->


<?= $this->endSection(); ?>