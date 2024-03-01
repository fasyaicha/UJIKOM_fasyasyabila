<?php
//session_start();
//modular memanggil file dari folder tampleate
$halaman = "Barang";
include_once 'template/header.php';
include_once 'template/sidebar.php';
include_once 'template/topbar.php';
include_once '../controllers/C_produk.php';
$produk = new C_produk();
?>

<body class="bg-gradient-primary">

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Form Update Barang</h6>
                        </div>
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Ubah Detail Barang</h1>
                        </div>
                        <form action="../routers/R_produk.php?aksi=update" method="POST" class="user" enctype ="multipart/form-data">
                        <!--untuk menampung inputan id user -->
                        <?php 
                        foreach ($produk->edit($_GET['id']) as $p) {
                            # code...
                        
                        ?>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user"
                                    placeholder="Id" value="<?= $p->ProdukID; ?>" name="id" hidden>
                            </div>
                            <!--untuk menampung nama dari user-->
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user"
                                    placeholder="Nama Barang" value="<?= $p->NamaProduk; ?>" name="nama">
                            </div>
                            <!--untuk menampung email dari user-->
                            <table>
                            <div class="form-group"><tr><td><input type="number" id="qty"
                                    placeholder="Stok" name="qty" hidden value="<?= $p->Stok; ?>" class="form-control form-control-user"></td></tr>
                            </div>

                            <!--untuk menampung password dari user-->
                            <div class="form-group"><tr>
                               <td>Harga</td><td>:</td> <td><input type="number"  id="qty"
                                    placeholder="Harga" value="<?= $p->Harga - ".00"; ?>" name="harga" class="form-control form-control-user"></td><td>,</td><td><input type="number"  id="qty"
                                    placeholder="" name="harga_lagi" class="form-control form-control-user" value="00"></td></tr>
                            </div>

                            <!--untuk menampung nama dari user-->
                            <!-- <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="photo"
                                    placeholder="photo" name="role" hidden>
                            </div> -->
                           
                            <div class="input-field"><tr>
                               <td>Gambar</td><td>:</td> <td><input type="file" value="Choose file" id="gambar" name="gambar"></td></tr>
                            </div>
                            </table>

                            <div class="input-field">
                                <input type="submit" class="btn btn-primary btn-user btn-block" value="Ubah" id="" name="update">
                            </div>
                            <?php
                            }?>

                        </form>
                        
                
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="../assets/vendor/jquery/jquery.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../assets/js/sb-admin-2.min.js"></script>

</body>

<?php
    include_once 'template/footer.php';
?>
