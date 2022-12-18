<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM tb_datapegawai");
while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Data Pegawai</title>

</head>

<body>
    <!-- header -->
    <?php
    include "header.php";
    ?>
    <!-- akhir header -->

    <!-- tabel -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modaltambahdatabarang"><i class="bi bi-plus-square me-2"></i>Tambah Data Pegawai</button>
                    </div>
                </div>

                <!-- Modal tambah data Pegawai-->
                <div class="modal fade" id="modaltambahdatabarang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Pegawai</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" novalidate action="proses/proses_tdatapegawai.php" method="POST">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput" placeholder="Nama Pegawai" name="namapegawai" required>
                                                <label for="floatingInput">Nama Pegawai</label>
                                                <div class="invalid-feedback">
                                                    Masukkan Nama Pegawai
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput" placeholder="Jabatan" name="jabatan" required>
                                                <label for="floatingInput">jabatan</label>
                                                <div class="invalid-feedback">
                                                    isikan jabatan
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-floating mb-3">
                                                <input type="number" class="form-control" id="floatingInput" placeholder="08xxxxxx" name="nohp" required>
                                                <label for="floatingInput">No Hp</label>
                                                <div class="invalid-feedback">
                                                    Masukkan No Hp
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingPassword" placeholder="Letak Barang" name="Alamat" required>
                                                <label for="floatingPassword">Alamat</label>
                                                <div class="invalid-feedback">
                                                    Masukkan Alamat
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="date" class="form-control" id="floatingInput" placeholder="katgori" value="0" name="tglmasukkerja">
                                        <label for="floatingInput">Tanggal Masuk Kerja</label>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                                        <button type="sumbit" class="btn btn-dark" name="tambah_data_barang" value="12345">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Akhir Modal tambah Pegawai -->

                <?php
                foreach ($result as $row) {
                ?>
                    <!-- Edit Data Pegawai-->
                    <div class="modal fade" id="modaleditpegawai<?php echo $row['id_datapegawai'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Pegawai</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="needs-validation" novalidate action="proses/proses_edit_pegawai.php" method="POST">
                                        <input type="hidden" value="<?php echo $row['id_datapegawai'] ?>" name="id_datapegawai">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput" placeholder="Nama Pegawai" name="namapegawai" required value="<?php echo $row['namapegawai']; ?>">
                                                    <label for="floatingInput">Nama Pegawai</label>
                                                    <div class="invalid-feedback">
                                                        Masukkan Nama Pegawai
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput" placeholder="Jabatan" name="jabatan" required value="<?php echo $row['jabatan']; ?>">
                                                    <label for="floatingInput">Jabatan</label>
                                                    <div class="invalid-feedback">
                                                        Masukkan Jabatan
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-floating mb-3">
                                                    <input type="number" class="form-control" id="floatingInput" placeholder="No hp" name="nohp" required value="<?php echo $row['no_hp']; ?>">
                                                    <label for="floatingInput">No Hp</label>
                                                    <div class="invalid-feedback">
                                                        Masukkan No Hp
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingPassword" placeholder="Letak Barang" name="Alamat" required value="<?php echo $row['alamat']; ?>">
                                                    <label for="floatingPassword">Alamat</label>
                                                    <div class="invalid-feedback">
                                                        Masukkan Alamat
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="date" class="form-control" id="floatingInput" placeholder="tgl masuk kerja" name="tgl_masuk_kerja" required value="<?php echo $row['tgl_masuk_kerja']; ?>">
                                            <label for="floatingInput">tanggal Masuk Kerja</label>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                                            <button type="sumbit" class="btn btn-dark" name="edit_data_pegawai" value="12345">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Akhir Modal edit Pegawai-->

                    <!-- Delete Data Barang -->
                    <div class="modal fade" id="modaldeletpegawai<?php echo $row['id_datapegawai'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md modal-fullscreen-md-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Data Barang</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="needs-validation" novalidate action="proses/proses_delete_pegawai.php" method="POST">
                                        <input type="hidden" value="<?php echo $row['id_datapegawai'] ?>" name="id_datapegawai">
                                        <div class="col-lg-12">
                                            Apakah anda yakin ingin menghapus data barang <b><?php echo $row['namapegawai'] ?></b>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                                            <button type="sumbit" class="btn btn-danger" name="tambah_data_barang" value="12345">Dalete</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Akhir Modal Delete barang -->


                <?php
                }
                if (empty($result)) {
                    echo "data barang tidak ada";
                } else {

                ?>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Pegawai</th>
                                    <th scope="col">Jabatan</th>
                                    <th scope="col">No. Hp</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Tgl_Masuk_Kerja</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($result as $row) {
                                    echo "<tr>";
                                ?>
                                    <tr>
                                        <th scope="row"><?php echo $no++ ?></th>
                                        <td><?php echo $row['namapegawai'] ?></td>
                                        <td><?php echo $row['jabatan'] ?></td>
                                        <td><?php echo $row['no_hp'] ?></td>
                                        <td><?php echo $row['alamat'] ?></td>
                                        <td><?php echo $row['tgl_masuk_kerja'] ?></td>
                                        <td class="d-flex">
                                            <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal" data-bs-target="#modaleditpegawai<?php echo $row['id_datapegawai'] ?>"><i class="bi bi-pencil-square"></i></button>
                                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modaldeletpegawai<?php echo $row['id_datapegawai'] ?>"><i class="bi bi-trash3-fill"></i></button>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <!-- akhir tabel -->

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>



    <!-- FOOTER -->
    <footer class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>&copy; 2017–2022 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
    </main>
    <!-- Akhir footer -->



    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>



</body>

</html>