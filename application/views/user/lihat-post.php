<!-- Body -->
<div class="bg-post"></div>

<form class="position-relative w-90 p-3 ml-auto mr-auto white mt-4 rounded-lg mb-4" method="post">
    <!-- Card deck -->
    <?php
    if (!empty($model['post'])) { // Jika data pada database tidak sama dengan empty (alias ada datanya)
        echo "<div class='card-deck'>";
        foreach ($model['post'] as $data) { // Lakukan looping pada variabel siswa dari controller
            ?>
            <!-- Card -->
            <div class="card mb-3 col-4 p-0" style="width: 32% !important;">

                <!--Card image-->
                <div class="view overlay">
                    <img class="card-img-top" style="height:200px; object-fit:cover;" src="<?= base_url('assets/dmb/img/post/') . $data->gambar_1; ?>" alt="Card image cap">
                </div>

                <!--Card content-->
                <div class="card-body">

                    <!--Title-->
                    <h4 class="card-title"><?php echo $data->title; ?></h4>
                    <!--Text-->
                    <ul>
                        <li>
                            <p class="card-text"><b>Asal : </b><?php echo $data->asal_masakan; ?></p>
                        </li>
                        <li>
                            <p class="card-text"><b>Tipe : </b><?php echo $data->tipe; ?></p>
                        </li>
                    </ul>
                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                    <a href="<?= base_url('user/editPost/') . $data->id; ?>" class="btn btn-success px-3 btn-sm"><i class="fas fa-edit" aria-hidden="true"></i></a>
                    <a href="<?= base_url('user/hapusPost/') . $data->id; ?>" class="btn btn-danger px-3 btn-sm"><i class="fas fa-trash" aria-hidden="true"></i></a>
                    <a href="<?= base_url('user/postingan/') . $data->id; ?>" class="btn btn-primary px-3 btn-sm">Baca Selengkapnya..</a>
                </div>
                <div class="card-footer text-muted success-color-dark white-text">
                    <p class="mb-0">Post Tanggal : <?= date('d F Y', $data->date_created); ?></p>
                </div>
            </div>
            <!-- Card -->
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
    <!-- Card deck -->
    <?php
    // Tampilkan link-link paginationnya
    echo $model['pagination'];
    ?>
</form>
<!-- Body -->