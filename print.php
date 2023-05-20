<?php

    include_once 'function/koneksi.php';
    session_start();

    
    if( !isset($_SESSION['username']) ){
        $username   = $_SESSION['username'];
        header('Location: ../login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WebsiteKami - Mahasiswa</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <div class="card-body">
    <h6 class="font-weight-bold text-primary">Data Mahasiswa</h6>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nim</th>
                    <th>Nama Lengkap</th>
                    <th>Kelas</th>
                    <th>Prodi</th>
                    <th>Telepon</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $sql = "SELECT * FROM tbmahasiswa ORDER BY id DESC";
                    $return = mysqli_query($conn, $sql);
                    $no = 1;

                    while($row = mysqli_fetch_array($return)) {
                        $id         = $row['id'];
                        $nim        = $row['nim'];
                        $nama       = $row['nama'];
                        $kelas      = $row['kelas'];
                        $prodi      = $row['prodi'];
                        $telepon    = $row['telepon'];
                ?>

                <tr>
                    <th><?= $no++ ?></th>
                    <td><?= $nim ?></td>
                    <td><?= $nama ?></td>
                    <td><?= $kelas ?></td>
                    <td><?= $prodi ?></td>
                    <td><?= $telepon ?></td>
                </tr>

                <?php } ?>
                                        
            </tbody>
        </table>
    </div>
</div>

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a href="../logout.php" type="submit" name="logout" class="btn btn-primary">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

    <script>
		window.print();
	</script>

</body>

</html>
