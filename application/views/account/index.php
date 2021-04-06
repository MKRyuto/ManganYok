<div class="container emp-profile mt-6">
  <form method="post">
    <div class="row">
      <div class="col-md-4">
        <div class="profile-img mb-2">
          <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" style="object-fit: cover;" alt="" height="40" />
        </div>
      </div>
      <div class="col-md-6">
        <div class="profile-head">
          <h5>
            <?= $user['name']; ?>
          </h5>
          <h6>
            <?= $user['profesi']; ?>
          </h6>
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="profile-work">
          <p>MENU ANDA</p>
          <a href="<?= base_url('user/post'); ?>">Buat Post</a><br />
          <a href="<?= base_url('user/lihatpost'); ?>">Lihat Post</a><br />
          <p>MENU WEB</p>
          <a href="<?= base_url('user'); ?>">Home</a><br />
          <a href="<?= base_url('user/filter'); ?>">Filter</a><br />
          <a href="<?= base_url('user/faqs'); ?>">FAQs</a><br />
          <a href="<?= base_url('user/ketentuan'); ?>">Ketentuan</a><br />
        </div>
      </div>
      <div class="col-md-8">
        <div class="tab-content profile-tab" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

            <div class="row">
              <div class="col-md-6">
                <label>Name</label>
              </div>
              <div class="col-md-6">
                <p><?= $user['name']; ?></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label>Email</label>
              </div>
              <div class="col-md-6">
                <p><?= $user['email']; ?></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label>Telp.</label>
              </div>
              <div class="col-md-6">
                <p><?= $user['telp']; ?></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label>Profesi</label>
              </div>
              <div class="col-md-6">
                <p><?= $user['profesi']; ?></p>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="row">
              <div class="col-md-6">
                <label>Telah Bergabung Sejak</label>
              </div>
              <div class="col-md-6">
                <p><?= date('d F Y', $user['date_created']); ?></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label>Jumlah Post</label>
              </div>
              <div class="col-md-6">
                <p><?= $post ?></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label>Sosial Media</label>
              </div>
              <div class="col-md-6">
                <p><?= $user['sosmed']; ?></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label>Deskripsi Singkat</label><br />
                <p><?= $user['text']; ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>


<script src="js/bootstrap.js"></script>
<script src="jquery/jquery-3.3.1.min.js"></script>
<script src="popper/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

</html>