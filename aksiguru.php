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
if($g=='guru')
{
    $sql="INSERT INTO guru (nama, alamat,  jabatan, Jenis_kelamin)
        VALUES
        ('$_POST[nama]',
         '$_POST[alamat]',
         '$_POST[jabatan]',
         '$_POST[Jenis_kelamin]')";   
        if (mysqli_query($config, $sql)){ 
        echo '<script LANGUAGE="JavaScript">
            alert("Anggota baru dengan nama :('.$_POST[nama].') Tersimpan")
            window.location.href="halaman_operator.php?page=guru";
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
        mysqli_query($config,"UPDATE guru SET id='$_POST[id]',
            nama='$_POST[nama]',
            alamat='$_POST[alamat]',
            jabatan='$_POST[jabatan]', 
            Jenis_kelamin='$_POST[Jenis_kelamin]' WHERE id='$_POST[id]'");
         echo '<script LANGUAGE="JavaScript">
            alert("Anggota dengan nama :('.$_POST[nama].') Di Update")
            window.location.href="halaman_operator.php?page=guru";
            </script>';
    } 
else 
    if($g=='hapus')
    {
        mysqli_query($config,"DELETE FROM guru where id='$_GET[id]'");
         echo '<script LANGUAGE="JavaScript">
            alert("Anggota dengan Id :('.$_GET[id].') Di Terhapus")
            window.location.href="halaman_operator.php?page=guru";
            </script>';
    }
//End Aksi Anggota
?>