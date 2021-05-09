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
                        <li><a class="nav-link" data-target="input-pengukuran-section" href="input_pengukuran.php"><i class="fas fa-upload"></i> <span>Input Pengukuran</span></a></li>
                        <li><a class="nav-link" data-target="input-pengguna-section" href="input_user.php"><i class="fas fa-user-plus"></i> <span>Input Pengguna</span></a></li>
                        <li><a class="nav-link" data-target="list-data-gardu-section" href="list_data_gardu.php"><i class="fas fa-list"></i> <span>List Data Gardu</span></a></li>
                        <li><a class="nav-link" data-target="list-data-pengukuran-section" href="list_data_pengukuran.php"><i class="fas fa-list-alt"></i> <span>List Data Pengukuran</span></a></li>
                        <li><a class="nav-link active" data-target="list-data-overload-section" href="list_data_overload.php"><i class="fas fa-th"></i> <span>List Data Overload</span></a></li>
                        <li><a class="nav-link" data-target="list-data-pengguna-section" href="list_data_user.php"><i class="fas fa-users"></i> <span>List Data Pengguna</span></a></li>
                    </ul>
                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section mt-4 list-gardu-section">
                    
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.css" />
    <script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"></script> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="../assets/js/bootstrap.js"></script>
    <script src="../assets/js/scripts.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="../assets/js/custom.js"></script>


    <!-- <script type="text/javascript">
        $(document).ready(function() {
            var arrayReturn = [];
            $.ajax({
                url: "list_gardu_api.php",
                async: true,
                dataType: 'json',
                success: function(data) {
                    for (var i = 0, len = data.length; i < len; i++) {
                        var kode = data[i].kode;
                        var lat = data[i].lat;
                        var long = data[i].lng;
                        var alamat = data[i].alamat;
                        var daya = data[i].daya;
                        var penyulang = data[i].penyulang;
                        arrayReturn.push([i + 1, kode, lat, long, alamat, daya, penyulang]);
                    }
                    inittable(arrayReturn);
                }
            });

            var today = new Date();
            var dd = String(today.getDate()).padStart(2, '0');
            var mm = String(today.getMonth() + 1).padStart(2, '0');
            var yyyy = today.getFullYear();
            today = dd + '-' + mm + '-' + yyyy;

            function inittable(data) {
                $('#listing_gardu').DataTable({
                    "aaData": data,
                    "dom": 'lBfrtip',
                    buttons: [{
                        extend: 'excelHtml5',
                        text: 'Export Ke Excel',
                        title: 'Data Gardu ' + today,
                        download: 'open',
                        orientation: 'landscape',
                        exportOptions: {
                            columns: ':visible'
                        }
                    }]
                });
            }
        })
    </script> -->

</body>

</html>