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
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <button class="btn btn-dark ms-4" data-bs-toggle="modal" data-bs-target="#modaltambahuser"><i class="bi bi-plus-square me-2"></i>Tambah Data Pegawai</button>
                </div>
            </div>
            <table class="table table-hover mt-4 ms-4">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Foto Pegawai</th>
                        <th scope="col">Nama Pegawai</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Tanggal Mulai Bekerja</th>
                        <th scope="col">No.Hp</th>
                        <th scope="col">Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                        <td>@fat</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- tabel -->



    <!-- FOOTER -->
    <footer class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>&copy; 2017–2022 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
    </main>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>



</body>

</html>