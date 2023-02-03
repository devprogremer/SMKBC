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
if($g=='siswa')
{
    $sql="INSERT INTO siswa (nama, alamat, kelas, jurusan)
        VALUES
        ('$_POST[nama]',
         '$_POST[alamat]',
         '$_POST[kelas]',
         '$_POST[jurusan]')";   
        if (mysqli_query($config, $sql)){ 
        echo '<script LANGUAGE="JavaScript">
            alert("Siswa baru dengan nama :('.$_POST[nama].') Tersimpan")
            window.location.href="admin.php?page=siswa";
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
        mysqli_query($config,"UPDATE siswa SET id='$_POST[id]',
            nama='$_POST[nama]',
            alamat='$_POST[alamat]',
            kelas='$_POST[kelas]',
            jurusan='$_POST[jurusan]', WHERE id='$_POST[id]'");
         echo '<script LANGUAGE="JavaScript">
            alert("Siswa dengan nama :('.$_POST[nama].') Di Update")
            window.location.href="admin.php?page=siswa";
            </script>';
    } 
else 
    if($g=='hapus')
    {
        mysqli_query($config,"DELETE FROM siswa where id='$_GET[id]'");
         echo '<script LANGUAGE="JavaScript">
            alert("Siswa dengan Id :('.$_GET[id].') Di Terhapus")
            window.location.href="admin.php?page=siswa";
            </script>';
    }
//End Aksi Anggota
?>