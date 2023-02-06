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
if($g=='pdb')
{
    $sql="INSERT INTO pdb (id_pendaftaran, no_induk, nisn, nama, alamat, TTL, jenis_kelamin, agama, ijazah, kode_kelas, asal_sekolah)
        VALUES
        ('$_POST[id_pendaftaran]',
         '$_POST[no_induk]',
         '$_POST[nisn]',
         '$_POST[nama]',
         '$_POST[alamat]',
         '$_POST[TTL]',
         '$_POST[jenis_kelamin]',
         '$_POST[agama]',
         '$_POST[ijazah]',
         '$_POST[kode_kelas]',
         '$_POST[asal_sekolah]')";   
        if (mysqli_query($config, $sql)){ 
        echo '<script LANGUAGE="JavaScript">
            alert("Daftar Peserta Didik baru dengan nama :('.$_POST[nama].') Tersimpan")
            window.location.href="halaman_operator.php?page=pdb";
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
        mysqli_query($config,"UPDATE pdb SET id_pendaftaran='$_POST[id_pendaftaran]',
           id_pendaftaran='$_POST[id_pendaftaran]',
           no_induk='$_POST[no_induk]',
            nisn='$_POST[nisn]',
            nama='$_POST[nama]', 
            alamat='$_POST[alamat]',
            jenis_kelamin='$_POST[jenis_kelamin]',
            agama='$_POST[agama]',
            ijazah='$_POST[ijazah]', 
            kode_kelas='$_POST[kode_kelas]', 
            asal_sekolah='$_POST[asal_sekolah]' WHERE id_pendaftaran='$_POST[id_pendaftaran]'");
         echo '<script LANGUAGE="JavaScript">
            alert("Daftar Peserta Didik Baru dengan nama :('.$_POST[nama].') Di Update")
            window.location.href="halaman_operator.php?page=pdb";
            </script>';
    } 
else 
    if($g=='hapus')
    {
        mysqli_query($config,"DELETE FROM pdb where id_pendaftaran='$_GET[id_pendaftaran]'");
         echo '<script LANGUAGE="JavaScript">
            alert("daftar peserta didik baru dengan Id_pendaftaran :('.$_GET[id].') Telah dihapus")
            window.location.href="halaman_operator.php?page=pdb";
            </script>';
    }
//End Aksi Anggota
?>