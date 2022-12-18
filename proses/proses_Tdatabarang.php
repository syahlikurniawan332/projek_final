<?php
include "connect.php";
$namabarang = (isset($_POST['namabarang'])) ? htmlentities($_POST['namabarang']) : "";
$stokbarang = (isset($_POST['stokbarang'])) ? htmlentities($_POST['stokbarang']) : "";
$tanggalmasuk = (isset($_POST['tanggalmasuk'])) ? htmlentities($_POST['tanggalmasuk']) : "";
$letakbarang = (isset($_POST['letakbarang'])) ? htmlentities($_POST['letakbarang']) : "";

$target_dir = "../gambar/";
$target_file = $target_dir.basename($_FILES['foto']['name']);
$imagetyp = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

if (!empty($_POST['tambah_data_barang'])) {
    // cek apakah gambar atau bukan
    $cek = getimagesize($_FILES['foto']['tmp_name']);
    if ($cek === false) {
        $message = "ini bukan file gambar";
        $statusupload = 0;
    } else {
        $statusupload = 0;
        if (file_exists($target_file)) {
            $message = "maaf file yang dimasukkan sudah ada";
            $statusupload = 0;
        } else {
            if ($_FILES['foto']['size'] > 5000000) { //500kb
                $message = "file foto yang diupload terlalu besar";
                $statusupload = 0;
            } else {
                if ($imagetyp != "jpg" && $imagetyp != "png" && $imagetype != "jpeg" && $imagetype != "gif") {
                    $message =  "maaf gambar yang boleh dimasukkan adalah jenis format jpg, jpeg, png, dan gif";
                    $statusupload = 0;
                }
            }
        }
    }

    if ($statusupload == 0) {
        $message = '<script>alert("' . $message . ', gambar tidak dapat diupload");
                window.location="../databarang"</script>';

    } else {
        $select = mysqli_query($conn, "INSERT INTO tb_databarang (foto, namabarang, stokbarang, tanggalmasuk, letakbarang, kategori) values ('". $kode_random . $_FILES['foto']['name'] . "','$namabarang','$stokbarang','$tanggalmasuk','$letakbarang','$keterangan')");
        if (mysqli_num_rows($select) > 0) {
            $message = '<script>alert("Nama menu yang dimasukkan telah ada");
                    window.location="../databarang"</script>';
        } else {
            
                $message = '<script>alert("maaf terjadi kesalah file tidak dapat diupload");
                    window.location="../daftarbarang"</script>';
            }
        }
    }

    
echo $message;


?>
