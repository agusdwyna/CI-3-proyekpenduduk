<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form | Bootstrap</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: url(bg.jpg) no-repeat center center/cover;
    }
    .wrapper {
      width: 600px; /* Lebar lebih besar */
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(9px);
      color: #fff;
      border-radius: 12px;
      padding: 40px;
      border: 2px solid rgba(255, 255, 255, 0.2);
      position: relative;
      z-index: 1;
    }
    .form-control {
      background: transparent;
      color: #fff;
      border: 2px solid rgba(255, 255, 255, 0.2);
    }
    .form-control::placeholder {
      color: #fff;
    }
    .form-control:focus {
      background: transparent;
      color: #fff;
      box-shadow: none;
    }
    .btn-custom {
      background: #fff;
      color: #333;
      font-weight: 600;
      border-radius: 40px;
    }
    .link-light:hover {
      text-decoration: underline;
    }
    
    .bg-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: url('https://i.pinimg.com/736x/c3/8c/a8/c38ca8fbe6ce2be0597d8212551c0093.jpg') no-repeat center center fixed;
      background-size: cover;
      z-index: 0;
    }

    .bg-overlay::after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.6); 
    }

 

    select.form-control option {
      color: #000; 
    }

  </style>
</head>
<body>
  <div class="bg-overlay"></div>
  <div class="d-flex justify-content-center align-items-center vh-100">
     <div class="wrapper text-center">
      <form method ="POST" action="<?php echo base_url('Register/simpanData');?>">
        <h2 class="mb-4 p-1">REGISTER</h2>
        <?php if ($this->session->flashdata('pesan')): ?>
      <div class="alert alert-danger">
          <?= $this->session->flashdata('pesan'); ?>
      </div>
  <?php endif; ?>
        <div class="mb-3 position-relative">
          <input type="text" class="form-control p-3" name="nik" placeholder="NIK" required>
          <i class='bx bxs-id-card position-absolute top-50 end-0 translate-middle-y pe-3'></i>
        </div>
        <div class="mb-3 position-relative">
          <input type="text" class="form-control p-3" name="namaLengkap" placeholder="Nama Lengkap" required>
          <i class='bx bxs-id-card position-absolute top-50 end-0 translate-middle-y pe-3'></i>
        </div>

        <div class="mb-3 position-relative">
          <input type="text" class="form-control p-3" name="telp"placeholder="Nomor Telepon" required>
          <i class='bx bxs-user position-absolute top-50 end-0 translate-middle-y pe-3'></i>
        </div>
        <div class="mb-3 position-relative">
          <input type="text" class="form-control p-3" name="alamat"placeholder="Alamat" required>
          <i class='bx bxs-user position-absolute top-50 end-0 translate-middle-y pe-3'></i>
        </div>
        <div class="mb-3 position-relative">
          <input type="text" class="form-control p-3" name="email" placeholder="Email" required>
          <i class='bx bxs-envelope position-absolute top-50 end-0 translate-middle-y pe-3'></i>
        </div>
        <div class="mb-3 position-relative">
        <select name="jenisAkun" class="form-control p-3" required>
          <option value="" selected disabled hidden>Pilih Jabatan</option>
          <option value="Kepala Lingkungan ">Kepala Lingkungan</option>
          <option value="Penanggung Jawab">Penanggung Jawab</option>
        </select>
        <i class='bx bxs-user-badge position-absolute top-50 end-0 translate-middle-y pe-3'></i>
      </div>
        <button type="submit" class="btn btn-custom w-100 py-2">Register</button>
        <a href="<?php echo base_url('halaman'); ?>" class="btn btn-secondary w-100 mt-3">Kembali ke Login</a>

      
      </form>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
