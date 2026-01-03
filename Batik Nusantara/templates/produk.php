<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Produk - Batik Nusantara</title>
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

    /* ===== PRODUK SECTION ===== */
    .container { display: flex; max-width: 1200px; margin: 40px auto; gap: 20px; flex-wrap: wrap; }
    .produk-list { flex: 3; display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; }

    /* Efek timbul */
    .produk-card {
      border: 1px solid #ddd;
      border-radius: 10px;
      padding: 10px;
      text-align: center;
      background-color: #f9f9f9;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      cursor: pointer;
    }
    .produk-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }

    .produk-card img { 
      max-width: 100%; 
      height: 180px; 
      object-fit: cover; 
      margin-bottom: 10px; 
      transition: transform 0.3s ease;
    }
    .produk-card:hover img {
      transform: scale(1.05);
    }

    .produk-card h3 { font-size: 14px; color: #000; margin-bottom: 5px; font-weight: bold; }
    .produk-card p { font-size: 13px; margin-bottom: 5px; }
    .produk-card .rating {
      background-color: gold;
      color: #000;
      font-weight: bold;
      display: inline-block;
      padding: 2px 6px;
      border-radius: 5px;
      font-size: 12px;
      margin-bottom: 5px;
    }
    .produk-card .stok-terjual {
      display: flex;
      justify-content: space-between;
      font-size: 13px;
      color: #333;
      margin-top: 5px;
    }

    .rekomendasi { flex: 1; background-color: #f1f1f1; padding: 10px; border-radius: 10px; height: fit-content; }
    .rekomendasi h3 { color: #d600a0; margin-bottom: 10px; }
    .rekomendasi .produk-card img { height: 220px; }

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

    @media (max-width: 768px) {
      .container { flex-direction: column; }
      .produk-list { grid-template-columns: repeat(2, 1fr); }
    }
  </style>

  <style>
    .detailGambar{}
  </style>

  <!--JS-->
  <script>
    function detailImg(){
      $(",detailGambar").show();
    }

    function sembunyikan(){
      $(",detailGambar").hide();
    }
  </script>
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

  <!-- ===== PRODUK ===== -->
  <div class="container" id="produkSection">
    <div class="produk-list">
      <!-- 4 produk pertama -->
      <div class="produk-card">
        <img src="assets/img/batikjogja.png" alt="Batik Jogja">
        <h3>Batik Jogja</h3>
        <p style="color:#d600a0;font-weight:bold;">RP. 350,000</p>
        <div class="rating">★ 4.9</div>
        <div class="stok-terjual"><span>Stok 5</span><span>Terjual 5</span></div>
      </div>
      <div class="produk-card">
        <img src="assets/img/batiksemarang.jpeg" alt="Batik Semarang">
        <h3>Batik Semarang</h3>
        <p style="color:#d600a0;font-weight:bold;">RP. 350,000</p>
        <div class="rating">★ 4.3</div>
        <div class="stok-terjual"><span>Stok 5</span><span>Terjual 5</span></div>
      </div>
      <div class="produk-card">
        <img src="assets/img/batiksurabaya.jpeg" alt="Batik Surabaya">
        <h3>Batik Surabaya</h3>
        <p style="color:#d600a0;font-weight:bold;">RP. 350,000</p>
        <div class="rating">★ 4.3</div>
        <div class="stok-terjual"><span>Stok 5</span><span>Terjual 5</span></div>
      </div>
      <div class="produk-card">
        <img src="assets/img/batiktegal.jpeg" alt="Batik Tegal">
        <h3>Batik Tegal</h3>
        <p style="color:#d600a0;font-weight:bold;">RP. 350,000</p>
        <div class="rating">★ 4.3</div>
        <div class="stok-terjual"><span>Stok 5</span><span>Terjual 5</span></div>
      </div>

      <!-- 4 produk tambahan -->
      <div class="produk-card">
        <img src="assets/img/batiksolo.jpeg" alt="Batik Solo">
        <h3>Batik Solo</h3>
        <p style="color:#d600a0;font-weight:bold;">RP. 300,000</p>
        <div class="rating">★ 4.7</div>
        <div class="stok-terjual"><span>Stok 10</span><span>Terjual 12</span></div>
      </div>
      <div class="produk-card">
        <img src="assets/img/batikpekalongan.jpeg" alt="Batik Pekalongan">
        <h3>Batik Pekalongan</h3>
        <p style="color:#d600a0;font-weight:bold;">RP. 280,000</p>
        <div class="rating">★ 4.5</div>
        <div class="stok-terjual"><span>Stok 8</span><span>Terjual 20</span></div>
      </div>
      <div class="produk-card">
        <img src="assets/img/batikcirebon.jpeg" alt="Batik Cirebon">
        <h3>Batik Cirebon</h3>
        <p style="color:#d600a0;font-weight:bold;">RP. 320,000</p>
        <div class="rating">★ 4.6</div>
        <div class="stok-terjual"><span>Stok 6</span><span>Terjual 15</span></div>
      </div>
      <div class="produk-card">
        <img src="assets/img/batikmadura.jpeg" alt="Batik Madura">
        <h3>Batik Madura</h3>
        <p style="color:#d600a0;font-weight:bold;">RP. 310,000</p>
        <div class="rating">★ 4.4</div>
        <div class="stok-terjual"><span>Stok 7</span><span>Terjual 9</span></div>
      </div>
    </div>

    <div class="rekomendasi">
      <h3>Rekomendasi</h3>
      <div class="produk-card">
        <img src="assets/img/batikpremium.jpeg" alt="Batik Premium">
        <h3>Batik Premium</h3>
        <p style="color:#d600a0;font-weight:bold;">RP. 350,000</p>
        <div class="rating">★ 4.8</div>
        <div class="stok-terjual"><span>Stok 5</span><span>Terjual 5</span></div>
      </div>
    </div>
  </div>

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