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
   include ('master1/dashboard1.php');	
}

elseif ($get=='anggota1')
{
  include ('master1/anggota1.php');
}
elseif ($get=='pdb')
{
  include ('master1/pdb.php');
}
elseif ($get=='siswa1')
{
  include ('master1/siswa1.php');
}
elseif ($get=='pembayaranspp')
{
  include ('master1/pembayaran.php');
}
elseif ($get=='kelas')
{
  include ('master1/kelas.php');
}

?>