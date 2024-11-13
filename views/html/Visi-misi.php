<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/Visi-misi.css">
    <link rel="icon" href="/assets/img/logo.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
   <!-- navbar -->
   <nav class="navbar navbar-expand-lg bg-custom">
    <div class="container-fluid">
      <a class="navbar-brand logo" href="#">
        <img src="/assets/img/logo.png" class="logo-img" alt="Logo" />
        <div class="header-text">
          <span class="main-text">SDN 1 Kalisat</span>
          <span class="sub-text">Kalisat - Jember</span>
        </div>
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="/index.html">Beranda</a>
          </li>
          <!-- Dropdown Profil -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="profilDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Profil
            </a>
            <ul class="dropdown-menu" aria-labelledby="profilDropdown">
              <li><a class="dropdown-item" href="/Views/sejarah.html">Sejarah</a></li>
              <li><a class="dropdown-item" href="/Views/Visi-misi.html">Visi dan Misi</a></li>
              <li><a class="dropdown-item" href="/Views/Struktur-Organisasi.html">Struktur Organisasi</a></li>
            </ul>
          </li>
          <!-- Dropdown Gallery -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="galleryDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Gallery
            </a>
            <ul class="dropdown-menu" aria-labelledby="galleryDropdown">
              <li><a class="dropdown-item" href="/Views/Acara-Sekolah.html">Acara Sekolah</a></li>
              <li><a class="dropdown-item" href="/Views/Prestasi.html">Prestasi</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Views/Berita.html">Berita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Views/ppdb.html">PPDB</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Views/kontak.html">Kontak</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const navbarToggler = document.querySelector('.navbar-toggler');
      const navbarCollapse = document.querySelector('.navbar-collapse');
  
      navbarToggler.addEventListener('click', function () {
        if (navbarCollapse.style.display === 'none' || navbarCollapse.style.display === '') {
          navbarCollapse.style.display = 'block'; // Menampilkan navbar
        } else {
          navbarCollapse.style.display = 'none'; // Menyembunyikan navbar
        }
      });
    });
  </script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    <!-- Banner  -->
    <div class="banner">
        <img class="banner-jpg" src="/assets/img/bnn.jpeg" alt="Banner JPG">
    </div>

    <!-- Text Visi Misi -->
<div class="text-visimisi">
    <h1>Visi Misi</h1>
    <h3>Visi</h3>
    <p>Mewujudkan peserta didik yang berprestasi dan berkarakter yang 
        dilandasi imtaq serta menguasai imtek dan peduli terhadap lingkungan</p>
    <h3>Misi</h3>
    <p> Membangun etika dengan berpedoman pada IMTAQ yang berkesinambungan
        Menerapkan pembelajaran yang konstektual dan realistis
        Menerapkan pembelajaran yang aktif, kreatif, inovatif dan menyenangkan
        Menyelengarakan pembelajaran komputer terhadap siswa
        Menerapkan pembelajaran berbasis IT
        Melaksanakan penguatan karakter disetiap semester
        Melaksanakan pendidikan yang mengacu pada kepedulian terhadap lingkungan sekitar
        </p>
        <h3>Tujuan</h3>
        <p> Mewujudkan siswa yang unggul dalam lomba akademik (Olimpiade MIPA)
            Mewujudkan siswa unggul dalam lomba non akademik
            Mewujudkan siswa yang aktif dan kreatif
            Mewujudkan siswa terampil baca tulis Al-Quran
            Mewujudkan siswa rutin sholat wajib dan sunnah
            Mewujudkan siswa terbiasa sholat berjamaan
            Mewujudkan kepedulian warga sekolah dalam pemanfaatan teknologi informasi dan komunikasi
            Terbentuknya peserta didik yang memiliki wawasan luas, berempati, berkarakter, bernalar kritis, dan berkebhinekaan global
            Mewujudkan siswa yang mencintai budaya bangsa
            Mewujudkan siswa yang dapat melestarikan lingkungan
            </p>

</div>
 <!-- FOOTER -->
 <footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>Tentang Kami</h5>
                <p>SDN 1 Kalisat adalah sekolah dasar yang berkomitmen untuk memberikan pendidikan terbaik bagi anak-anak. Kami berfokus pada pengembangan karakter dan akademik siswa.</p>
            </div>
            <div class="col-md-4">
                <h5>Kontak</h5>
                <ul>
                    <li>Alamat: Jl. Kalisat No. 1, Jember</li>
                    <li>Telepon: (0331) 123456</li>
                    <li>Email: info@sdn1kalisat.sch.id</li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Ikuti Kami</h5>
                <ul class="social-media">
                    <li><a href="#"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
                </ul>
            </div>
        </div>
        <div class="text-center">
            <p>&copy; 2024 SDN 1 Kalisat. All rights reserved.</p>
        </div>
    </div>
</footer>
</body>
</html>