<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">User List</h1>

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
                        <form action="/admin/<?= $user['user_id']; ?>" method="post" class="d-inline">
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