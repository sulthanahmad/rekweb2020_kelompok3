<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit Profile</h1>

    <form>
        <img src="<?= base_url('/img/' . $user['user_image']) ?>" class="card-img" alt="<?= $user['username']; ?>" style="width: 250px;">
        <div class="mb-3">
            <label for="formFile" class="form-label">Default file input example</label>
            <input class="form-control" type="file" id="formFile">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputUsername1" class="form-label">Username</label>
            <input type="email" class="form-control" id="exampleInputUsername1" aria-describedby="emailHelp">

        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>




</div>

<?= $this->endSection(); ?>