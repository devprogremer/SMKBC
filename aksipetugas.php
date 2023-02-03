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
if($g=='petugas')
{
    $sql="INSERT INTO petugas (nama_peserta, alamat_peserta, asal_sekolah, no_hp, email)
        VALUES
        ('$_POST[nama_peserta]',
         '$_POST[alamat_peserta]',
         '$_POST[asal_sekolah]',
         '$_POST[no_hp]',
         '$_POST[email]')";   
        if (mysqli_query($config, $sql)){ 
        echo '<script LANGUAGE="JavaScript">
            alert("Petugas baru dengan nama :('.$_POST[nama].') Tersimpan")
            window.location.href="admin.php?page=petugas";
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
        mysqli_query($config,"UPDATE petugas SET id='$_POST[id]',
            nama_peserta='$_POST[nama_peserta]',
            alamat_peserta='$_POST[alamat_peserta]',
            asal_sekolah='$_POST[asal_sekolah]',
            no_hp='$_POST[no_hp]', 
            email='$_POST[email]' WHERE id='$_POST[id]'");
         echo '<script LANGUAGE="JavaScript">
            alert("Petugas dengan nama :('.$_POST[nama].') Di Update")
            window.location.href="admin.php?page=petugas";
            </script>';
    } 
else 
    if($g=='hapus')
    {
        mysqli_query($config,"DELETE FROM petugas where id='$_GET[id]'");
         echo '<script LANGUAGE="JavaScript">
            alert("Petugas dengan Id :('.$_GET[id].') Di Terhapus")
            window.location.href="admin.php?page=petugas";
            </script>';
    }
//End Aksi Anggota
?>