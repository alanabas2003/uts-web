<?php 
    
    require_once '../models/koneksi.php';
    require_once 'class_pelanggan.php';

  

            if(isset($_POST["login"]) ) {
              $username = $_POST["username"];
              $password = $_POST["password"];
            }

        


    // tangkap request element form
    $id = $_POST['id'];
    $kode = $_POST['kode'];
    $nama= $_POST['nama'];
    $jk = $_POST['jk'];
    $tmp_lahir = $_POST['tmp_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $email = $_POST['email'];
    $kartu_id = $_POST['kartu_id'];
    $tombol = $_POST['submit'];

    // Menyimpan data diatas ke sebuah array
    $data = [
        $no,      // ? 1 
        $kode,      // ? 2
        $nama,   // ? 3
        $jk,     // ? 4
        $tmp_lahir,      // ? 5
        $tgl_lahir,   // ? 6
        $email,   // ? 7  
        $jenis_barang_id       // ? 8
    ];

    // proses
    $obj = new Pelanggan($dbh);
    // $obj->simpan($data);
    switch ($tombol) {
        case 'simpan';
            $obj->simpan($data);
            break;
        case 'ubah';
            $data[] = $_POST['idx']; //tangkap hidden field u/ ? ke-8
            $obj->ubah($data);
            break;
        case 'hapus';
        $id[] = $_POST['idx']; //tangkap ke-1 where id=?
        $obj->hapus($id);
        break;  
        default://tombol batal
        header('Location:http://localhost/LATIHANPHP_3/crud/pelanggan.php');
            break;
    }

    // Landing Page
    header('Location:http://localhost/LATIHANPHP_3/crud/pelanggan.php');
?>