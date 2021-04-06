<link href="<?= base_url(''); ?>assets/css/style_Homepage.css" rel="stylesheet">
<br>
<!--Label-->
<div id="Text" class="text-center">
    <span class="badge badge-danger rounded p-2">
        <h3>Resep paling Favorite dan Tren</h3>
    </span>

</div>
<!--/Label-->
<br>
<!--Carousel-->
<div class="container-fluid" style="padding-left:unset; padding-right:unset;">
    <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <?php
                $i = 1;
                if (!empty($rek)) {
                    foreach ($rek as $r) :
                        if ($i <= 1) {
                            ?>
                            <div class="carousel-item active">
                                <img src="<?= base_url('assets/dmb/img/post/') . $r['gambar_1']; ?>" class="d-block w-100" alt="..." height="540" style="object-fit:cover;">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5><?= $r['title']; ?></h5>
                                    <div class="row align-items-center justify-content-center" style="margin-top:10px;">
                                        <span class="badge badge-primary green darken-1"><?= $r['asal_masakan']; ?></span>
                                        <span class="badge badge-primary ml-2 green darken-1"><?= $r['tipe']; ?></span>
                                    </div>
                                    <a class="btn btn-primary" href="<?= base_url('user/postingan/') . $r['id']; ?>">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        <?php
                    }
                    $i++;
                endforeach;
            } else { // Jika data tidak ada
                echo "<div class='text-center' style='margin-left:45%;'>";
                echo "<tr>
            <td><b>Data Kosong</b></td>
        </tr>";
                echo "</div>";
            }
            ?>
                <?php
                $i = 1;
                if (!empty($rek)) {
                    foreach ($rek as $r) :
                        if ($i > 1 && $i <= 3) {
                            ?>
                            <div class="carousel-item">
                                <img src="<?= base_url('assets/dmb/img/post/') . $r['gambar_1']; ?>" class="d-block w-100" alt="..." height="540" style="object-fit:cover;">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5><?= $r['title']; ?></h5>
                                    <div class="row align-items-center justify-content-center" style="margin-top:10px;">
                                        <span class="badge badge-primary green darken-1"><?= $r['asal_masakan']; ?></span>
                                        <span class="badge badge-primary ml-2 green darken-1"><?= $r['tipe']; ?></span>
                                    </div>
                                    <a class="btn btn-primary" href="<?= base_url('user/postingan/') . $r['id']; ?>">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        <?php
                    }
                    $i++;
                endforeach;
            } else { // Jika data tidak ada
                echo "<div class='text-center' style='margin-left:45%;'>";
                echo "<tr>
            <td><b>Data Kosong</b></td>
        </tr>";
                echo "</div>";
            }
            ?>
            </div>
            <!--Control-->
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!--/Control-->
        </div>
    </div>
</div>

<!--/Carousel-->
<br>

<div class="position-relative w-90 p-3 ml-auto mr-auto mt-3 rounded-lg mb-3 white">
    <div id="multi-item-example2" class="carousel slide carousel-multi-item" data-ride="carousel">

        <!--Controls-->
        <div class="row">
            <div class="column">
                <span class="badge badge-success m-3 p-2">Terbaru</span>
            </div>
            <div class="column ml-auto mr-3">
                <div class="controls-top mt-2 mb-2">
                    <a class="btn-floating btn-primary p-2 mr-2" href="#multi-item-example2" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
                    <a class="btn-floating btn-primary p-2 ml-2" href="#multi-item-example2" data-slide="next"><i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </div>

        <!--/.Controls-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

            <!--First slide-->
            <div class="carousel-item active">
                <div class="row">
                    <?php
                    $i = 1;
                    if (!empty($baru)) {
                        foreach ($baru as $b) :
                            if ($i <= 3) {
                                ?>
                                <div class="col-md-4">
                                    <div class="card mb-2">
                                        <img class="card-img-top" src="<?= base_url('assets/dmb/img/post/') . $b['gambar_1']; ?>" height="200" style="object-fit:cover;">
                                        <div class="card-body">
                                            <div class="row align-items-center ml-1">
                                                <div class="avatar">
                                                    <img alt="" src="<?= base_url('assets/img/profile/') . $b['image']; ?>" style="width:30px; border-radius:50%; height:30px; object-fit:cover;">
                                                </div>
                                                <a href="#" class="alert-link blue-text" style="margin-left:5px"><?= $b['name']; ?></a>
                                            </div>
                                            <h4 class="card-title mt-2"><?= $b['title']; ?></h4>
                                            <ul>
                                                <li>
                                                    <span><b>Tipe : </b><?= $b['tipe']; ?></span>
                                                </li>
                                                <li>
                                                    <span><b>Asal : </b><?= $b['asal_masakan']; ?></span>
                                                </li>
                                                <li>
                                                    <span><b>View : </b><?= $b['pengunjung']; ?></span>
                                                </li>
                                            </ul>
                                            <a href="<?= base_url('user/postingan/') . $b['id']; ?>" class="btn btn-primary">Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                            <?php
                        }
                        $i++;
                    endforeach;
                } else { // Jika data tidak ada
                    echo "<div class='text-center' style='margin-left:45%;'>";
                    echo "<tr>
            <td><b>Data Kosong</b></td>
        </tr>";
                    echo "</div>";
                }
                ?>
                </div>
            </div>
            <!--/.First slide-->

            <!--Second slide-->
            <div class="carousel-item">
                <div class="row">
                    <?php
                    $i = 1;
                    if (!empty($baru)) {
                        foreach ($baru as $b) :
                            if ($i > 3 && $i <= 6) {
                                ?>
                                <div class="col-md-4">
                                    <div class="card mb-2">
                                        <img class="card-img-top" src="<?= base_url('assets/dmb/img/post/') . $b['gambar_1']; ?>" height="200" style="object-fit:cover;">
                                        <div class="card-body">
                                            <div class="row align-items-center ml-1">
                                                <div class="avatar">
                                                    <img alt="" src="<?= base_url('assets/img/profile/') . $b['image']; ?>" style="width:30px; border-radius:50%; height:30px; object-fit:cover;">
                                                </div>
                                                <a href="#" class="alert-link blue-text" style="margin-left:5px"><?= $b['name']; ?></a>
                                            </div>
                                            <h4 class="card-title mt-2"><?= $b['title']; ?></h4>
                                            <ul>
                                                <li>
                                                    <span><b>Tipe : </b><?= $b['tipe']; ?></span>
                                                </li>
                                                <li>
                                                    <span><b>Asal : </b><?= $b['asal_masakan']; ?></span>
                                                </li>
                                                <li>
                                                    <span><b>View : </b><?= $b['pengunjung']; ?></span>
                                                </li>
                                            </ul>
                                            <a href="<?= base_url('user/postingan/') . $b['id']; ?>" class="btn btn-primary">Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                            <?php
                        }
                        $i++;
                    endforeach;
                } else { // Jika data tidak ada
                    echo "<div class='text-center' style='margin-left:45%;'>";
                    echo "<tr>
            <td><b>Data Kosong</b></td>
        </tr>";
                    echo "</div>";
                }
                ?>
                </div>
            </div>
            <!--/.Second slide-->

            <!--Third slide-->
            <div class="carousel-item">
                <div class="row">
                    <?php
                    $i = 1;
                    if (!empty($baru)) {
                        foreach ($baru as $b) :
                            if ($i > 6 && $i <= 9) {
                                ?>
                                <div class="col-md-4">
                                    <div class="card mb-2">
                                        <img class="card-img-top" src="<?= base_url('assets/dmb/img/post/') . $b['gambar_1']; ?>" height="200" style="object-fit:cover;">
                                        <div class="card-body">
                                            <div class="row align-items-center ml-1">
                                                <div class="avatar">
                                                    <img alt="" src="<?= base_url('assets/img/profile/') . $b['image']; ?>" style="width:30px; border-radius:50%; height:30px; object-fit:cover;">
                                                </div>
                                                <a href="#" class="alert-link blue-text" style="margin-left:5px"><?= $b['name']; ?></a>
                                            </div>
                                            <h4 class="card-title mt-2"><?= $b['title']; ?></h4>
                                            <ul>
                                                <li>
                                                    <span><b>Tipe : </b><?= $b['tipe']; ?></span>
                                                </li>
                                                <li>
                                                    <span><b>Asal : </b><?= $b['asal_masakan']; ?></span>
                                                </li>
                                                <li>
                                                    <span><b>View : </b><?= $b['pengunjung']; ?></span>
                                                </li>
                                            </ul>
                                            <a href="<?= base_url('user/postingan/') . $b['id']; ?>" class="btn btn-primary">Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                            <?php
                        }
                        $i++;
                    endforeach;
                } else { // Jika data tidak ada
                    echo "<div class='text-center' style='margin-left:45%;'>";
                    echo "<tr>
            <td><b>Data Kosong</b></td>
        </tr>";
                    echo "</div>";
                }
                ?>
                </div>
            </div>
            <!--/.Third slide-->

        </div>
        <!--/.Slides-->
    </div>
    <!--ALL PICTURE-->
    <div class="row p-2 mt-5" style="width:90%;">
        <img src="<?= base_url(''); ?>assets/img/responsive.png" alt="" height="150" style="margin-left:50%;">
        <h6 style="margin-left:50%;"><b>Tentang web kami</b></h6>
        <br>
    </div>
    <div class="row" style="width:90%;">
        <div class="column m-3" style="width:30%;">
            <img src="<?= base_url(''); ?>assets/img/icon.png" alt="" height="150" style="margin-left:50%;">
            <h6 class="mt-3" style="margin-left:50%; text-align: center;"><b>Web dimana pengunjung dapat saling berbagi
                    resep</b></h6>
        </div>
        <div class="column m-3" style="width:30%;">
            <img src="<?= base_url(''); ?>assets/img/chef-cooking-on-stove (1).png" alt="" height="150" style="margin-left:50%;">
            <h6 class="mt-3" style="margin-left:50%; text-align: center;"><b>Web yang dapat membantu anda dalam memasak</b>
            </h6>
        </div>
        <div class="column m-3" style="width:30%;">
            <img src="<?= base_url(''); ?>assets/img/27570.png" alt="" height="150" style="margin-left:50%;">
            <h6 class="mt-3" style="margin-left:50%; text-align: center;"><b>Web yang dapat membantu anda mmepromosikan usaha
                    dan makanan
                    anda</b></h6>
        </div>
    </div>
</div>
<!--/ALL PICTURE-->

<?php if ($user == NULL) { ?>
    <!--Jumbotron-->
    <div class="container-fluid mb-2" style="position:relative; width:100%; height:400px; object-fit: cover; background-image: url(<?= base_url(''); ?>assets/img/resep-sayur-asem-1000x400.jpg); background-repeat: no-repeat; background-size: 100%;">
        <div>
            <div class="card" style="position:absolute; width: 18rem;" id="Card1">
                <div class="card-body p-5">
                    <h3 class="card-title"><b>Daftarkan Dirimu!!</b></h3>
                    <p class="card-text">Daftarkanlah dirimu sekarang untuk berbagi resep bersama kami dan teman-teman
                        lainnya</p>
                    <a href="<?= base_url('auth/registration') ?>" class="btn btn-primary">Daftar</a>
                </div>
            </div>
        </div>
    </div>
<?php }
?>

<!--/Jumbotron-->
</div>