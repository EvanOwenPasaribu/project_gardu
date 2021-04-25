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
  <script src="../assets/js/jquery.js"></script>
  <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?language=en&key=AIzaSyA-AB-9XZd-iQby-bNLYPFyb0pR2Qw3orw"></script> -->

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
              <li><a class="nav-link active" data-target="dashboard-section" href="index.php"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>
              <li><a class="nav-link" data-target="input-gardu-section" href="input_gardu.php"><i class="fas fa-plus"></i> <span>Input Gardu</span></a></li>
              <li><a class="nav-link" data-target="input-pengukuran-section" href="input_pengukuran.php"><i class="fas fa-upload"></i> <span>Input Pengukuran</span></a></li>
              <li><a class="nav-link" data-target="input-pengguna-section" href="input_user.php"><i class="fas fa-user-plus"></i> <span>Input Pengguna</span></a></li>
              <li><a class="nav-link" data-target="list-data-gardu-section" href="list_gardu.php"><i class="fas fa-list"></i> <span>List Data Gardu</span></a></li>
              <li><a class="nav-link" data-target="list-data-pengukuran-section" href="#list-data-pengukuran"><i class="fas fa-list-alt"></i> <span>List Data Pengukuran</span></a></li>
              <li><a class="nav-link" data-target="list-data-overload-section" href="#list-data-overload"><i class="fas fa-th"></i> <span>List Data Overload</span></a></li>
              <li><a class="nav-link" data-target="list-data-pengguna-section" href="#list-data-pengguna"><i class="fas fa-users"></i> <span>List Data Pengguna</span></a></li>
          </ul>          
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section mt-4 dashboard-section">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="card card-statistic data-gardu bg-shadow">
                <h3>Gardu</h3>
                <div class="box-content">
                  <div class="card-wrap">
                    <div class="sum-data">
                      0
                    </div>
                    <div class="tanggal data">
                      13-Apr-21
                    </div>
                  </div>
                  <div class="card-icon">
                    <i class="fas fa-bolt statistic-icon"></i>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="card card-statistic data-pengukuran">
                <h3>Pengukuran</h3>
                <div class="box-content">
                  <div class="card-wrap">
                    <div class="sum-data">
                      0
                    </div>
                    <div class="tanggal data">
                      13-Apr-21
                    </div>
                  </div>
                  <div class="card-icon">
                    <i class="fas fa-weight-hanging statistic-icon"></i>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="card card-statistic data-pengguna">
                <h3>Pengguna</h3>
                <div class="box-content">
                  <div class="card-wrap">
                    <div class="sum-data">
                      0
                    </div>
                    <div class="tanggal data">
                      13-Apr-21
                    </div>
                  </div>
                  <div class="card-icon">
                    <i class="fas fa-users statistic-icon"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="map"></div>
          <?php include_once 'map.php';?>

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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="../assets/js/bootstrap.js"></script>
  <script src="../assets/js/scripts.js"></script>
  <script src="../assets/js/custom.js"></script>
</body>
</html>
