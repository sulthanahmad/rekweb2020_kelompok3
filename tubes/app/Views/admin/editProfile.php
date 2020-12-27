<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">



    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit Profile</h1>

    <form action="/admin/updateProfile/<?= $user['id']; ?>" method="post" enctype="multipart/form-data">
        <img src="<?= base_url('/img/' . $user['user_image']) ?>" class="card-img" alt="<?= $user['username']; ?>" style="width: 250px;">
        <div class="custom-file mb-3 mt-5">
            <input type="file" name="user_image" class="custom-file-input" id="validatedCustomFile">
            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $user['email']; ?>">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username </label>
            <input type="text" class="form-control" name="username" id="username" aria-describedby="usernameHelp" value="<?= $user['username']; ?>">
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">Full Name</label>
            <input type="text" class="form-control" name="fullname" id="fullname" aria-describedby="fullnameHelp" value="<?= $user['fullname']; ?>">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<!-- End -->

<?= $this->endSection(); ?>