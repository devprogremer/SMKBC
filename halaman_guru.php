<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
error_reporting(0);
include 'koneksi.php';
$get=$_GET['page'];
 
if ( empty($get))
{
   include ('master2/profil.php');	
}

elseif ($get=='anggota')
{
  include ('master2/absen.php');
}
elseif ($get=='petugas')
{
  include ('master2/daftarsiswa.php');
}
elseif ($get=='siswa')
{
  include ('master2/nilai.php');
}

?>