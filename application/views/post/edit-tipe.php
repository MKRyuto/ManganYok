<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <?= form_open_multipart('post/editTipe/' . $tipe['id']); ?>
            <div class="form-group row">
                <label for="tipe" class="col-sm-2 col-form-label">Nama Tipe Masakan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="tipe" name="tipe" value="<?= $tipe['tipe']; ?>">
                    <?= form_error('tipe', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-success">Edit</button>
                </div>

            </div>

            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->