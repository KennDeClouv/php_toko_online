<!doctype html>
<html lang="en">
<?php session_start(); ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modernize Free</title>
    <link rel="shortcut icon" type="image/png" href="../../assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="../../assets/css/styles.min.css" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <?php include '../layout/sidebar.php'; ?>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <?php include '../layout/header.php'; ?>
            <!--  Header End -->
            <!-- Content   -->
            <div class="container-fluid">
                <?php
                if (isset($_SESSION['msg'])) {

                ?>
                    <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
                        <?= $_SESSION['msg']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php
                } elseif (isset($_SESSION['msg_err'])) {
                ?>
                    <div class="alert alert-danger alert-dismissible fade show mt-5" role="alert">
                        <?= $_SESSION['msg_err']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php
                }
                unset($_SESSION['msg']);
                unset($_SESSION['msg_err'])
                ?>
                <a href="add_produk.php" class="btn btn-primary mb-3">Add product</a>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <h5 class="mt-3 ms-3">Produk</h5>
                            <div class="card-body">
                                <div class="row">
                                    <?php
                                    include '../../action/produk_action/show_data_produk.php';
                                    $no = 1;
                                    while ($data = mysqli_fetch_assoc($result)) {
                                    ?>
                                        <div class="col-12 col-md-6 col-lg-3 mb-4">
                                            <div class="card h-100">
                                                <img src="../../assets/images/products/<?= $data['foto'] ?>.jpg" class="card-img-top" alt="...">
                                                <div class="card-body d-flex flex-column">
                                                    <h5 class="card-title"><?= $data['nama'] ?></h5>
                                                    <p class="card-text"><?= $data['deskripsi'] ?></p>
                                                    <p class="card-text">Rp.<?= $data['harga'] ?></p>
                                                    <div class="alert alert-info py-2 mt-auto">kategori: <?= $data['category'] ?></div>
                                                    <div class="d-flex">
                                                        <div class="btn btn-success" style="cursor:default"><?= $data['stok'] ?></div>
                                                        <a href="edit_produk.php?id=<?= $data['id'] ?>" class="btn btn-primary ms-3 w-100">edit</a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    <?php
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <?php include '../layout/footer.php' ?>
    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/sidebarmenu.js"></script>
    <script src="../../assets/js/app.min.js"></script>

    <script src="../../assets/libs/simplebar/dist/simplebar.js"></script>

</body>

</html>