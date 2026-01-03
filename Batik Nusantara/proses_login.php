    <?php
    session_start();
    require_once 'config/koneksi.php';


    $email    = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    // VALIDASI KOSONG
    if ($email == '' && $password == '') {
        header("Location: index.php?page=login&error_email=Anda belum mengisi email&error_password=Anda belum mengisi password");
        exit;
    }

    if ($email == '') {
        header("Location: index.php?page=login&error_email=Anda belum mengisi email");
        exit;
    }

    if ($password == '') {
        header("Location: index.php?page=login&error_password=Anda belum mengisi password&email=$email");
        exit;
    }

    // CEK DATABASE
    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' OR username='$email'");
    $user  = mysqli_fetch_assoc($query);

    // EMAIL TIDAK TERDAFTAR
    if (!$user) {
        header("Location: index.php?page=login&email=$email&error_email=Email anda belum terdaftar");
        exit;
    }

    // PASSWORD SALAH
    if (!password_verify($password, $user['password'])) {
        header("Location: index.php?page=login&email=$email&error_password=Password anda salah");
        exit;
    }


    // LOGIN BERHASIL
    $_SESSION['login']    = true;
    $_SESSION['id_user']  = $user['id'];
    $_SESSION['username'] = $user['username'];

    header("Location: index.php?page=member");
    exit;
    ?>
