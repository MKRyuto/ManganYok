<!-- Body -->
<div class="bg"></div>

<form class="position-relative w-75 p-3 ml-auto mr-auto white mt-4 rounded-lg mb-4" action="<?= base_url('user/post'); ?>" method="post" enctype="multipart/form-data" method="post">
    <div class="p-3">
        <?= $this->session->flashdata('message'); ?>
    </div>
    <!-- Judul -->
    <label for="title" class="font-weight-bold">Judul</label>
    <input type="text" id="title" name="title" class="form-control" placeholder="Judul Post" value="<?= set_value('title'); ?>">
    <?= form_error('title', '<small class="text-danger pl-3">', '</small>'); ?>
    <hr>
    <!-- Gambar 1 -->
    <label for="gambar1" class="font-weight-bold">Gambar 1</label>
    <div class="form-group row">
        <div class="col-sm-10">
            <div class="row">
                <div class="col-sm-9">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="gambar1" name="gambar1" value="<?= set_value('gambar1'); ?>">
                        <label class="custom-file-label" for="gambar1">Pilih File</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Gambar 2 -->
    <label for="gambar2" class="font-weight-bold">Gambar 2</label>
    <div class="form-group row">
        <div class="col-sm-10">
            <div class="row">
                <div class="col-sm-9">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="gambar2" name="gambar2" value="<?= set_value('gambar2'); ?>">
                        <label class="custom-file-label" for="gambar2">Pilih File</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Gambar 3 -->
    <label for="gambar3" class="font-weight-bold">Gambar 3</label>
    <div class="form-group row">
        <div class="col-sm-10">
            <div class="row">
                <div class="col-sm-9">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="gambar3" name="gambar3" value="<?= set_value('gambar3'); ?>">
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
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="youtube" name="youtube" value="<?= set_value('youtube'); ?>">
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
                    <option value="<?= $t['id']; ?>"><?= $t['tipe']; ?></option>
                <?php endforeach; ?>
            </select>
            <?= form_error('id_tipe', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="col">
            <!-- Asal -->
            <label for="asal_masakan" class="font-weight-bold">Asal Masakan</label>
            <input type="text" id="asal_masakan" name="asal_masakan" class="form-control" placeholder="Asal Masakan" value="<?= set_value('asal_masakan'); ?>">
            <?= form_error('asal_masakan', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
    </div>
    <hr>
    <!-- Deskripsi -->
    <label for="deskripsi" class="font-weight-bold">Deskripsi</label>
    <textarea id="deskripsi" name="deskripsi" value="<?= set_value('deskripsi'); ?>">
    <p>    &nbsp;&nbsp;&nbsp;&nbsp;<span style="font-family: Helvetica; font-size: 14px; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae tincidunt magna. Nullam varius fringilla nunc, sed luctus nulla posuere a. Nullam eu porttitor ipsum. Donec at nisl tincidunt, molestie est ac, ultrices urna. Pellentesque efficitur erat justo, eu maximus augue molestie vitae. Morbi rutrum nisi justo, at imperdiet risus accumsan nec. Donec auctor egestas ligula non maximus. Quisque nec lacus odio. Ut finibus, mi vel pulvinar ullamcorper, sapien purus posuere lorem, ac porta diam mi in erat. Fusce gravida vehicula dolor, ut ullamcorper ante hendrerit nec.</span>
    </p>
    </textarea>
    <?= form_error('deskripsi', '<small class="text-danger pl-3">', '</small>'); ?>
    <hr>
    <!-- Metode -->
    <label for="metode" class="font-weight-bold mt-5">Metode</label>
    <textarea id="metode" name="metode" value="<?= set_value('metode'); ?>">
    <p><b>Step 1 :</b></p><p><span style="font-family: Helvetica; font-size: 14px; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae tincidunt magna. Nullam varius fringilla nunc, sed luctus nulla posuere a. Nullam eu porttitor ipsum. Donec at nisl tincidunt, molestie est ac, ultrices urna.</span></p><p><span style="font-weight: bolder;">Step 2:</span></p><p><span style="font-family: Helvetica; font-size: 14px; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae tincidunt magna. Nullam varius fringilla nunc, sed luctus nulla posuere a. Nullam eu porttitor ipsum. Donec at nisl tincidunt, molestie est ac, ultrices urna.</span></p><p><span style="font-weight: bolder;">Step 3 :</span></p><p><span style="font-family: Helvetica; font-size: 14px; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae tincidunt magna. Nullam varius fringilla nunc, sed luctus nulla posuere a. Nullam eu porttitor ipsum. Donec at nisl tincidunt, molestie est ac, ultrices urna.</span></p><p><span style="font-weight: bolder;">Step 4 :</span></p><p><span style="font-family: Helvetica; font-size: 14px; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae tincidunt magna. Nullam varius fringilla nunc, sed luctus nulla posuere a. Nullam eu porttitor ipsum. Donec at nisl tincidunt, molestie est ac, ultrices urna.</span></p><p><br></p>
    </textarea>
    <?= form_error('metode', '<small class="text-danger pl-3">', '</small>'); ?>
    <hr>
    <!-- Bahan -->
    <label for="bahan" class="font-weight-bold mt-5">Bahan</label>
    <textarea id="bahan" name="bahan" value="<?= set_value('bahan'); ?>">
    <ul><li><span style="font-size: 1rem;">Beras : 1 kg</span><br></li><li>Santan&nbsp; : 900 ml</li><li>Kelapa Tua : 1 buah</li><li>Kunyit : 5 cm</li><li>Serai 2 : batang</li><li>Daun Salam : 4 lembar</li></ul>
    </textarea>
    <?= form_error('bahan', '<small class="text-danger pl-3">', '</small>'); ?>
    <hr>
    <!-- Nutrisi -->

    <label for="nutrisi" class="font-weight-bold mt-5">Nutrisi</label>
    <textarea id="nutrisi" name="nutrisi" value="<?= set_value('nutrisi'); ?>">
    <ul><li>Kilojoule : 627.6 kj</li><li>Kalori : 150 kkal</li><li> Lemak : 0.27g</li><li>Protein : 2.99g</li><li>Karbohidrat : 32.96g</li><li>Sodium : 869 mg</li><li>Kalium : 70mg</li></ul>
    </textarea>
    <?= form_error('nutrisi', '<small class="text-danger pl-3">', '</small>'); ?>
    <hr>

    <button type="submit" class="btn btn-sm btn-dark-green">Post</button>
</form>
<!-- Body -->