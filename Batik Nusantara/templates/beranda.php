<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Toko Online - Batik Nusantara</title>
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: Arial, sans-serif; }
    html { scroll-behavior: smooth; }

    header {
      background-color: #d600a0;
      color: #fff;
      padding: 15px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: sticky;
      top: 0;
      z-index: 10;
    }
    header h1 { font-size: 20px; }
    nav a { color: #fff; text-decoration: none; margin-left: 20px; font-weight: bold; cursor: pointer; }
    nav a:hover { text-decoration: underline; }

    /* ===== SLIDER ===== */
    .banner {
      position: relative;
      width: 100%;
      height: 90vh;
      overflow: hidden;
      display: block;
    }
    input[name="slider"] { display: none; }
    .slides { position: relative; width: 100%; height: 100%; }
    .slide { position: absolute; inset: 0; opacity: 0; transform: scale(1.03); transition: opacity 0.6s ease, transform 0.6s ease; }
    .slide img { width: 100%; height: 100%; object-fit: cover; }
    .slide .caption {
      position: absolute;
      bottom: 50px;
      left: 50%;
      transform: translateX(-50%);
      background: rgba(255,255,255,0.85);
      color: #d600a0;
      padding: 14px 26px;
      font-size: 40px;
      font-weight: 700;
      border-radius: 8px;
      text-transform: uppercase;
    }

    #s1:checked ~ .slides .slide:nth-child(1),
    #s2:checked ~ .slides .slide:nth-child(2),
    #s3:checked ~ .slides .slide:nth-child(3) {
      opacity: 1; transform: scale(1); z-index: 2;
    }

    .nav-arrow {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      z-index: 3;
      background: rgba(0,0,0,0.35);
      color: #fff;
      width: 46px;
      height: 46px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      font-weight: bold;
      font-size: 28px;
    }
    .nav-arrow:hover { background: rgba(0,0,0,0.55); }
    .nav-arrow { display: none; }

    #s1:checked ~ .nav-left[for="s3"], #s1:checked ~ .nav-right[for="s2"] { display: flex; }
    #s2:checked ~ .nav-left[for="s1"], #s2:checked ~ .nav-right[for="s3"] { display: flex; }
    #s3:checked ~ .nav-left[for="s2"], #s3:checked ~ .nav-right[for="s1"] { display: flex; }

    .nav-left { left: 18px; }
    .nav-right { right: 18px; }

    .dots {
      position: absolute;
      bottom: 18px;
      left: 50%;
      transform: translateX(-50%);
      display: flex;
      gap: 10px;
      z-index: 4;
    }
    .dot {
      width: 14px;
      height: 14px;
      border-radius: 50%;
      background: rgba(255,255,255,0.6);
      border: 2px solid rgba(0,0,0,0.2);
      cursor: pointer;
    }
    #s1:checked ~ .dots label[for="s1"],
    #s2:checked ~ .dots label[for="s2"],
    #s3:checked ~ .dots label[for="s3"] {
      background: #d600a0;
      transform: scale(1.2);
    }

    @media (max-width: 768px) {
      .banner { height: 70vh; }
      .slide .caption { font-size: 22px; padding: 10px 14px; }
      .nav-arrow { width: 40px; height: 40px; font-size: 22px; }
    }

    footer {
      background-color: #f8f8f8;
      padding: 30px 50px;
      display: flex;
      justify-content: space-around;
      margin-top: 30px;
    }
    footer h4 { margin-bottom: 10px; font-size: 14px; }
    footer ul { list-style: none; }
    footer ul li { margin-bottom: 5px; font-size: 13px; }
    footer a { text-decoration: none; color: #000; }
    footer a:hover { color: #d600a0; }
  </style>
</head>
<body>

  <header>
      <h1>Toko Online</h1>
      <nav>
          <a href="index.php?page=beranda">Beranda</a>
          <a href="index.php?page=produk">Produk</a>
          <a href="index.php?page=member">Member</a>
          <a href="index.php?page=login">Login</a>
      </nav>
  </header>

  <!-- ===== BANNER ===== -->
  <section class="banner" id="bannerSection">
    <input type="radio" name="slider" id="s1" checked>
    <input type="radio" name="slider" id="s2">
    <input type="radio" name="slider" id="s3">

    <div class="slides">
      <div class="slide">
        <img src="https://img.freepik.com/free-vector/batik-pattern-background_1048-18559.jpg" alt="Poster batik 1">
        <div class="caption">Batik Nusantara - Warisan Budaya</div>
      </div>
      <div class="slide">
        <img src="https://img.freepik.com/free-vector/indonesian-batik-pattern-background_1048-18647.jpg" alt="Poster batik 2">
        <div class="caption">Promo Spesial Batik Jawa</div>
      </div>
      <div class="slide">
        <img src="https://img.freepik.com/free-vector/javanese-batik-pattern-background_1048-18852.jpg" alt="Poster batik 3">
        <div class="caption">Motif Batik Modern untuk Semua</div>
      </div>
    </div>

    <label class="nav-arrow nav-left" for="s3">‹</label>
    <label class="nav-arrow nav-right" for="s2">›</label>
    <label class="nav-arrow nav-left" for="s1">‹</label>
    <label class="nav-arrow nav-right" for="s3">›</label>
    <label class="nav-arrow nav-left" for="s2">‹</label>
    <label class="nav-arrow nav-right" for="s1">›</label>

    <div class="dots">
      <label class="dot" for="s1"></label>
      <label class="dot" for="s2"></label>
      <label class="dot" for="s3"></label>
    </div>
  </section>

  <footer>
    <div>
      <h4>QUESTIONS</h4>
      <ul><li><a href="#">How to buy</a></li><li><a href="#">Payment</a></li></ul>
    </div>
    <div>
      <h4>CATEGORIES</h4>
      <ul><li><a href="#">Batik Lengan Panjang</a></li><li><a href="#">Batik Lengan Pendek</a></li></ul>
    </div>
    <div>
      <h4>FOLLOW US</h4>
      <ul><li><a href="https://www.instagram.com/faarhankrnwn?igsh=em1lZHVyZnF1cm9s">
        <img src="assets/svg/instagram.svg" alt="Instagram" style="width:28px;height:28px;margin-bottom:8px;">
      </a></li></ul>
    </div>
  </footer>

</body>
</html>