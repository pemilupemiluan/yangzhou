<?php include 'header.php'; ?>

<div class="page-body-wrapper">
  <section id="home" class="home">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="main-banner">
            <div class="d-sm-flex justify-content-between">
              <div data-aos="zoom-in-up">
                <div class="banner-title">
                  <h3 class="font-weight-medium">
                    Sistem Informasi <b>E-Voting</b> Pemilihan Ketua PPIT Nanjing
                    Berbasis Web
                  </h3>
                </div>
                <p class="mt-3">
                  Selamat datang di sistem informasi e-voting pemilihan ketua PPIT Nanjing. Silahkan gunakan hak pilih anda dengan bijak.
                </p>

                <a href="kandidat.php" class="btn btn-outline-secondary text-white mt-3">LIHAT KANDIDAT</a>
                <a href="voting.php" class="btn btn-secondary mt-3">VOTING SEKARANG</a>

              </div>
              <div class="mt-5 mt-lg-0">
                <img src="assets_depan/images/group.png" alt="marsmello" class="img-fluid" data-aos="zoom-in-up">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="our-services" id="services">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h5 class="text-dark">Jadi gampang</h5>
          <h3 class="font-weight-medium text-dark mb-5">Voting Dengan E-Voting.</h3>
        </div>
      </div>
      <div class="row" data-aos="fade-up">
        <div class="col-sm-4 text-center text-lg-left">
          <div class="services-box" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
            <img src="assets_depan/images/integrated-marketing.svg" alt="integrated-marketing" data-aos="zoom-in">
            <h6 class="text-dark mb-3 mt-4 font-weight-medium">Quick Count System 
            </h6>
            <p>Untuk mengetahui hasil sementara
            sistem dilengkapai dengan fitur Quick Count. 
            </p>
          </div>
        </div>
        <div class="col-sm-4 text-center text-lg-left">
          <div class="services-box"   data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
            <img src="assets_depan/images/design-development.svg" alt="design-development" data-aos="zoom-in">
            <h6 class="text-dark mb-3 mt-4 font-weight-medium">Calon Ketua PPIT Nanjing
            </h6>
            <p>Untuk mengetahui identitas kandidat
              anda dapat menekan menu kandidat.
            </p>
          </div>
        </div>
        <div class="col-sm-4 text-center text-lg-left">
          <div class="services-box" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
            <img src="assets_depan/images/digital-strategy.svg" alt="digital-strategy" data-aos="zoom-in">
            <h6 class="text-dark mb-3 mt-4 font-weight-medium"> Proses Pemilihan Cepat 
            </h6>
            <p>Dengan menggunakan sistem e-voting 
              proses pemilihan cepat dan transparan.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="our-process" id="syarat">
    <div class="container">
      <div class="row">
        <div class="col-sm-6" data-aos="fade-up">
          <h3 class="font-weight-medium text-dark">Cara Mengikuti Voting!</h3>          
          <p class="font-weight-medium mb-4"> 
            Pastikan kamu sudah memiliki akun dan terdaftar di sistem e-voting ini,
            <br>
            Jika belum, silahkan hubungi admin.
          </p>
          <div class="d-flex justify-content-start mb-3">
            <img src="assets_depan/images/tick.png" alt="tick" class="mr-3 tick-icon"  >
            <p class="mb-0">Login</p>
          </div>

          <div class="d-flex justify-content-start mb-3">
            <img src="assets_depan/images/tick.png" alt="tick" class="mr-3 tick-icon"  >
            <p class="mb-0">Pilih Menu Voting</p>
          </div>

          <div class="d-flex justify-content-start mb-3">
            <img src="assets_depan/images/tick.png" alt="tick" class="mr-3 tick-icon"  >
            <p class="mb-0">Pilih Kandidat</p>
          </div>

          <div class="d-flex justify-content-start mb-3">
            <img src="assets_depan/images/tick.png" alt="tick" class="mr-3 tick-icon"  >
            <p class="mb-0">Klik Tombol Voting</p>
          </div>

          <div class="d-flex justify-content-start">
            <img src="assets_depan/images/tick.png" alt="tick" class="mr-3 tick-icon"  >
            <p class="mb-0">Selesai</p>
          </div>

        </div>
        <div class="col-sm-6 text-right" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
          <img src="assets_depan/images/idea.png" alt="idea" class="img-fluid">
        </div>
      </div>
    </div>
  </section>

  <section class="our-projects" id="projects">
    <div class="container">
      <div class="row mb-5">
        <div class="col-sm-12">
          <div class="d-sm-flex justify-content-between align-items-center mb-2">
            <h3 class="font-weight-medium text-dark ">Gunakanlah hak pilih anda dengan bijak</h3>
            <div><a href="voting.php" class="btn btn-outline-primary">Voting Sekarang</a></div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="row pt-5 mt-5 pb-5 mb-5">
        <div class="col-sm-3">
          <div class="d-flex py-3 my-3 my-lg-0 justify-content-center" data-aos="fade-down">
            <img src="assets_depan/images/satisfied-client.svg" alt="satisfied-client" class="mr-3">
            <div>
              <?php 
              $pemilih = mysqli_query($koneksi,"SELECT * FROM pemilih");
              ?>
              <h4 class="font-weight-bold text-dark mb-0"><span><?php echo mysqli_num_rows($pemilih); ?></span></h4>
              <h5 class="text-dark mb-0">Jumlah Pemilih</h5>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="d-flex py-3 my-3 my-lg-0 justify-content-center" data-aos="fade-up">
            <img src="assets_depan/images/finished-project.svg" alt="satisfied-client" class="mr-3">
            <div>
              <?php 
              $kandidat = mysqli_query($koneksi,"SELECT * FROM kandidat");
              ?>
              <h4 class="font-weight-bold text-dark mb-0"><span><?php echo mysqli_num_rows($kandidat); ?></span></h4>
              <h5 class="text-dark mb-0">Jumlah Kandidat</h5>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="d-flex py-3 my-3 my-lg-0 justify-content-center" data-aos="fade-down">
            <img src="assets_depan/images/team-members.svg" alt="Team Members" class="mr-3">
            <div>
              <?php 
              $pemilih_sudah = mysqli_query($koneksi,"SELECT * FROM pemilih WHERE pemilih_id IN (select voting_pemilih from voting)");
              ?>
              <h4 class="font-weight-bold text-dark mb-0"><span><?php echo mysqli_num_rows($pemilih_sudah); ?></span></h4>
              <h5 class="text-dark mb-0">Pemilih sudah memilih</h5>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="d-flex py-3 my-3 my-lg-0 justify-content-center" data-aos="fade-up">
            <img src="assets_depan/images/our-blog-posts.svg" alt="Our Blog Posts" class="mr-3">
            <div>
              <?php 
              $pemilih_sudah = mysqli_query($koneksi,"SELECT * FROM pemilih WHERE pemilih_id NOT IN (select voting_pemilih from voting)");
              ?>
              <h4 class="font-weight-bold text-dark mb-0"><span><?php echo mysqli_num_rows($pemilih_sudah); ?></span></h4>
              <h5 class="text-dark mb-0">Pemilih belum memilih</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
</div>

<?php include 'footer.php'; ?>