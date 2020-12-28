<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">



    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tambah Daerah</h1>

    <form action="/daerah/save" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <div class="mb-3">
            <label for="daerah" class="form-label">Daerah</label>
            <input type="text" name="daerah" class="form-control " id="daerah" aria-describedby="daerahHelp" value="" placeholder="Masukan Daerah..">
        </div>
        <div class="mb-3">
            <label for="kota" class="form-label">Kota</label>
            <input type="text" class="form-control" name="kota" id="kota" aria-describedby="kotaHelp" value="<?= old('kota'); ?>" placeholder="Masukan Kota..">
        </div>
        <div class="mb-3">
            <label for="latitude" class="form-label">Latitude</label>
            <input type="text" class="form-control" name="latitude" id="latitude" aria-describedby="latitudeHelp" value="<?= old('latitude'); ?>" placeholder="Masukan Latitude..">
        </div>
        <div class="mb-3">
            <label for="longitude" class="form-label">Longitude</label>
            <input type="text" class="form-control" name="longitude" id="longitude" aria-describedby="longitudeHelp" value="<?= old('longitude'); ?>" placeholder="Masukan Longitude..">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>







<?= $this->endSection(); ?>