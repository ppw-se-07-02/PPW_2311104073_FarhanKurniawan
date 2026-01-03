<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login - Batik Nusantara</title>
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: Arial, sans-serif; }
    
    body {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    header {
      background-color: #d600a0;
      color: #fff;
      padding: 15px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    header h1 { font-size: 20px; }
    nav a { 
      color: #fff; 
      text-decoration: none; 
      margin-left: 20px; 
      font-weight: bold; 
      cursor: pointer; 
    }
    nav a:hover { text-decoration: underline; }

    .login-container {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 40px 20px;
    }

    .login-box {
      background: #fff;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 10px 40px rgba(0,0,0,0.2);
      width: 100%;
      max-width: 420px;
      animation: slideUp 0.5s ease;
    }

    @keyframes slideUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .login-header {
      text-align: center;
      margin-bottom: 30px;
    }

    .login-header h2 {
      color: #d600a0;
      font-size: 28px;
      margin-bottom: 8px;
    }

    .login-header p {
      color: #666;
      font-size: 14px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 8px;
      color: #333;
      font-weight: 600;
      font-size: 14px;
    }

    .form-group input {
      width: 100%;
      padding: 12px 15px;
      border: 2px solid #e0e0e0;
      border-radius: 8px;
      font-size: 14px;
      transition: all 0.3s ease;
    }

    .form-group input:focus {
      outline: none;
      border-color: #d600a0;
      box-shadow: 0 0 0 3px rgba(214, 0, 160, 0.1);
    }

    .form-group input::placeholder {
      color: #aaa;
    }

    .password-wrapper {
      position: relative;
    }

    .password-wrapper input {
      padding-right: 45px;
    }

    .toggle-password {
      position: absolute;
      right: 12px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
      color: #999;
      transition: color 0.3s ease;
    }

    .toggle-password:hover {
      color: #d600a0;
    }

    .toggle-password svg {
      width: 20px;
      height: 20px;
      display: block;
    }

    .remember-forgot {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 25px;
      font-size: 13px;
    }

    .remember-forgot label {
      display: flex;
      align-items: center;
      color: #666;
      cursor: pointer;
    }

    .remember-forgot input[type="checkbox"] {
      margin-right: 6px;
      cursor: pointer;
    }

    .remember-forgot a {
      color: #d600a0;
      text-decoration: none;
      font-weight: 600;
    }

    .remember-forgot a:hover {
      text-decoration: underline;
    }

    .btn-login {
      width: 100%;
      padding: 14px;
      background: linear-gradient(135deg, #d600a0 0%, #9b0070 100%);
      color: #fff;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .btn-login:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(214, 0, 160, 0.4);
    }

    .btn-login:active {
      transform: translateY(0);
    }

    .register-link {
      text-align: center;
      margin-top: 20px;
      font-size: 14px;
      color: #666;
    }

    .register-link a {
      color: #d600a0;
      text-decoration: none;
      font-weight: 600;
    }

    .register-link a:hover {
      text-decoration: underline;
    }

    .divider {
      display: flex;
      align-items: center;
      margin: 25px 0;
      color: #999;
      font-size: 13px;
    }

    .divider::before,
    .divider::after {
      content: "";
      flex: 1;
      height: 1px;
      background: #e0e0e0;
    }

    .divider span {
      padding: 0 15px;
    }

    .social-login {
      display: flex;
      justify-content: center;
    }

    .social-btn {
      width: 100%;
      padding: 12px;
      border: 2px solid #e0e0e0;
      border-radius: 8px;
      background: #fff;
      cursor: pointer;
      transition: all 0.3s ease;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      font-size: 14px;
      font-weight: 600;
      color: #333;
    }

    .social-btn:hover {
      border-color: #d600a0;
      background: #fef5fc;
    }

    .social-btn img {
      width: 20px;
      height: 20px;
    }

    footer {
      background-color: rgba(248, 248, 248, 0.95);
      padding: 20px 30px;
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
      gap: 20px;
    }

    footer h4 { 
      margin-bottom: 10px; 
      font-size: 14px; 
      color: #333;
    }

    footer ul { list-style: none; }
    footer ul li { margin-bottom: 5px; font-size: 13px; }
    footer a { text-decoration: none; color: #666; }
    footer a:hover { color: #d600a0; }

    @media (max-width: 768px) {
      .login-box {
        padding: 30px 20px;
      }

      .login-header h2 {
        font-size: 24px;
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

  <div class="login-container">
    <div class="login-box">
      <div class="login-header">
        <h2>Selamat Datang!</h2>
        <p>Silakan masuk ke akun Anda</p>
      </div>

      <form action="proses_login.php" method="POST">
        <div class="form-group">
         <label for="username">Username atau Email</label>
          <input 
            type="text" 
            id="username" 
            name="username" 
            placeholder="Masukkan username atau email"
            value="<?= isset($_GET['email']) ? $_GET['email'] : '' ?>"
          >

          <?php if(isset($_GET['error_email'])) : ?>
          <small style="color:red;">
            <?= $_GET['error_email']; ?>
          </small>
         <?php endif; ?>
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <div class="password-wrapper">
            <input 
              type="password" 
              id="password" 
              name="password" 
              placeholder="Masukkan password"
            >
            <span class="toggle-password" onclick="togglePassword()">
              <svg id="eye-icon" style="display: none;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                <circle cx="12" cy="12" r="3"></circle>
              </svg>
              <svg id="eye-slash-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path>
                <line x1="1" y1="1" x2="23" y2="23"></line>
              </svg>
            </span>
          </div>
          <?php if(isset($_GET['error_password'])) : ?>
          <small style="color:red;">
            <?= $_GET['error_password']; ?>
          </small>
          <?php endif; ?>
        </div>

        <div class="remember-forgot">
          <label>
            <input type="checkbox" name="remember">
            Ingat Saya
          </label>
          <a href="index.php?page=forgot-password">Lupa Password?</a>
        </div>

        <button type="submit" class="btn-login">Masuk</button>
      </form>

      <div class="divider">
        <span>atau masuk dengan</span>
      </div>

      <div class="social-login">
        <button class="social-btn" onclick="alert('Login dengan Google')">
          <svg width="20" height="20" viewBox="0 0 24 24">
            <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
            <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
            <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
            <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
          </svg>
          Google
        </button>
      </div>

      <div class="register-link">
        Belum punya akun? <a href="index.php?page=register">Daftar Sekarang</a>
      </div>
    </div>
  </div>

  <footer>
    <div>
      <h4>QUESTIONS</h4>
      <ul>
        <li><a href="#">How to buy</a></li>
        <li><a href="#">Payment</a></li>
      </ul>
    </div>
    <div>
      <h4>CATEGORIES</h4>
      <ul>
        <li><a href="#">Batik Lengan Panjang</a></li>
        <li><a href="#">Batik Lengan Pendek</a></li>
      </ul>
    </div>
    <div>
      <h4>FOLLOW US</h4>
      <ul>
        <li>
          <a href="https://www.instagram.com/faarhankrnwn?igsh=em1lZHVyZnF1cm9s">
            <img src="assets/svg/instagram.svg" alt="Instagram" style="width:28px;height:28px;">
          </a>
        </li>
      </ul>
    </div>
  </footer>

  <script>
    function togglePassword() {
      const passwordInput = document.getElementById('password');
      const eyeIcon = document.getElementById('eye-icon');
      const eyeSlashIcon = document.getElementById('eye-slash-icon');
      
      if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        eyeIcon.style.display = 'block';
        eyeSlashIcon.style.display = 'none';
      } else {
        passwordInput.type = 'password';
        eyeIcon.style.display = 'none';
        eyeSlashIcon.style.display = 'block';
      }
    }
  </script>

</body>
</html>