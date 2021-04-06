<div class="bg-postingan"></div>
<div class="position-relative w-90 p-3 ml-auto mr-auto mt-3 rounded-lg mb-3">
    <?= $this->session->flashdata('message'); ?>
    <div class="row">
        <div class="column w-30 pl-4" style="margin:auto">
            <h4><b><?= $post['title']; ?></b></h4>
        </div>
        <div class="column w-60" style="margin:auto">
            <hr>
        </div>
        <div class=" column w-10 pr-4" style="text-align: right; margin:auto">
            <a href="<?= base_url('user/cetakResep/') . $post['id']; ?>" style="color:black;">
                <h5><i class="fas fa-print"></i> Print</h5>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="column w-60 m-3" style="position: relative;">
            <img src="<?= base_url('assets/dmb/img/post/') . $post['gambar_1']; ?>" alt="Girl in a jacket" height="450" style="object-fit:cover; width:100%; border-radius: 20px;">
            <button type="button" data-toggle="modal" data-target="#modalYT" class="btn deep-orange darken-4 btn-sm btn-watch" style="color:white;">Tonton
                Video</button>
            <button type="button" data-toggle="modal" data-target="#modalPoll-1" class="btn deep-orange darken-4 p-1 btn-report"><i class="fas fa-flag" aria-hidden="true" style="color:white;"></i></button>
        </div>
        <div class="column w-37">
            <div class="row m-3">
                <img src="<?= base_url('assets/dmb/img/post/') . $post['gambar_2']; ?>" alt="Girl in a jacket" height="216" style="object-fit:cover; width:100%; border-radius: 20px;">
            </div>
            <div class="row m-3 mt-3">
                <img src="<?= base_url('assets/dmb/img/post/') . $post['gambar_3']; ?>" alt="Girl in a jacket" height="216" style="object-fit:cover; width:100%; border-radius: 20px;">
            </div>
        </div>
    </div>
    <div class="row mt-0">
        <div class="column w-60 ml-3 mr-3 mb-0" style="border-radius:10px;">
            <div class="column w-100 white p-3" style="border-radius:10px;">
                <span><b>Dibuat : </b><?= date('d F Y', $post['date_created']); ?> &nbsp;&nbsp;&nbsp;<b>Tipe : </b><?= $post['tipe']; ?> &nbsp;&nbsp;&nbsp;<b>Daerah : </b><?= $post['asal_masakan']; ?></span>
                <hr>
                <?= $post['deskripsi']; ?>
                <h5><b>Metode Step by Step</b></h5>
                <hr>
                <?= $post['metode']; ?>
                <hr>
                <div class="row">
                    <div class="column white pl-3 pt-2" style="width: 63% !important; ">
                        <span><b>TAG : </b><a href=""><span class="tag-border"><?= $post['tipe']; ?></span></a> &nbsp;&nbsp;&nbsp;<a href=""><span class="tag-border"><?= $post['asal_masakan']; ?></a></span></span>
                    </div>
                    <div class="column white pt-1" style="width: 37% !important; ">
                        <!-- AddToAny BEGIN -->
                        <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                            <a class="a2a_button_whatsapp"></a>
                            <a class="a2a_button_line"></a>
                            <a class="a2a_button_facebook"></a>
                            <a class="a2a_button_twitter"></a>
                            <a class="a2a_button_google_gmail"></a>
                            <a class="a2a_button_copy_link"></a>
                            <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                        </div>
                        <script async src="https://static.addtoany.com/menu/page.js"></script>
                        <!-- AddToAny END -->
                    </div>
                </div>
            </div>
            <div class="column w-100 white p-3 mt-3 mb-3" style="border-radius:10px;">
                <div class="row p-1 ml-4">
                    <div class="column w-30">
                        <img src="<?= base_url('assets/img/profile/') . $post['image']; ?>" alt="Girl in a jacket" height="180" width="180" style="object-fit:cover; border-radius: 50%;">
                    </div>
                    <div class="column w-60">
                        <h3 style="color:#871818;"><b>Sekilas Soal Penulis</b></h3>
                        <h4 class="mt-3 mb-4"><b><?= $post['name']; ?></b></h4>
                        <h5><?= $post['text']; ?></h5>
                     
                            <h6 style="overflow:hidden;"><?= $post['sosmed']; ?></h6>
                   
                    </div>
                </div>
            </div>
            <div class="row w-100 mt-3 m-0 mb-0">
                <div class="column w-20">
                    <h5><b>Post Terkait</b></h5>
                </div>
                <div class="column" style="width: 80% !important;">
                    <hr>
                </div>
            </div>
            <div class="row w-100 mt-0 m-0">
                <?php foreach ($recent as $r) : ?>
                    <div class="column w-31 white m-2" style="border-radius:10px;">
                        <div class="column w-100 mb-3" style="border-radius:10px;">
                            <img src="<?= base_url('assets/dmb/img/post/') . $r['gambar_1']; ?>" alt="Girl in a jacket" height="130" style="object-fit:cover; width:100%; border-radius:10px 10px 0px 0px;">
                            <a href="<?= base_url('user/postingan/') . $r['id']; ?>" ><h6 class="mt-2 ml-2" style="color:#871818; margin:auto;"><i><b><?= $r['title']; ?></b></i></h6></a>
                            <hr class="ml-2 mr-2">
                            <span class="p-2"><b>Type : </b><?= $r['tipe']; ?></span>
                            <br>
                            <span class="p-2"><b>Daerah : </b><?= $r['asal_masakan']; ?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <style>
                #container {
                    background-color: white;
                    padding: 1rem;
                    margin-top: 3%;
                    margin-bottom: 3%;
                    border-radius: 10px;
                }
            </style>
            <div id="container">
                <h3 style="margin-bottom:1%;"><b>Komentar Disqus</b></h3>
                <hr>
                <?php echo $disqus ?>
            </div>
        </div>
        <div class="column w-37 mb-4">
            <div class="row ml-3 mr-3 white p-3" style="border-radius:10px;">
                <div class="column w-100">
                    <h5><i class="fas fa-book"></i>&nbsp;<b>Bahan</b></h5>
                    <hr>
                </div>
                <div class="column w-100">
                    <?= $post['bahan']; ?>
                </div>
            </div>
            <?php if ($post['nutrisi'] != NULL) : ?> 
            <div class="row ml-3 mr-3 mt-3 white p-3" style="border-radius:10px;">
                <div class="column w-100">
                    <h5><i class="fas fa-heartbeat"></i>&nbsp;<b>Nutrisi</b></h5>
                    <hr>
                </div>
                <div class="column w-100">
                    <?= $post['nutrisi']; ?>
                </div>
            </div>
            <?php endif; ?>
            <div class="row pl-3 mt-4 mr-2">
                <div class="column w-30" style="margin:auto">
                    <h5><b>Populer Post</b></h5>
                </div>
                <div class="column w-60" style="margin:auto">
                    <hr>
                </div>
                <?php foreach ($populer as $p) : ?>
                    <div class="column w-100 mt-0 p-3 mb-0" style="position: relative;;">
                        <img src="<?= base_url('assets/dmb/img/post/') . $p['gambar_1']; ?>" alt="" height="180" style="object-fit:cover; width:100%; border-radius: 20px;">
                        <a href="<?= base_url('user/postingan/') . $p['id']; ?>" class="badge badge-success badge-pos m-4"><?= $p['title']; ?></a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- BATAS -->
    </div>
</div>

<!--Modal: modalYT-->
<div class="modal fade" id="modalYT" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">

            <!--Body-->
            <div class="modal-body mb-0 p-0">

                <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                    <?php
                    $urlyt = $post['youtube'];
                    parse_str(parse_url($urlyt, PHP_URL_QUERY), $my_array_of_vars);
                    ?>
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $my_array_of_vars['v']; ?>" allowfullscreen></iframe>
                </div>

            </div>

            <!--Footer-->
            <div class="modal-footer justify-content-center flex-column flex-md-row">
                <button type="button" class="btn btn-outline-dark btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>


            </div>

        </div>
        <!--/.Content-->

    </div>
</div>
<!--Modal: modalYT-->

<!-- Modal: modalPoll -->
<div class="modal fade right" id="modalPoll-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog modal-full-height modal-right modal-notify modal-info" role="document">
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <p class="heading lead">Laporan
                </p>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">×</span>
                </button>
            </div>

            <!--Body-->
            <form action="<?= base_url('user/laporan/') . $post['id']; ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="text-center">
                        <i class="far fa-file-alt fa-4x mb-3 animated rotateIn"></i>
                        <p>
                            <strong><?= $post['title']; ?></strong>
                        </p>
                        <p>Ada masalah apa anda dengan postingan ini?
                            <strong>Berikan kami feedback anda.</strong>
                        </p>
                    </div>
                    <hr>
                    <!--Basic textarea-->
                    <div class="md-form">
                        <textarea id="report" name="report" class="md-textarea form-control" rows="3" value="<?= set_value('report') ?>"></textarea>
                        <label for="report">Laporan Anda</label>
                    </div>

                </div>

                <!--Footer-->
                <div class="modal-footer justify-content-center">
                    <button type="submit" class="btn btn-dark-green">Kirim
                        <i class="fa fa-paper-plane ml-1"></i></button>
                    <a class="btn btn-danger waves-effect " data-dismiss="modal">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal: modalPoll -->