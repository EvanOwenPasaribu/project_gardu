<!DOCTYPE html>
<html lang="in">

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
              <div class="d-sm-none d-lg-inline-block grey-color">Hi, Ujang Maman</div>
            </a>
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
            <li><a class="nav-link active" data-target="input-pengukuran-section" href="input_pengukuran.php"><i class="fas fa-upload"></i> <span>Input Pengukuran</span></a></li>
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
        <section class="section mt-4 input-pengukuran-section">
          <div class="card">
            <form method="" action="">
              <div class="card-header">
                <h4>Input Pengukuran</h4>
              </div>
              <div class="row">
                <div class="col-md-6 wrap-satu">
                  <div class="card-body">
                    <div class="form-group">
                      <label>Kode Gardu Trafo</label>
                      <input type="text" class="form-control" id="kode" name="kode">
                      <i class="fas fa-check-circle"></i>
                      <i class="fas fa-exclamation-circle"></i>
                      <div class="invalid-input">Error message</div>
                    </div>
                    <div class="form-group">
                      <label>Tanggal</label>
                      <input type="date" class="form-control" id="tanggal" name="tanggal">
                      <i class="fas fa-check-circle"></i>
                      <i class="fas fa-exclamation-circle"></i>
                      <div class="invalid-input">Error message</div>
                    </div>
                    <div class="form-group">
                      <label>Waktu</label>
                      <input type="time" class="form-control" id="waktu" name="waktu">
                      <i class="fas fa-check-circle"></i>
                      <i class="fas fa-exclamation-circle"></i>
                      <div class="invalid-input">Error message</div>
                    </div>
                    <div class="form-group">
                      <label>TIM</label>
                      <input type="text" class="form-control" id="tim" name="tim">
                      <i class="fas fa-check-circle"></i>
                      <i class="fas fa-exclamation-circle"></i>
                      <div class="invalid-input">Error message</div>
                    </div>
                    <div class="form-group">
                      <label>Daya Trafo</label>
                      <input type="text" class="form-control" id="daya" name="daya">
                      <i class="fas fa-check-circle"></i>
                      <i class="fas fa-exclamation-circle"></i>
                      <div class="invalid-input">Error message</div>
                    </div>
                    <div class="form-group">
                      <label>Alamat</label>
                      <input type="text" class="form-control" id="alamat" name="alamat">
                      <i class="fas fa-check-circle"></i>
                      <i class="fas fa-exclamation-circle"></i>
                      <div class="invalid-input">Error message</div>
                    </div>

                    <div class="form-group">
                      <label>Induk N</label>
                      <input type="text" class="form-control" id="indukN" name="indukN">
                      <i class="fas fa-check-circle"></i>
                      <i class="fas fa-exclamation-circle"></i>
                      <div class="invalid-input">Error message</div>
                    </div>

                    <!-- Jurusan A -->
                    <div class="form-group">
                      <label>Jurusan A</label>
                      <input type="text" class="form-control" id="jurusanA" name="jurusanA">
                      <i class="fas fa-check-circle"></i>
                      <i class="fas fa-exclamation-circle"></i>
                      <div class="invalid-input">Error message</div>
                    </div>
                    <div class="row wrap-dua-A">
                      <div class="form-group col-md-6">
                        <label>A Jurusan R</label>
                        <input type="text" class="form-control" id="jurusanAR" name="jurusanAR">
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <div class="invalid-input">Error message</div>
                      </div>
                      <div class="form-group col-md-6">
                        <label>A Jurusan S</label>
                        <input type="text" class="form-control" id="jurusanAS" name="jurusanAS">
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <div class="invalid-input">Error message</div>
                      </div>
                      <div class="form-group col-md-6">
                        <label>A Jurusan T</label>
                        <input type="text" class="form-control" id="jurusanAT" name="jurusanAT">
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <div class="invalid-input">Error message</div>
                      </div>
                      <div class="form-group col-md-6">
                        <label>A Jurusan N</label>
                        <input type="text" class="form-control" id="jurusanAN" name="jurusanAN">
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <div class="invalid-input">Error message</div>
                      </div>
                    </div>

                  </div>
                </div>

                <div class="col-md-6 wrap-dua">
                  <div class="card-body">
                    <!-- Jurusan B -->
                    <div class="form-group">
                      <label>Jurusan B</label>
                      <input type="text" class="form-control" id="jurusanB" name="jurusanB">
                      <i class="fas fa-check-circle"></i>
                      <i class="fas fa-exclamation-circle"></i>
                      <div class="invalid-input">Error message</div>
                    </div>

                    <div class="row wrap-dua-A">
                      <div class="form-group col-md-6">
                        <label>B Jurusan R</label>
                        <input type="text" class="form-control" id="jurusanBR" name="jurusanBR">
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <div class="invalid-input">Error message</div>
                      </div>
                      <div class="form-group col-md-6">
                        <label>B Jurusan S</label>
                        <input type="text" class="form-control" id="jurusanBS" name="jurusanBS">
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <div class="invalid-input">Error message</div>
                      </div>
                      <div class="form-group col-md-6">
                        <label>B Jurusan T</label>
                        <input type="text" class="form-control" id="jurusanBT" name="jurusanBT">
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <div class="invalid-input">Error message</div>
                      </div>
                      <div class="form-group col-md-6">
                        <label>B Jurusan N</label>
                        <input type="text" class="form-control" id="jurusanBN" name="jurusanBN">
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <div class="invalid-input">Error message</div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label>Jurusan C</label>
                      <input type="text" class="form-control" id="jurusanC" name="jurusanC">
                      <i class="fas fa-check-circle"></i>
                      <i class="fas fa-exclamation-circle"></i>
                      <div class="invalid-input">Error message</div>
                    </div>

                    <!-- Jurusan C -->
                    <div class="row wrap-dua-A">
                      <div class="form-group col-md-6">
                        <label>C Jurusan R</label>
                        <input type="text" class="form-control" id="jurusanCR" name="jurusanCR">
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <div class="invalid-input">Error message</div>
                      </div>
                      <div class="form-group col-md-6">
                        <label>C Jurusan S</label>
                        <input type="text" class="form-control" id="jurusanCS" name="jurusanCS">
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <div class="invalid-input">Error message</div>
                      </div>
                      <div class="form-group col-md-6">
                        <label>C Jurusan T</label>
                        <input type="text" class="form-control" id="jurusanCT" name="jurusanCT">
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <div class="invalid-input">Error message</div>
                      </div>
                      <div class="form-group col-md-6">
                        <label>C Jurusan N</label>
                        <input type="text" class="form-control" id="jurusanCN" name="jurusanCN">
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <div class="invalid-input">Error message</div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label>Tegangan RS</label>
                      <input type="text" class="form-control" id="teganganRS" name="teganganRS">
                      <i class="fas fa-check-circle"></i>
                      <i class="fas fa-exclamation-circle"></i>
                      <div class="invalid-input">Error message</div>
                    </div>

                    <div class="form-group">
                      <label>Tegangan RT</label>
                      <input type="text" class="form-control" id="teganganRT" name="teganganRT">
                      <i class="fas fa-check-circle"></i>
                      <i class="fas fa-exclamation-circle"></i>
                      <div class="invalid-input">Error message</div>
                    </div>

                    <div class="form-group">
                      <label>Tegangan ST</label>
                      <input type="text" class="form-control" id="teganganST" name="teganganST">
                      <i class="fas fa-check-circle"></i>
                      <i class="fas fa-exclamation-circle"></i>
                      <div class="invalid-input">Error message</div>
                    </div>

                    <div class="form-group">
                      <label>Tegangan RN</label>
                      <input type="text" class="form-control" id="teganganRN" name="teganganRN">
                      <i class="fas fa-check-circle"></i>
                      <i class="fas fa-exclamation-circle"></i>
                      <div class="invalid-input">Error message</div>
                    </div>

                    <div class="form-group">
                      <label>Tegangan SN</label>
                      <input type="text" class="form-control" id="teganganSN" name="teganganSN">
                      <i class="fas fa-check-circle"></i>
                      <i class="fas fa-exclamation-circle"></i>
                      <div class="invalid-input">Error message</div>
                    </div>

                    <div class="form-group">
                      <label>Tegangan TN</label>
                      <input type="text" class="form-control" id="teganganTN" name="teganganTN">
                      <i class="fas fa-check-circle"></i>
                      <i class="fas fa-exclamation-circle"></i>
                      <div class="invalid-input">Error message</div>
                    </div>

                  </div>
                </div>
              </div>
              <div class="card-footer text-right">
                <button type="button" class="btn btn-primary" id="submit-pengukuran">Simpan</button>
              </div>
            </form>
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