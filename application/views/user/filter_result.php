<!-- Body -->
<div class="bg-search"></div>

<form class="position-relative w-90 ml-auto mr-auto white mt-4 rounded-lg mb-4" method="post">
    <!-- Card deck -->
    <!--All Card-->
    <div class="row p-4 ml-4" style="width: 100% !important;">
        <?php
        if (!empty($model['post'])) { // Jika data pada database tidak sama dengan empty (alias ada datanya)
            echo "<div class='card-deck'>";
            foreach ($model['post'] as $data) { // Lakukan looping pada variabel siswa dari controller
                ?>
                <div class="column mb-4" style="widows: 33% !important;">
                    <div class="card text-center" style="width: 22rem;">
                        <img src="<?= base_url('assets/dmb/img/post/') . $data->gambar_1; ?>" class="card-img-top" height="200" style="object-fit:cover;">
                        <div class="card-body">
                            <h5 class="card-title" id="Title_picture"><?php echo $data->title; ?></h5>
                            <div class="row align-items-center justify-content-center">
                                <div class="avatar">
                                    <img alt="" src="<?= base_url('assets/img/profile/') . $data->image; ?>" style="width:30px; border-radius:50%; height:30px; object-fit:cover;">
                                </div>
                                <a href="#" class="alert-link green-text" style="margin-left:5px"><?php echo $data->name; ?></a>
                            </div>
                            <div class="row align-items-center justify-content-center" style="margin-top:10px;">
                                <span class="badge badge-primary green darken-1"><?php echo $data->asal_masakan; ?></span>
                                <span class="badge badge-primary ml-2 green darken-1"><?php echo $data->tipe; ?></span>
                            </div>
                            <div class="alert alert-light" role="alert">
                                <p class="card-text" id="view">View: <?php echo $data->pengunjung; ?></p>
                            </div>
                            <a href="<?= base_url('user/postingan/') . $data->id; ?>" class="btn btn-primary green darken-1" id="button">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            <?php
        }
    } else { // Jika data tidak ada
        echo "<div class='text-center'>";
        echo "<tr>
                    <td colspan='5'><b>Data Kosong</b></td>
                </tr>";
        echo "</div>";
    }
    ?>
    </div>
    </div>
    <?php
    // Tampilkan link-link paginationnya
    echo $model['pagination'];
    ?>
</form>

<!-- Body -->