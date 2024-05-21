<?php
  require 'functions.php';
  $artikel = query("SELECT * FROM artikel");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dayen - Profolio</title>
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css" />
  </head>
  <body>
    <!-- header -->
    <header class="header">
      <div class="container">
        <div class="row justify-content-between">
          <div class="logo">
            <a href="index.html">Dayen</a>
          </div>
          <div class="menu-btn outer-shadow hover-shadow">
            <ul>
              <li><img src="img/menu.png" /></li>
            </ul>
          </div>
        </div>
      </div>
    </header>

    <!-- navigation -->
    <nav class="nav-menu">
      <div class="close-nav-menu outer-shadow hover-shadow">&times;</div>
      <div class="nav-menu-inner">
        <ul>
          <li><a href="#home" class="link-item inner-shadow active">home</a></li>
          <li><a href="#about" class="link-item outer-shadow hover-shadow">about</a></li>
          <li><a href="#blog" class="link-item outer-shadow hover-shadow">blog</a></li>
          <li><a href="#gallery" class="link-item outer-shadow hover-shadow">gallery</a></li>
          <li><a href="#contact" class="link-item outer-shadow hover-shadow">contact</a></li>
        </ul>
      </div>

      <!-- copyrigt text -->
      <p class="copyright-text">&copy; Dayen Manoppo</p>
    </nav>
    <div class="fade-out-effect"></div>

    <!-- home section -->
    <section class="home-section section active" id="home">
      <div class="container">
        <div class="row full-screen align-item-center">
          <div class="home-text">
            <p>hallo</p>
            <h2>Saya, <span class="efek-ngetik"></span></h2>
            <h1>Ordinary Programmer</h1>
            <a href="#about" class="btn-1 link-item outer-shadow hover-shadow">more about me</a>
          </div>
          <div class="home-img">
            <div class="img-box inner-shadow">
              <img src="img/Yenn.jpg" class="outer-shadow" alt="profile-pic" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- about section -->
    <section class="about-section section" id="about">
      <div class="container">
        <div class="row">
          <div class="section-tittle">
            <h2>about me</h2>
          </div>
        </div>
        <div class="row">
          <div class="about-img">
            <div class="img-box inner-shadow">
              <img src="img/Yenn.jpg" alt="profile-pic" class="outer-shadow" />
            </div>

            <!-- social links -->
            <div class="social-links">
              <a href="https://github.com/DayenM" target="_blank" class="outer-shadow hover-shadow">
                <img src="img/github.png" />
              </a>
              <a href="https://instagram.com/yennn_m_" target="_blank" class="outer-shadow hover-shadow">
                <img src="img/instagram.png" />
              </a>
            </div>
          </div>
          <div class="about-info">
            <p><span> Hi!, Nama saya Dayen Manoppo biasa dipanggil Dayen, Mahasiswa dari Universitas Sam Ratulangi Manado.</span></p>
            <p>
              Saya anak kedua dari tiga bersaudara, hobi saya bermain game, selain hobi bermain game, saya juga tertarik dalam dunia pemrograman. Sudah lama saya merasa ada kemungkinan yang tak terbatas yang ditawarkan oleh dunia teknologi
              dan pemrograman. Mengetahui bahwa kita dapat menciptakan sesuatu dari nol menggunakan bahasa pemrograman, membangun aplikasi yang bermanfaat, atau bahkan mengotomatiskan dan memudahkan tugas-tugas sehari-hari. Setiap kali saya
              mempelajari bahasa pemrograman baru atau menyelesaikan proyek pemrograman, saya merasa seperti sedang memecahkan teka-teki yang menantang, dan itu memberi saya kepuasan ketika berhasil menyelesaikannya.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- blog section -->
    <section class="blog-section section" id="blog">
      <div class="container">`
        <div class="row">
          <?php foreach ($artikel as $artikeldb): ?>
          <article class="blog-article">
            <div class="blog-article-inner outer-shadow">
              <h2><?php echo htmlspecialchars($artikeldb['judul']); ?></h2>
              <p><?php echo nl2br(htmlspecialchars($artikeldb['deskripsi'])); ?></p>
              <br />
              <h1>
                SUMBER: <a href="<?php echo htmlspecialchars($artikeldb['sumber']); ?>" target="_blank"><?php echo htmlspecialchars($artikeldb['sumber']); ?></a>
              </h1>
            </div>
          </article>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- gallery section -->
    <section class="gallery-section section" id="gallery">
      <div class="container">
        <div class="row">
          <div class="section-tittle">
            <h2>My Gallery</h2>
          </div>
        </div>
        <div class="row gallery-items">
          <div class="gallery-item">
            <div class="gallery-item-inner outer-shadow">
              <div class="gallery-item-img">
                <img src="img/Me.jpg" />
              </div>
            </div>
          </div>
          <div class="gallery-item">
            <div class="gallery-item-inner outer-shadow">
              <div class="gallery-item-img">
                <img src="img/Me3.jpg" />
              </div>
            </div>
          </div>
          <div class="gallery-item">
            <div class="gallery-item-inner outer-shadow">
              <div class="gallery-item-img">
                <img src="img/Me2.jpg" />
              </div>
            </div>
          </div>
          <div class="gallery-item">
            <div class="gallery-item-inner outer-shadow">
              <div class="gallery-item-img">
                <img src="img/Me4.jpg" />
              </div>
            </div>
          </div>
          <div class="gallery-item">
            <div class="gallery-item-inner outer-shadow">
              <div class="gallery-item-img">
                <img src="img/Me6.jpg" />
              </div>
            </div>
          </div>
          <div class="gallery-item">
            <div class="gallery-item-inner outer-shadow">
              <div class="gallery-item-img">
                <img src="img/Me5.jpg" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- contact section -->
    <section class="contact-section section" id="contact">
      <div class="container">
        <div class="row">
          <div class="section-tittle">
            <h2 data-heading="contact">Contact</h2>
          </div>
        </div>
        <div class="row">
          <!-- contact item -->
          <div class="contact-item">
            <div class="contact-item-inner outer-shadow">
              <img src="img/call.png" />
              <span>Phone</span>
              <p>+62 831 3107 8783</p>
            </div>
          </div>
          <div class="contact-item">
            <div class="contact-item-inner outer-shadow">
              <img src="img/email.png" />
              <span>Email</span>
              <p>yennmanoppo@gmail.com</p>
            </div>
          </div>
          <div class="contact-item">
            <div class="contact-item-inner outer-shadow">
              <img src="img/location.png" />
              <span>Location</span>
              <p>Manado, Sulawesi Utara</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- main js -->
    <script src="js/main.js"></script>
  </body>
</html>
