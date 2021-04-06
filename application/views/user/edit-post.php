<!-- Body -->
<div class="bg"></div>

<form class="position-relative w-75 p-3 ml-auto mr-auto white mt-4 rounded-lg mb-4" action="<?= base_url('user/editPost/')  . $post['id']; ?>" method="post" enctype="multipart/form-data" method="post">
    <div class="p-3">
        <?= $this->session->flashdata('message'); ?>
    </div>
    <!-- Judul -->
    <label for="title" class="font-weight-bold">Judul</label>
    <input type="text" id="title" name="title" class="form-control" placeholder="Judul Post" value="<?= $post['title']; ?>">
    <?= form_error('title', '<small class="text-danger pl-3">', '</small>'); ?>
    <hr>
    <!-- Gambar 1 -->
    <div class="form-group row">
        <div class="col-sm-2">Gambar 1</div>
        <div class="col-sm-10">
            <div class="row">
                <div class="col-sm-3">
                    <img src="<?= base_url('assets/dmb/img/post/') . $post['gambar_1']; ?>" class="img-thumbnail">
                </div>
                <div class="col-sm-9">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="gambar1" name="gambar1">
                        <label class="custom-file-label" for="gambar1">Pilih File</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Gambar 2 -->
    <div class="form-group row">
        <div class="col-sm-2">Gambar 2</div>
        <div class="col-sm-10">
            <div class="row">
                <div class="col-sm-3">
                    <img src="<?= base_url('assets/dmb/img/post/') . $post['gambar_2']; ?>" class="img-thumbnail">
                </div>
                <div class="col-sm-9">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="gambar2" name="gambar2">
                        <label class="custom-file-label" for="gambar2">Pilih File</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Gambar 3 -->
    <div class="form-group row">
        <div class="col-sm-2">Gambar 3</div>
        <div class="col-sm-10">
            <div class="row">
                <div class="col-sm-3">
                    <img src="<?= base_url('assets/dmb/img/post/') . $post['gambar_3']; ?>" class="img-thumbnail">
                </div>
                <div class="col-sm-9">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="gambar3" name="gambar3">
                        <label class="custom-file-label" for="gambar3">Pilih File</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Youtube -->
    <div class="input-group mb-5 mt-5">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fab fa-youtube mr-2"></i>Link
                Youtube</span>
        </div>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="youtube" name="youtube" value="<?= $post['youtube']; ?>">
    </div>
    <?= form_error('youtube', '<small class="text-danger pl-3">', '</small>'); ?>
    <hr>
    <!-- Asal dan Tipe -->
    <div class="form-row mb-4">
        <div class="col">
            <!-- Tipe -->
            <label for="id_tipe" class="font-weight-bold">Tipe Masakan</label>
            <select class="browser-default custom-select mb-4" id="id_tipe" name="id_tipe">
                <option value="" disabled="" selected="">Pilih Tipe Masakan</option>
                <?php foreach ($tipe as $t) : ?>
                    <option value="<?= $t['id']; ?>" <?php
                                                        if ($post['id_tipe'] == $t['id']) {
                                                            echo "selected";
                                                        }
                                                        ?>><?= $t['tipe']; ?></option>
                <?php endforeach; ?>
            </select>
            <?= form_error('id_tipe', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="col">
            <!-- Asal -->
            <label for="asal_masakan" class="font-weight-bold">Asal Masakan</label>
            <input type="text" id="asal_masakan" name="asal_masakan" class="form-control" placeholder="Asal Masakan" value="<?= $post['asal_masakan']; ?>">
            <?= form_error('asal_masakan', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
    </div>
    <hr>
    <!-- Deskripsi -->
    <label for="deskripsi" class="font-weight-bold">Deskripsi</label>
    <textarea id="deskripsi" name="deskripsi" value="">
    <?= $post['deskripsi']; ?>
    </textarea>
    <?= form_error('deskripsi', '<small class="text-danger pl-3">', '</small>'); ?>
    <hr>
    <!-- Metode -->
    <label for="metode" class="font-weight-bold mt-5">Metode</label>
    <textarea id="metode" name="metode" value="">
    <?= $post['metode']; ?>
    </textarea>
    <?= form_error('metode', '<small class="text-danger pl-3">', '</small>'); ?>
    <hr>
    <!-- Bahan -->
    <label for="bahan" class="font-weight-bold mt-5">Bahan</label>
    <textarea id="bahan" name="bahan" value="">
    <?= $post['bahan']; ?>
    </textarea>
    <?= form_error('bahan', '<small class="text-danger pl-3">', '</small>'); ?>
    <hr>
    <!-- Nutrisi -->

    <label for="nutrisi" class="font-weight-bold mt-5">Nutrisi</label>
    <textarea id="nutrisi" name="nutrisi" value="">
    <?= $post['nutrisi']; ?>
    </textarea>
    <?= form_error('nutrisi', '<small class="text-danger pl-3">', '</small>'); ?>
    <hr>

    <button type="submit" class="btn btn-sm btn-dark-green">Edit</button>
</form>
<!-- Body -->