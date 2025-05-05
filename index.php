<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.html");
}

include "koneksi.php";

$query = "SELECT m.*, p.nama nama_prodi FROM mahasiswa m JOIN prodi p ON m.id_prodi = p.id;";
$data = ambildata($query);

include "template/header.php";
include "template/sidebar.php"
?>

<!--begin::App Main-->
<main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Data Mahasiswa</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content Header-->
    <!--begin::App Content-->
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nim</th>
                                        <th>Nama</th>
                                        <th>Tanggal Lahir</th>
                                        <th>No Telp</th>
                                        <th>Email</th>
                                        <th>Prodi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($data as $d) : ?>
                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $d["nim"] ?></td>
                                            <td><?php echo $d["nama"] ?></td>
                                            <td><?php echo $d["tanggal_lahir"] ?></td>
                                            <td><?php echo $d["telp"] ?></td>
                                            <td><?php echo $d["email"] ?></td>
                                            <td><?php echo $d["nama_prodi"] ?></td>
                                            <td><a href="deletemahasiswa.php?nim=<?= $d['nim']; ?>" onclick="return confirm('Yakin ingin hapus')" class="btn btn-danger">Delete</a> <a href="editmahasiswa.php?nim=<?= $d['nim']; ?>" class="btn btn-warning">Edit</a></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <!-- /.col -->
            </div>
            <!-- /.row (main row) -->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
</main>
<!--end::App Main-->

<?php
include "template/footer.php";
?>