<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/css/custom.css">
    <link rel="icon" href="/img/icon2.png" type="image/gif" sizes="16x16">


    <title><?= $title; ?></title>
</head>

<body>


    <!-- nav -->
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/user/index"><img src="/img/logo2.png" height="35" alt=""></a>


            <a class="login-link btn btn-login" href="
                <?php if (logged_in() && (in_groups('admin'))) { ?>
                        /admin
                    <?php } else if (logged_in() && in_groups('user')) { ?>
                        /profile
                    <?php } else { ?>
                        /login
                    <?php } ?>
                    ">
                <?php if (logged_in()) { ?>
                    <?= user()->username; ?>
                <?php } else { ?>
                    Login
                <?php } ?>

            </a>
        </div>
    </nav>

    <!-- image -->
    <div class="low-res-container">
        <img src="/img/bg2.png" width="100%" class="low-resolution-image" alt role="presentation">
    </div>



    <!-- card -->
    <div class="container pt-5 mb-5 ">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card " style="width: 19rem;">
                    <a href="/main" class="card-temukan"> <img src="/img/res.jpg" class="card-img-top img-radius" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"> Temukan restoran </h5>
                            <p>Cari tempat terbaik di kota Bandung</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- location -->

    <section class="location " id="location">
        <div class="container pt-5 mb-5 pb-5 kontainer-lokasi">
            <div class="row pt-4 mb-4">
                <div class="col text-center">
                    <h2 class="pt-3">Daerah Populer Di Kota Bandung</h2>
                </div>
            </div>
            <div class="row pt-3">
                <?php foreach ($lokasi as $l) : ?>
                    <div class="col-4 mb-4 ">
                        <div class="card ">
                            <a href="/pages/<?= $l->id; ?>" class="card-temukan">
                                <div class="card-body">
                                    <p class="card-text" style="font-size: 18px;"><?= $l->daerah; ?> (9 tempat)
                                        <i class=" fas fa-chevron-right icon-loc"></i></p>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>

        </div>


        <!-- About -->
        <section class="about pt-2" id="about">
            <div class="container pt-5 mb-5">
                <div class="row mb-4">
                    <div class="col text-center">
                        <h2>About</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-5 pb-5">
                        <h5 style="margin-left:150px;"><b> Logo </b></h5>
                        <img src="/img/logooo.png" alt="" style="width: 350px;">
                    </div>
                    <div class="col-md-5 pb-5">
                        <p><br><br> Le Pesto merupakan website yang menyediakan informasi sebuah restaurant yang ada di Kota Bandung. Le Pesto hadir untuk mempermudah kita untuk menjelajahi Restaurant terbaik berdasarkan Tren dan rekomendasi dari customernya. Dan website ini juga sangat membantu pengguna untuk mencari informasi terkait restaurant-restaurant yang ada di sekitar Kota Bandung, beserta informasi nama tempat, lokasi, dan sebagainya. <br> <br>
                            Dengan adanya website ini tentunya sangat membantu pengguna untuk menemukan restaurant yang sesuai dengan kriteria yang diinginkan. Jelajahi restaurant yang anda inginkan menggunakan website Le Pesto. Kami Pastikan anda akan terbantu dengan informasi yang kami hadirkan dan kami sediakan.</p>
                    </div>
                </div>
            </div>
        </section>



        <!-- Footer -->
        <footer class="bg-footer text-black text-center text-lg-start pt-2">
            <!-- Grid container -->
            <div class="container p-4 pt-5">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                        <h5 class="text-uppercase" style="font-size: 35px;">Le Pesto</h5>

                        <p>
                            Universitas Pasundan
                        </p>
                        <p class="pt-0">
                            Jalan Dr. Setiabudi No 193, Bandung
                        </p>
                        <p>
                            <i class="fab fa-instagram"></i>
                            <i class="fab fa-facebook"></i>
                            <i class="fab fa-twitter"></i>

                        </p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Links</h5>

                        <ul class="list-unstyled mb-0 text-black">
                            <li>
                                <a href="/main" class="text-black" style="text-decoration: none; color:black">Temukan Restoran</a>
                            </li>

                        </ul>
                    </div>
                    <!--Grid column-->


                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </div>
            <!-- Grid container -->
            <hr class="hrr">
            <!-- Copyright -->
            <div class="text-center p-3" style=" background-color: rgb(247, 247, 247)">
                © 2020 Copyright:
                <a class="text-black" style="text-decoration:none; color:black" href="">Lepesto</a>
            </div>
            <!-- Copyright -->
        </footer>













        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>