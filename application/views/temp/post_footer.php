 <!-- Footer -->
 <footer class="page-footer font-small green pt-4">

     <!-- Footer Links -->
     <div class="container-fluid text-center text-md-left">

         <!-- Grid row -->
         <div class="row">

             <!-- Grid column -->
             <div class="col-md-3 mt-md-0 mt-3">

                 <!-- Content -->

                 <h5 class="text-uppercase mt-2 ml-1"><img src="<?= base_url(''); ?>assets/img/Logo WEb.png" alt="" height="40" width="100" style="object-fit:cover;"> ManganYok</h5>
                 <p>Merupakan Website Resep Masakan
                     yang menyediakan berbagai Resep
                     masakan dari berbagai Daerah dan
                     Tipe dari berbagai macam orang</p>

             </div>
             <!-- Grid column -->

             <hr class="clearfix w-100 d-md-none pb-3">

             <!-- Grid column -->
             <div class="col-md-3 mb-md-0 mb-3">

                 <!-- Links -->
                 <h6 class="text-uppercase font-weight-bold">Menu Anda</h6>
                 <hr class="white accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                 <p>
                     <a href="<?= base_url('user/post'); ?>">Buat Post</a>
                 </p>
                 <p>
                     <a href="<?= base_url('user/lihatpost'); ?>">Lihat Post</a>
                 </p>
                 <p>
                     <a href="<?= base_url('account'); ?>">Akun Anda</a>
                 </p>

             </div>
             <!-- Grid column -->

             <!-- Grid column -->
             <div class="col-md-3 mb-md-0 mb-3">

                 <!-- Links -->
                 <h6 class="text-uppercase font-weight-bold">Menu Web</h6>
                 <hr class="white accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                 <p>
                     <a href="<?= base_url('user/filter'); ?>">Filter</a>
                 </p>
                 <p>
                     <a href="<?= base_url('user/ketentuan'); ?>">Ketentuan</a>
                 </p>
                 <p>
                     <a href="<?= base_url('user/faqs'); ?>">FAQs</a>
                 </p>

             </div>
             <!-- Grid column -->

             <!-- Grid column -->
             <div class="col-md-3 mb-md-0 mb-3">

                 <!-- Links -->
                 <h6 class="text-uppercase font-weight-bold">Contact</h6>
                 <hr class="white accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                 <p>
                     <i class="fab fa-facebook mr-3"></i> ManganYok</p>
                 <p>
                     <i class="fas fa-envelope mr-3"></i> web.manganyok@gmail.com</p>
                 <p>
                     <i class="fas fa-phone mr-3"></i> +62 8233 4053 233</p>

             </div>
             <!-- Grid column -->

         </div>
         <!-- Grid row -->

     </div>
     <!-- Footer Links -->

     <!-- Copyright -->
     <div class="footer-copyright text-center py-3 green darken-1">© <?= date('Y'); ?> Copyright:
         <a href="#"> ManganYok</a>
     </div>
     <!-- Copyright -->

 </footer>
 <!-- Footer -->

 <!-- SCRIPTS -->
 <!-- JQuery -->
 <script type="text/javascript" src="<?= base_url(''); ?>assets/dmb/js/jquery-3.3.1.min.js"></script>
 <!-- Bootstrap tooltips -->
 <script type="text/javascript" src="<?= base_url(''); ?>assets/dmb/js/popper.min.js"></script>
 <!-- Bootstrap core JavaScript -->
 <script type="text/javascript" src="<?= base_url(''); ?>assets/dmb/js/bootstrap.min.js"></script>
 <!-- MDB core JavaScript -->
 <script type="text/javascript" src="<?= base_url(''); ?>assets/dmb/js/mdb.min.js"></script>
 <script type="text/javascript" src="<?= base_url(''); ?>assets/dmb/js/corosel.js"></script>
 <script src="<?= base_url(''); ?>assets/dmb/dist/summernote-bs4.js"></script>

 <script>
     $('.custom-file-input').on('change', function() {
         let fileName = $(this).val().split('\\').pop();
         $(this).next('.custom-file-label').addClass("selected").html(fileName);
     });

     $('#deskripsi').summernote();

     $('#metode').summernote();

     $('#bahan').summernote();

     $('#nutrisi').summernote();
 </script>
 </body>

 </html>