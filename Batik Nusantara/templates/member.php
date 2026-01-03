<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Member - Batik Nusantara</title>
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

    /* ===== MEMBER SECTION ===== */
    .member-container {
      max-width: 1200px;
      margin: 40px auto;
      padding: 0 20px;
    }

    .member-header {
      text-align: center;
      margin-bottom: 40px;
      padding: 20px;
      border-bottom: 2px solid #f0f0f0;
    }

    .member-header h2 {
      color: #d600a0;
      font-size: 28px;
      margin-bottom: 10px;
    }

    .member-header p {
      color: #666;
      font-size: 16px;
    }

    .member-content {
      display: flex;
      flex-wrap: wrap;
      gap: 30px;
      margin-bottom: 50px;
    }

    .member-profile {
      flex: 1;
      min-width: 300px;
      background-color: #f9f9f9;
      border-radius: 10px;
      padding: 25px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
    }

    .profile-header {
      display: flex;
      align-items: center;
      margin-bottom: 25px;
      padding-bottom: 20px;
      border-bottom: 1px solid #e0e0e0;
    }

    .profile-avatar {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      background-color: #d600a0;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 32px;
      font-weight: bold;
      margin-right: 20px;
    }

    .profile-info h3 {
      font-size: 22px;
      color: #333;
      margin-bottom: 5px;
    }

    .profile-info p {
      color: #666;
      font-size: 14px;
    }

    .member-tier {
      display: flex;
      align-items: center;
      background-color: #fff0f8;
      padding: 10px 15px;
      border-radius: 8px;
      margin-bottom: 20px;
      border-left: 4px solid #d600a0;
    }

    .tier-icon {
      color: gold;
      font-size: 24px;
      margin-right: 10px;
    }

    .tier-info h4 {
      font-size: 16px;
      color: #333;
      margin-bottom: 3px;
    }

    .tier-info p {
      font-size: 13px;
      color: #666;
    }

    .profile-details {
      margin-bottom: 25px;
    }

    .detail-item {
      display: flex;
      justify-content: space-between;
      padding: 10px 0;
      border-bottom: 1px dashed #e0e0e0;
    }

    .detail-item:last-child {
      border-bottom: none;
    }

    .detail-label {
      color: #666;
      font-size: 14px;
    }

    .detail-value {
      color: #333;
      font-weight: 600;
    }

    .member-benefits {
      flex: 2;
      min-width: 300px;
    }

    .benefits-header {
      color: #d600a0;
      font-size: 22px;
      margin-bottom: 20px;
      padding-bottom: 10px;
      border-bottom: 2px solid #f0f0f0;
    }

    .benefits-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
      gap: 20px;
      margin-bottom: 30px;
    }

    .benefit-card {
      background-color: white;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
      border-left: 4px solid #d600a0;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .benefit-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
    }

    .benefit-icon {
      background-color: #f8e0f0;
      width: 50px;
      height: 50px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 15px;
      color: #d600a0;
      font-size: 24px;
    }

    .benefit-card h4 {
      font-size: 18px;
      color: #333;
      margin-bottom: 10px;
    }

    .benefit-card p {
      font-size: 14px;
      color: #666;
      line-height: 1.5;
    }

    .member-actions {
      display: flex;
      gap: 15px;
      margin-top: 30px;
      flex-wrap: wrap;
    }

    .btn {
      padding: 12px 24px;
      border-radius: 6px;
      font-weight: bold;
      cursor: pointer;
      border: none;
      transition: all 0.3s ease;
      font-size: 15px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
    }

    .btn-primary {
      background-color: #d600a0;
      color: white;
    }

    .btn-primary:hover {
      background-color: #b00080;
      transform: translateY(-2px);
    }

    .btn-secondary {
      background-color: #f0f0f0;
      color: #333;
    }

    .btn-secondary:hover {
      background-color: #e0e0e0;
      transform: translateY(-2px);
    }

    .btn-icon {
      margin-right: 8px;
    }

    .member-history {
      margin-top: 40px;
      padding: 25px;
      background-color: #f9f9f9;
      border-radius: 10px;
    }

    .history-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }

    .history-header h3 {
      color: #d600a0;
      font-size: 22px;
    }

    .history-table {
      width: 100%;
      border-collapse: collapse;
      background-color: white;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
    }

    .history-table th {
      background-color: #f8f0f5;
      color: #d600a0;
      padding: 15px;
      text-align: left;
      font-weight: bold;
    }

    .history-table td {
      padding: 15px;
      border-bottom: 1px solid #f0f0f0;
      color: #333;
    }

    .history-table tr:hover {
      background-color: #faf0f8;
    }

    .status {
      padding: 5px 10px;
      border-radius: 20px;
      font-size: 13px;
      font-weight: bold;
    }

    .status-completed {
      background-color: #e8f7e8;
      color: #2a8a2a;
    }

    .status-pending {
      background-color: #fff8e8;
      color: #d68a00;
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

    @media (max-width: 768px) {
      .member-content {
        flex-direction: column;
      }
      
      .profile-header {
        flex-direction: column;
        text-align: center;
      }
      
      .profile-avatar {
        margin-right: 0;
        margin-bottom: 15px;
      }
      
      .benefits-grid {
        grid-template-columns: 1fr;
      }
      
      .history-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 15px;
      }
      
      .history-table {
        display: block;
        overflow-x: auto;
      }
      
      .member-actions {
        justify-content: center;
      }
    }
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

<!-- ===== MEMBER SECTION ===== -->
<div class="member-container" id="memberSection">
  <div class="member-header">
    <h2>Halaman Member</h2>
    <p>Nikmati keuntungan khusus dan kelola akun Anda di sini</p>
  </div>

  <div class="member-content">
    <!-- Profil Member -->
    <div class="member-profile">
      <div class="profile-header">
        <div class="profile-avatar">F</div>
        <div class="profile-info">
          <h3>Farhan Kurniawan</h3>
          <p>Member sejak: 15 Maret 2023</p>
        </div>
      </div>

      <div class="member-tier">
        <div class="tier-icon">★</div>
        <div class="tier-info">
          <h4>Member Gold</h4>
          <p>Tingkatkan ke Platinum untuk lebih banyak keuntungan</p>
        </div>
      </div>

      <div class="profile-details">
        <div class="detail-item">
          <span class="detail-label">Email</span>
          <span class="detail-value">farhan@example.com</span>
        </div>
        <div class="detail-item">
          <span class="detail-label">Telepon</span>
          <span class="detail-value">+62 812 3456 7890</span>
        </div>
        <div class="detail-item">
          <span class="detail-label">Total Pembelian</span>
          <span class="detail-value">Rp 2.450.000</span>
        </div>
        <div class="detail-item">
          <span class="detail-label">Poin Reward</span>
          <span class="detail-value">1.250 poin</span>
        </div>
        <div class="detail-item">
          <span class="detail-label">Status Member</span>
          <span class="detail-value" style="color:#d600a0;font-weight:bold;">Aktif</span>
        </div>
      </div>

      <div class="member-actions">
        <button class="btn btn-primary">
          <span class="btn-icon">✎</span> Edit Profil
        </button>
        <button class="btn btn-secondary">
          <span class="btn-icon">🔒</span> Ganti Password 
        </button>
      </div>
    </div>

    <!-- Keuntungan Member -->
    <div class="member-benefits">
      <h3 class="benefits-header">Keuntungan Member Gold</h3>
      
      <div class="benefits-grid">
        <div class="benefit-card">
          <div class="benefit-icon">🎁</div>
          <h4>Diskon Eksklusif</h4>
          <p>Dapatkan diskon 15% untuk semua produk batik dengan status member Gold.</p>
        </div>
        
        <div class="benefit-card">
          <div class="benefit-icon">🚚</div>
          <h4>Gratis Ongkir</h4>
          <p>Gratis ongkos kirim untuk pembelian minimal Rp 500.000 ke seluruh Indonesia.</p>
        </div>
        
        <div class="benefit-card">
          <div class="benefit-icon">⭐</div>
          <h4>Poin Reward</h4>
          <p>Dapatkan 5 poin reward untuk setiap Rp 10.000 pembelian. Tukar dengan produk.</p>
        </div>
        
        <div class="benefit-card">
          <div class="benefit-icon">🔔</div>
          <h4>Akses Early Bird</h4>
          <p>Akses lebih awal ke produk baru dan penawaran spesial sebelum publik.</p>
        </div>
        
        <div class="benefit-card">
          <div class="benefit-icon">🎉</div>
          <h4>Hadiah Ulang Tahun</h4>
          <p>Dapatkan voucher spesial dan kejutan di hari ulang tahun Anda.</p>
        </div>
        
        <div class="benefit-card">
          <div class="benefit-icon">📞</div>
          <h4>Prioritas Layanan</h4>
          <p>Layanan customer service prioritas untuk member Gold.</p>
        </div>
      </div>
      
      <div class="member-actions">
        <button class="btn btn-primary">
          <span class="btn-icon">🛒</span> Belanja Sekarang
        </button>
        <button class="btn btn-secondary">
          <span class="btn-icon">🏆</span> Lihat Level Member
        </button>
      </div>
    </div>
  </div>

  <!-- Riwayat Transaksi -->
  <div class="member-history">
    <div class="history-header">
      <h3>Riwayat Transaksi Terbaru</h3>
      <button class="btn btn-secondary">
        <span class="btn-icon">📋</span> Lihat Semua
      </button>
    </div>
    
    <table class="history-table">
      <thead>
        <tr>
          <th>ID Pesanan</th>
          <th>Tanggal</th>
          <th>Produk</th>
          <th>Total</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>#ORD-78901</td>
          <td>10 April 2024</td>
          <td>Batik Premium, Batik Solo</td>
          <td>Rp 650.000</td>
          <td><span class="status status-completed">Selesai</span></td>
        </tr>
        <tr>
          <td>#ORD-78900</td>
          <td>5 April 2024</td>
          <td>Batik Jogja, Batik Pekalongan</td>
          <td>Rp 630.000</td>
          <td><span class="status status-completed">Selesai</span></td>
        </tr>
        <tr>
          <td>#ORD-78899</td>
          <td>28 Maret 2024</td>
          <td>Batik Semarang</td>
          <td>Rp 350.000</td>
          <td><span class="status status-completed">Selesai</span></td>
        </tr>
        <tr>
          <td>#ORD-78898</td>
          <td>20 Maret 2024</td>
          <td>Batik Surabaya, Batik Madura</td>
          <td>Rp 660.000</td>
          <td><span class="status status-pending">Proses</span></td>
        </tr>
      </tbody>
    </table>
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