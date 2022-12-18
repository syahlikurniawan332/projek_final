<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Home Page</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- ling logo -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">





    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="style/carousel.css" rel="stylesheet">
</head>

<body>

    <!-- header -->

    <?php
    include 'header.php';

    ?>

    <!-- akhir header -->

    <!-- bestseller -->
    <div class="container">
        <div class="row">
            <div class="col mb-2">
                <div class="card" style="width: 18rem;">
                    <img src="gambar/product.jpg" class="card-img-top" alt="produk">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Buy</a>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card" style="width: 18rem;">
                    <img src="gambar/product.jpg" class="card-img-top" alt="produk">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Buy</a>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card" style="width: 18rem;">
                    <img src="gambar/product.jpg" class="card-img-top" alt="produk">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Buy</a>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card" style="width: 18rem;">
                    <img src="gambar/product.jpg" class="card-img-top" alt="produk">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Buy</a>
                    </div>
                </div>
            </div>

            <div class="col mb-2">
                <div class="card" style="width: 18rem;">
                    <img src=<?php
                                if ($statusupload == 0) {
                                    $message = '<script>alert("' . $message . ', gambar tidak dapat diupload");
                                    window.location="../databarang"</script>';
                                } else {
                                    $select = mysqli_query($conn, "SELECT * FROM tb_databarang where namabarang = '$namabarang'");
                                    if (mysqli_num_rows($select) > 0) {
                                        $message = '<script>alert("Nama menu yang dimasukkan telah ada");
                                        window.location="../databarang"</script>';
                                    } else {

                                        $message = '<script>alert("maaf terjadi kesalah file tidak dapat diupload");
                                        window.location="../daftarbarang"</script>';
                                    }
                                }
                                ?>>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Buy</a>
                    </div>
                </div>
            </div>

            <div class="col mb-2">
                <div class="card" style="width: 18rem;">
                    <img src="gambar/product.jpg" class="card-img-top" alt="produk">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Buy</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col mb-2">
                <div class="card" style="width: 18rem;">
                    <img src="gambar/product.jpg" class="card-img-top" alt="produk">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Buy</a>
                    </div>
                </div>
            </div>

            <div class="col mb-2">
                <div class="card" style="width: 18rem;">
                    <img src="gambar/product.jpg" class="card-img-top" alt="produk">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Buy</a>
                    </div>
                </div>
            </div>

            <div class="col mb-2">
                <div class="card" style="width: 18rem;">
                    <img src="gambar/product.jpg" class="card-img-top" alt="produk">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Buy</a>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>




</body>

</html>