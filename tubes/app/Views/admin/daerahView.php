<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Daerah List</h1>
    <form class="form-inline my-2 my-lg-0 pb-3">
        <input type="text" class="form-control" name="cari" placeholder="Mencari Data Berdasarkan Nama">
        <button class="btn btn-danger btn-outline border-white  my-2 my-sm-0 mr-sm-2" type="submit">Search</button>
    </form>
    <a href="/daerah" class="btn btn-danger btn-tambah" style="float:right; margin-top:-60px;"> Tambah </a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Daerah</th>
                <th scope="col">Kota</th>
                <th scope="col">Latitude</th>
                <th scope="col">longitude</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($lokasi as $l) : ?>
                <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td><?= $l['daerah'] ?></td>
                    <td><?= $l['kota']; ?></td>
                    <td><?= $l['latitude']; ?></td>
                    <td><?= $l['longitude']; ?></td>
                    <td>
                        <a href="/admin/daerahEdit/<?= $l['id']; ?>" class="btn btn-secondary"> Edit </a>
                        <form action="/admin/daerahView/<?= $l['id']; ?>" method="post" class="d-inline">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- End -->

<?= $this->endSection(); ?>