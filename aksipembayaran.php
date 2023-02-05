<?php
include 'koneksi.php';
/*
 * Heri Priady
 * Sample Crud MYSQLi
 * 10/07/2017 23:03
 * priadyheri@gmail.com
 * 082386376942
 * https://www.facebook.com/ciwerartikel
 * Alamat :Desa Kumain, Kec.Tandun, Kab.Rokan Hulu
 * and open the template in the editor.
 */ 
//Start Aksi Anggota
$g=$_GET['sender'];
if($g=='pembayaranspp')
{
    $sql="INSERT INTO pembayaranspp (nama, kelas,  jurusan, tgl_pembayaran)
        VALUES
        ('$_POST[nama]',
         '$_POST[kelas]',
         '$_POST[jurusan]',
         '$_POST[tgl_pembayaran]')";   
        if (mysqli_query($config, $sql)){ 
        echo '<script LANGUAGE="JavaScript">
            alert("Update Pembayaran SPP baru dengan nama :('.$_POST[nama].') Tersimpan")
            window.location.href="halaman_operator.php?page=pembayaranspp";
            </script>'; 
    }
    else{
        echo "Error : ".$sql.". ".mysqli_error($config);
    }
     //header('location:http://localhost/');
}

else 
    if($g=='edit')
    {
        mysqli_query($config,"UPDATE pembayaranspp SET id='$_POST[id]',
            nama='$_POST[nama]',
            kelas='$_POST[kelas]',
            jurusan='$_POST[jurusan]', 
            tgl_pembayaran='$_POST[tgl_pembayaran]' WHERE id='$_POST[id]'");
         echo '<script LANGUAGE="JavaScript">
            alert("Update Pembayaran SPP barunama :('.$_POST[nama].') Di Update")
            window.location.href="halaman_operator.php?page=pembayaranspp";
            </script>';
    } 
else 
    if($g=='hapus')
    {
        mysqli_query($config,"DELETE FROM pembayaranspp where id='$_GET[id]'");
         echo '<script LANGUAGE="JavaScript">
            alert("Anggota dengan Id :('.$_GET[id].') telah dirhapus")
            window.location.href="halaman_operator.php?page=pembayaranspp";
            </script>';
    }
//End Aksi Anggota
?>