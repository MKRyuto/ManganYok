<!-- Body -->
<div class="bg-search"></div>

<div class="position-relative w-90 p-3 ml-auto mr-auto mt-3 rounded-lg mb-3 white">
    <!--Jumbotron-->
    <!--Jumbotron-->
    <div class="jumbotron" id="jumbotron">
        <p class="lead text-center">Beragam Resep Makanan Khas se-Indonesia ada di sini<br></p>
    </div>
    <!--/Jumbotron-->
    <!--filter-->
    <div class="container-fluid bg-light" id="filter">
        <form class="w-100" action="<?= base_url('user/resultfilter'); ?>" method="post" enctype="multipart/form-data" method="post">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-2 pt-3">
                    <div class="form-group">
                        <select id="tipe" name="tipe" class="form-control">
                            <option value="NULL" selected="">Pilih Tipe Masakan</option>
                            <?php foreach ($tipe as $t) : ?>
                                <option value="<?= $t['id']; ?>"><?= $t['tipe']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-2 pt-3">
                    <div class="form-group">
                        <select id="asal" name="asal" class="form-control">
                            <option value="NULL" selected="">Pilih Daerah Masakan</option>
                            <?php foreach ($asal as $a) : ?>
                                <option value="<?= $a['asal_masakan']; ?>"><?= $a['asal_masakan']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-2 pt-3">
                    <div class="form-group">
                        <select id="view" name="view" class="form-control">
                            <option value="NULL" selected="">Pilih Pengunjung</option>
                            <option value="1">Terbanyak</option>
                            <option value="2">Tersedikit</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary btn-block">Search</button>
                </div>
            </div>
        </form>
    </div>

    <!--Carousel Rekomendasi-->
    <div id="multi-item-example1" class="carousel slide carousel-multi-item" data-ride="carousel">

        <!--Controls-->
        <div class="row">
            <div class="column">
                <span class="badge badge-success m-3 p-2">Rekomendasi</span>
            </div>
            <div class="column ml-auto mr-3">
                <div class="controls-top mt-2 mb-2">
                    <a class="btn-floating btn-primary p-2 mr-2" href="#multi-item-example1" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
                    <a class="btn-floating btn-primary p-2 ml-2" href="#multi-item-example1" data-slide="next"><i class="fas fa-chevron-right"></i></a>
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
                    if (!empty($rek)) {
                        foreach ($rek as $r) :
                            if ($i <= 3) {
                                ?>
                                <div class="col-md-4">
                                    <div class="card mb-2">
                                        <img class="card-img-top" src="<?= base_url('assets/dmb/img/post/') . $r['gambar_1']; ?>" height="200" style="object-fit:cover;">
                                        <div class="card-body">
                                            <div class="row align-items-center ml-1">
                                                <div class="avatar">
                                                    <img alt="" src="<?= base_url('assets/img/profile/') . $r['image']; ?>" style="width:30px; border-radius:50%; height:30px; object-fit:cover;">
                                                </div>
                                                <a href="#" class="alert-link blue-text" style="margin-left:5px"><?= $r['name']; ?></a>
                                            </div>
                                            <h4 class="card-title mt-2"><?= $r['title']; ?></h4>
                                            <ul>
                                                <li>
                                                    <span><b>Tipe : </b><?= $r['tipe']; ?></span>
                                                </li>
                                                <li>
                                                    <span><b>Asal : </b><?= $r['asal_masakan']; ?></span>
                                                </li>
                                                <li>
                                                    <span><b>View : </b><?= $r['pengunjung']; ?></span>
                                                </li>
                                            </ul>
                                            <a href="<?= base_url('user/postingan/') . $r['id']; ?>" class="btn btn-primary">Selengkapnya</a>
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
                    if (!empty($rek)) {
                        foreach ($rek as $r) :
                            if ($i > 3 && $i <= 6) {
                                ?>
                                <div class="col-md-4">
                                    <div class="card mb-2">
                                        <img class="card-img-top" src="<?= base_url('assets/dmb/img/post/') . $r['gambar_1']; ?>" height="200" style="object-fit:cover;">
                                        <div class="card-body">
                                            <div class="row align-items-center ml-1">
                                                <div class="avatar">
                                                    <img alt="" src="<?= base_url('assets/img/profile/') . $r['image']; ?>" style="width:30px; border-radius:50%; height:30px; object-fit:cover;">
                                                </div>
                                                <a href="#" class="alert-link blue-text" style="margin-left:5px"><?= $r['name']; ?></a>
                                            </div>
                                            <h4 class="card-title mt-2"><?= $r['title']; ?></h4>
                                            <ul>
                                                <li>
                                                    <span><b>Tipe : </b><?= $r['tipe']; ?></span>
                                                </li>
                                                <li>
                                                    <span><b>Asal : </b><?= $r['asal_masakan']; ?></span>
                                                </li>
                                                <li>
                                                    <span><b>View : </b><?= $r['pengunjung']; ?></span>
                                                </li>
                                            </ul>
                                            <a href="<?= base_url('user/postingan/') . $r['id']; ?>" class="btn btn-primary">Selengkapnya</a>
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
                    if (!empty($rek)) {
                        foreach ($rek as $r) :
                            if ($i > 6 && $i <= 9) {
                                ?>
                                <div class="col-md-4">
                                    <div class="card mb-2">
                                        <img class="card-img-top" src="<?= base_url('assets/dmb/img/post/') . $r['gambar_1']; ?>" height="200" style="object-fit:cover;">
                                        <div class="card-body">
                                            <div class="row align-items-center ml-1">
                                                <div class="avatar">
                                                    <img alt="" src="<?= base_url('assets/img/profile/') . $r['image']; ?>" style="width:30px; border-radius:50%; height:30px; object-fit:cover;">
                                                </div>
                                                <a href="#" class="alert-link blue-text" style="margin-left:5px"><?= $r['name']; ?></a>
                                            </div>
                                            <h4 class="card-title mt-2"><?= $r['title']; ?></h4>
                                            <ul>
                                                <li>
                                                    <span><b>Tipe : </b><?= $r['tipe']; ?></span>
                                                </li>
                                                <li>
                                                    <span><b>Asal : </b><?= $r['asal_masakan']; ?></span>
                                                </li>
                                                <li>
                                                    <span><b>View : </b><?= $r['pengunjung']; ?></span>
                                                </li>
                                            </ul>
                                            <a href="<?= base_url('user/postingan/') . $r['id']; ?>" class="btn btn-primary">Selengkapnya</a>
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
    <!--/.Carousel Rekomendasi-->

    <!--Carousel Terbaru-->
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
    <!--/.Carousel Terbaru-->
</div>