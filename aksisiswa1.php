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
if($g=='siswa1')
{
    $sql="INSERT INTO siswa1 (no_induk, nisn, nama, alamat, TTL, jenis_kelamin, kelas, jurusan)
        VALUES
        ('$_POST[no_induk]',
         '$_POST[nisn]',
         '$_POST[nama]',
         '$_POST[alamat]',
         '$_POST[TTL]',
         '$_POST[jenis_kelamin]',
         '$_POST[kelas]',
         '$_POST[jurusan]')";   
        if (mysqli_query($config, $sql)){ 
        echo '<script LANGUAGE="JavaScript">
            alert("Siswa baru dengan nama :('.$_POST[nama].') Tersimpan")
            window.location.href="halaman_operator.php?page=siswa1";
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
        mysqli_query($config,"UPDATE siswa1 SET id='$_POST[id]',
            no_induk='$_POST[no_induk]',
            nisn='$_POST[nisn]',
            nama='$_POST[nama]',
            alamat='$_POST[alamat]',
            TTL='$_POST[TTL]',
            jenis_kelamin='$_POST[jenis_kelamin]',
            kelas='$_POST[kelas]',
            jurusan='$_POST[jurusan]' WHERE id='$_POST[id]'");
         echo '<script LANGUAGE="JavaScript">
            alert("Siswa dengan nama :('.$_POST[nama].') Di Update")
            window.location.href="halaman_operator.php?page=siswa1";
            </script>';
    } 
else 
    if($g=='hapus')
    {
        mysqli_query($config,"DELETE FROM siswa where id='$_GET[id]'");
         echo '<script LANGUAGE="JavaScript">
            alert("Siswa dengan Id :('.$_GET[id].') Di Terhapus")
            window.location.href="halaman_operator.php?page=siswa1";
            </script>';
    }
//End Aksi Siswa
?>