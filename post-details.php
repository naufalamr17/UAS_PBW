<?php
include('lib/dbconnect.php');

if ($_GET['id'] != "") {
  $query = mysqli_query($koneksi, "select * from tb_gambar where id_gambar='" . $_GET['id'] . "'");
  $row = mysqli_fetch_array($query);
  $komen = mysqli_query($koneksi, "SELECT * FROM tb_komentar where id_gambar='" . $_GET['id'] . "'");
  $id_gambar = $_GET['id'];
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet" />

    <title>Post Details</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/templatemo-stand-blog.css" />
    <link rel="stylesheet" href="assets/css/owl.css" />
    <!--

TemplateMo 551 Stand Blog

https://templatemo.com/tm-551-stand-blog

-->
  </head>

  <body>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
      <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header>
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php">
            <h2>Galeri<em>Ku</em></h2>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Me</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>Post Details</h4>
                <h2>GaleriKu by Naufal</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- Banner Ends Here -->

    <section class="blog-posts grid-system">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="image_view.php?id_gambar= <?php echo $id_gambar; ?>" />
                    </div>
                    <div class="down-content">
                      <h4><?php echo $row['nama_gambar']; ?></h4>
                      <p>
                        <?php echo $row['keterangan']; ?>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item comments">
                    <div class="sidebar-heading">
                      <h2>Comments</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <?php
                        while ($com = mysqli_fetch_array($komen)) {
                        ?>
                          <li>
                            <h4><?php echo $com['nama']; ?></h4>
                            <p>
                              <?php echo $com['komentar']; ?>
                            </p>
                          </li>
                          <br>
                        <?php } ?>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item submit-comment">
                    <div class="sidebar-heading">
                      <h2>Your comment</h2>
                    </div>
                    <div class="content">
                      <form id="comment" action="comment.php" method="post">
                        <div class="row">
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input type="hidden" name="id" value="<?php echo $id_gambar; ?>" />
                              <input name="name" type="text" id="name" placeholder="Your name" required="" />
                            </fieldset>
                          </div>
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="email" type="text" id="email" placeholder="Your email" required="" />
                            </fieldset>
                          </div>
                          <div class="col-md-12 col-sm-12">
                            <fieldset>
                              <input name="subject" type="text" id="subject" placeholder="Subject" />
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <textarea name="message" rows="6" id="message" placeholder="Type your comment" required=""></textarea>
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <button type="submit" id="form-submit" class="main-button">
                                Submit
                              </button>
                            </fieldset>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="sidebar">
              <div class="row">
                <div class="col-lg-12">
                  <div class="sidebar-item recent-posts">
                    <div class="sidebar-heading">
                      <h2>About this Web</h2>
                    </div>
                    <div class="content">
                      <img src="assets/images/Naufal Ammar Hidayatulloh.jpg" alt="Naufal Ammar Hidayatulloh" style="
                          display: block;
                          margin-left: auto;
                          margin-right: auto;
                          margin-bottom: 20px;
                          width: 200px;
                          border-radius: 100%;
                        " />
                      <p style="text-align: justify">
                        Halo, saya Naufal Ammar Hidayatulloh dari kelas 4E Prodi
                        Informatika UNSIKA. Saya membuat web ini guna memenuhi
                        tugas UAS Pemrograman Berbasis Web. Saya membuat web ini
                        menggunakan template dari
                        <a href="https://templatemo.com/tm-551-stand-blog" target="_blank">TemplateMo</a>. Terima kasih atas waktunya sudah mengunjungi web ini.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="copyright-text">
              <p>
                Copyright 2020 Stand Blog Co. | Design:
                <a rel="nofollow" href="https://templatemo.com" target="_parent">TemplateMo</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>
  </body>

  </html>

<?php
} else {
  echo "<script>alert ('Error')</script>";
}
?>