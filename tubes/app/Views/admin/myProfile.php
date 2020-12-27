<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">My Profile</h1>

    <!-- Table -->
    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col">
                        <img src="<?= base_url('/img/' . $users['user_image']) ?>" class="card-img" style=" 200px" alt="<?= $users['username']; ?> ">
                    </div>
                    <div class=" col-md-8">
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <h4><?= $users['username']; ?></h4>
                                </li>
                                <?php if ($users['fullname']) : ?>
                                    <li class="list-group-item"><?= $users['fullname']; ?></li>
                                <?php endif; ?>

                                <li class="list-group-item"><?= $users['email']; ?></li>


                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end table -->

<?= $this->endSection(); ?>