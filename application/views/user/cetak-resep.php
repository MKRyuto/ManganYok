<div class="position-relative w-90 p-3 ml-auto mr-auto mt-3 rounded-lg mb-3">
    <div class="row">
        <div class="column w-30 pl-4" style="margin:auto">
            <h4><b><?= $post['title']; ?></b></h4>
        </div>
        <div class="column w-70" style="margin:auto">
            <hr>
        </div>
    </div>
    <div class="row mt-0">
        <div class="column w-60 ml-3 mr-3 mb-0" style="border-radius:10px;">
            <div class="column w-100 white p-3" style="border-radius:10px;">
                <span><b>Tipe : </b><?= $post['tipe']; ?> &nbsp;&nbsp;&nbsp;<b>Daerah : </b><?= $post['asal_masakan']; ?></span>
                <hr>
                <?= $post['deskripsi']; ?>
                <h5><b>Metode Step by Step</b></h5>
                <hr>
                <?= $post['metode']; ?>
                <hr>
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
                    <div class="row ml-3 mr-3 mt-3 white p-3" style="border-radius:10px;">
                        <div class="column w-100">
                            <h5><i class="fas fa-heartbeat"></i>&nbsp;<b>Nutrisi</b></h5>
                            <hr>
                        </div>
                        <div class="column w-100">
                            <?= $post['nutrisi']; ?>
                        </div>
                    </div>
                </div>
                <hr>
                <span><b>TAG : </b>
                    <p href=""><span class="tag-border"><?= $post['tipe']; ?></span></p> &nbsp;&nbsp;&nbsp;<p href=""><span class="tag-border"><?= $post['asal_masakan']; ?></p>
                </span></span>
                <hr>
            </div>
            <div class="column w-100 white p-3 mt-3 mb-3" style="border-radius:10px;">
                <div class="row p-1 ml-4">
                    <div class="column w-60">
                        <h4 class="mt-3 mb-4"><b>Di Post Oleh : </b><?= $user['name']; ?></h4>
                        <h4 class="mt-3 mb-4"><b>Pada Tanggal : </b><?= date('d F Y', $post['date_created']); ?></h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- BATAS -->
    </div>
</div>