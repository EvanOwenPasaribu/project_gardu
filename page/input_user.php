<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Ecommerce Dashboard &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" href="../assets/font-awesome/css/all.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/custom.css">
  <link rel="stylesheet" href="../assets/css/validation-form.css">

</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar header"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg box-search"><i class="fas fa-bars header-icon"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search header-icon"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block grey-color">Hi, Ujang Maman</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Gardu</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">GD</a>
          </div>
          <ul class="sidebar-menu">
              <li><a class="text_admin"> <span>MENU ADMIN</span></a></li>
              <li><a class="nav-link" data-target="dashboard-section" href="index.php"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>
              <li><a class="nav-link" data-target="input-gardu-section" href="input_gardu.php"><i class="fas fa-plus"></i> <span>Input Gardu</span></a></li>
              <li><a class="nav-link" data-target="input-pengukuran-section" href="input_pengukuran.php"><i class="fas fa-upload"></i> <span>Input Pengukuran</span></a></li>
              <li><a class="nav-link  active" data-target="input-pengguna-section" href="input_user.php"><i class="fas fa-user-plus"></i> <span>Input Pengguna</span></a></li>
              <li><a class="nav-link" data-target="list-data-gardu-section" href="list_data_gardu.php"><i class="fas fa-list"></i> <span>List Data Gardu</span></a></li>
              <li><a class="nav-link" data-target="list-data-pengukuran-section" href="list_data_pengukuran.php"><i class="fas fa-list-alt"></i> <span>List Data Pengukuran</span></a></li>
              <li><a class="nav-link" data-target="list-data-overload-section" href="list_data_overload.php"><i class="fas fa-th"></i> <span>List Data Overload</span></a></li>
              <li><a class="nav-link" data-target="list-data-pengguna-section" href="list_data_user.php"><i class="fas fa-users"></i> <span>List Data Pengguna</span></a></li>
          </ul>          
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">  
        <section class="section mt-4 input-gardu-section">
          <div class="map-input">
          <div class="card">
          <!-- <form class="needs-validation" novalidate=""> -->
            <form method="" action="">
              <div class="card-header">
                <h4>Input Pengguna</h4>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama">
                  <i class="fas fa-check-circle"></i>
                  <i class="fas fa-exclamation-circle"></i>
                  <div class="invalid-input">Error message</div>
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" id="email" name="email">
                  <i class="fas fa-check-circle"></i>
                  <i class="fas fa-exclamation-circle"></i>
                  <div class="invalid-input">Error message</div>
                </div>
                <div class="form-group">
                  <label>Nomor Hp</label>
                  <input type="number" class="form-control" id="nomor" name="nomor">
                  <i class="fas fa-check-circle"></i>
                  <i class="fas fa-exclamation-circle"></i>
                  <div class="invalid-input">Error message</div>
                </div>                
                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="jk" id="lk" value="1" checked>
                    <label class="form-check-label" for="lk">
                      Laki-Laki
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="jk" id="pr" value="0">
                    <label class="form-check-label" for="pr">
                      Perempuan
                    </label>
                  </div>
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat">
                </div>

                <div class="form-group">
                  <label>Password</label>
                  <input type="text" class="form-control" id="password" name="password">
                  <i class="fas fa-check-circle"></i>
                  <i class="fas fa-exclamation-circle"></i>
                  <div class="invalid-input">Error message</div>
                </div>

              </div>
              <div class="card-footer text-right">
                <button type="button" class="btn btn-primary" id="submit-user">Simpan</button>
              </div>
            </form>

          </div>
          </div>
        </section>
        
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2021 <div class="bullet"></div> Design By <a href="#">Me And My Friend</a>
        </div>
        <div class="footer-right">
          1.0.0
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="../assets/js/jquery.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="../assets/js/bootstrap.js"></script>
  <script src="../assets/js/scripts.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="../assets/js/custom.js"></script>
</body>
</html>
