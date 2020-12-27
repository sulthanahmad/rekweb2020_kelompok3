<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">User List</h1>
    <form class="form-inline my-2 my-lg-0 pb-3">
        <input type="text" class="form-control" name="cari" placeholder="Mencari Data Berdasarkan Nama">
        <button class="btn btn-danger btn-outline border-white  my-2 my-sm-0 mr-sm-2" type="submit">Search</button>
    </form>
    <!-- Table -->
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td><?= $user['username'] ?></td>
                    <td><?= $user['email']; ?></td>
                    <td><?= $user['name']; ?></td>
                    <td>
                        <a href="/admin/detail/<?= $user['user_id']; ?>" class="btn btn-"> Detail </a>
                        <form action="/admin/index/<?= $user['user_id']; ?>" method="post" class="d-inline">
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