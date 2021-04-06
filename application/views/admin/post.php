<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
            <?= form_error('post', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-success"><?= $title; ?></h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama User</th>
                                        <th>Email User</th>
                                        <th>Judul</th>
                                        <th>Tipe Masakan</th>
                                        <th>Asal Masakan</th>
                                        <th>Pengunjung</th>
                                        <th>Tanggal</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama User</th>
                                        <th>Email User</th>
                                        <th>Judul</th>
                                        <th>Tipe Masakan</th>
                                        <th>Asal Masakan</th>
                                        <th>Pengunjung</th>
                                        <th>Tanggal</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($subPost as $p) : ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <td><?= $p['name']; ?></td>
                                            <td><?= $p['email']; ?></td>
                                            <td><?= $p['title']; ?></td>
                                            <td><?= $p['tipe']; ?></td>
                                            <td><?= $p['asal_masakan']; ?></td>
                                            <td><?= $p['pengunjung']; ?></td>
                                            <td><?= date('d F Y', $p['date_created']); ?></td>
                                            <td>
                                                <a href="<?= base_url('admin/deletePost/') . $p['id']; ?>" class="badge badge-danger">Hapus</a>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->


        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->