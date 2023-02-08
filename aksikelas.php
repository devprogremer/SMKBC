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
//Start Aksi Siswa
$g=$_GET['sender'];
if($g=='kelas')
{
    $sql="INSERT INTO kelas (nip, kelas, jumlah_siswa)
        VALUES
        ('$_POST[nip]',
         '$_POST[kelas]',
         '$_POST[jumlah_siswa]')";   
        if (mysqli_query($config, $sql)){ 
        echo '<script LANGUAGE="JavaScript">
            alert("Siswa baru dengan nama :('.$_POST[nama].') Tersimpan")
            window.location.href="halaman_operator.php?page=kelas";
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
        mysqli_query($config,"UPDATE kelas SET id='$_POST[id]',
            nip='$_POST[nip]',
            kelas='$_POST[kelas]',
            jumlah_siswa='$_POST[jumlah_siswa]' WHERE id='$_POST[id]'");
         echo '<script LANGUAGE="JavaScript">
            alert("Siswa dengan nama :('.$_POST[nama].') Di Update")
            window.location.href="halaman_operator.php?page=kelas";
            </script>';
    } 
else 
    if($g=='hapus')
    {
        mysqli_query($config,"DELETE FROM kelas where id='$_GET[id]'");
         echo '<script LANGUAGE="JavaScript">
            alert("Siswa dengan Id :('.$_GET[id].') Di Terhapus")
            window.location.href="halaman_operator.php?page=kelas";
            </script>';
    }
//End Aksi Siswa
?>