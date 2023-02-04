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
if($g=='anggota')
{
    $sql="INSERT INTO anggota (nama, alamat, pangkat, jabatan, jenis_kelamin)
        VALUES
        ('$_POST[nama]',
         '$_POST[alamat]',
         '$_POST[pangkat]',
         '$_POST[jabatan]',
         '$_POST[jenis_kelamin]')";   
        if (mysqli_query($config, $sql)){ 
        echo '<script LANGUAGE="JavaScript">
            alert("Anggota baru dengan nama :('.$_POST[nama].') Tersimpan")
            window.location.href="admin.php?page=anggota";
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
        mysqli_query($config,"UPDATE anggota SET id='$_POST[id]',
            nama='$_POST[nama]',
            alamat='$_POST[alamat]',
            pangkat='$_POST[pangkat]',
            jabatan='$_POST[jabatan]', 
            jenis_kelamin='$_POST[jenis_kelamin]' WHERE id='$_POST[id]'");
         echo '<script LANGUAGE="JavaScript">
            alert("Anggota dengan nama :('.$_POST[nama].') Di Update")
            window.location.href="admin.php?page=anggota";
            </script>';
    } 
else 
    if($g=='hapus')
    {
        mysqli_query($config,"DELETE FROM anggota where id='$_GET[id]'");
         echo '<script LANGUAGE="JavaScript">
            alert("Anggota dengan Id :('.$_GET[id].') Di Terhapus")
            window.location.href="admin.php?page=anggota";
            </script>';
    }
//End Aksi Anggota
?>