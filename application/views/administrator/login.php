<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mall Dark Web - Login</title>

  <!-- CSS AdminLTE & FontAwesome -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>dist/css/adminlte.min.css">

  <style>
    /* === BACKGROUND ANIMATION === */
    body {
      background-color: #030014 !important;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
      position: relative;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    /* Moving 3D Grid */
    .cyber-grid {
      position: absolute;
      width: 200%;
      height: 200%;
      bottom: -50%;
      left: -50%;
      background-image:
        linear-gradient(rgba(0, 255, 255, 0.15) 1px, transparent 1px),
        linear-gradient(90deg, rgba(138, 43, 226, 0.15) 1px, transparent 1px);
      background-size: 60px 60px;
      transform: perspective(500px) rotateX(60deg);
      animation: gridMove 4s linear infinite;
      z-index: 0;
      opacity: 0.6;
    }

    @keyframes gridMove {
      0% {
        transform: perspective(500px) rotateX(60deg) translateY(0);
      }

      100% {
        transform: perspective(500px) rotateX(60deg) translateY(60px);
      }
    }

    /* Floating Glowing Orbs */
    .orb {
      position: absolute;
      border-radius: 50%;
      filter: blur(80px);
      z-index: 0;
      opacity: 0.5;
      animation: floatOrb 12s infinite alternate ease-in-out;
    }

    .orb-1 {
      width: 400px;
      height: 400px;
      background: #8a2be2;
      /* Purple */
      top: -100px;
      left: -100px;
      animation-delay: 0s;
    }

    .orb-2 {
      width: 350px;
      height: 350px;
      background: #00ffff;
      /* Cyan */
      bottom: -50px;
      right: -50px;
      animation-delay: -4s;
    }

    .orb-3 {
      width: 300px;
      height: 300px;
      background: #ff007f;
      /* Pink */
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      animation-delay: -8s;
    }

    @keyframes floatOrb {
      0% {
        transform: translate(0, 0) scale(1);
      }

      100% {
        transform: translate(40px, 60px) scale(1.1);
      }
    }

    /* === LOGIN BOX GLASSMORPHISM === */
    .login-box {
      position: relative;
      z-index: 10;
      width: 100%;
      max-width: 420px;
      padding: 40px;
      background: rgba(255, 255, 255, 0.05) !important;
      border-radius: 20px !important;
      border: 1px solid rgba(255, 255, 255, 0.1) !important;
      box-shadow: 0 25px 50px rgba(0, 0, 0, 0.5),
        inset 0 0 20px rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      animation: slideUp 0.8s cubic-bezier(0.2, 0.8, 0.2, 1);
    }

    @keyframes slideUp {
      from {
        opacity: 0;
        transform: translateY(40px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .login-logo a {
      color: #fff !important;
      font-size: 32px;
      font-weight: 800;
      letter-spacing: 2px;
      text-shadow: 0 0 20px rgba(0, 255, 255, 0.5);
    }

    .login-logo b {
      color: #00ffff !important;
    }

    .login-card-body {
      background: transparent !important;
      padding: 0 !important;
    }

    .login-box-msg {
      color: rgba(255, 255, 255, 0.7) !important;
      font-size: 14px;
      margin-bottom: 25px !important;
    }

    /* Form Inputs */
    .form-control {
      background: rgba(255, 255, 255, 0.05) !important;
      border: 1px solid rgba(255, 255, 255, 0.1) !important;
      color: #fff !important;
      border-radius: 10px !important;
      padding: 12px 15px !important;
      transition: all 0.3s ease !important;
    }

    .form-control:focus {
      background: rgba(255, 255, 255, 0.1) !important;
      border-color: #00ffff !important;
      box-shadow: 0 0 15px rgba(0, 255, 255, 0.3) !important;
      outline: none !important;
    }

    .form-control::placeholder {
      color: rgba(255, 255, 255, 0.4) !important;
    }

    .input-group-text {
      background: rgba(255, 255, 255, 0.05) !important;
      border: 1px solid rgba(255, 255, 255, 0.1) !important;
      border-left: none !important;
      border-radius: 0 10px 10px 0 !important;
      color: #00ffff !important;
    }

    /* Login Button */
    .btn-primary {
      background: linear-gradient(135deg, #00ffff 0%, #8a2be2 100%) !important;
      border: none !important;
      border-radius: 10px !important;
      padding: 12px !important;
      font-weight: 700 !important;
      letter-spacing: 1px;
      color: #fff !important;
      transition: all 0.3s ease !important;
      box-shadow: 0 5px 20px rgba(0, 255, 255, 0.3);
    }

    .btn-primary:hover {
      transform: translateY(-3px);
      box-shadow: 0 10px 30px rgba(138, 43, 226, 0.5) !important;
      background: linear-gradient(135deg, #8a2be2 0%, #00ffff 100%) !important;
    }
  </style>
</head>

<body>
  <!-- Elemen Background Bergerak -->
  <div class="cyber-grid"></div>
  <div class="orb orb-1"></div>
  <div class="orb orb-2"></div>
  <div class="orb orb-3"></div>

  <!-- Login Box -->
  <div class="login-box">
    <div class="login-logo text-center mb-4">
      <a href="#"><b>Mall</b> Dark Web</a>
    </div>
    <div class="card-body login-card-body">
      <p class="login-box-msg text-center">Sign in to start your session</p>

      <?php if ($this->session->flashdata('message')) : ?>
        <?= $this->session->flashdata('message') ?>
      <?php endif ?>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input class="form-control" id="inputUsername" name="inputUsername" type="text" placeholder="Username" required />
          <small class="text-danger"><em><?= form_error('inputUsername') ?></em></small>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input class="form-control" id="inputPassword" name="inputPassword" type="password" placeholder="Password" required />
          <small class="text-danger"><em><?= form_error('inputPassword') ?></em></small>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">LOGIN</button>
          </div>
        </div>
      </form>

      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="<?= base_url('assets/') ?>plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url('assets/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('assets/') ?>dist/js/adminlte.min.js"></script>
</body>

</html>