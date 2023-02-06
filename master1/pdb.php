<?php include 'theme/header1.php'; ?>

     
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
           
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">Halaman Operator</li>
            <li>
              <a href="halaman_operator.php">
                 <i class="fa fa-home"></i> <span>Dashboard</span>
              </a>
            </li> 
            <li>
              <a href="<?php $_SERVER[SCRIPT_NAME];?>?page=anggota1">
                <i class="fa fa-users"></i> <span>Data Guru</span>  
              </a>
            </li> 
            <li class="active">
              <a href="<?php $_SERVER[SCRIPT_NAME];?>?page=pdb">
                <i class="fa fa-users"></i> <span>Data PDB</span>  
              </a>
            </li>
            <li>
              <a href="<?php $_SERVER[SCRIPT_NAME];?>?page=siswa1">
                <i class="fa fa-bar-chart"></i> <span>Data Siswa</span>  
              </a>
            </li>
            <li>
              <a href="<?php $_SERVER[SCRIPT_NAME];?>?page=pembayaranspp">
                <i class="fa fa-book"></i> <span>Pembayaran SPP</span>  
              </a>
            </li>
            <li> 
            <a href="<?php $_SERVER[SCRIPT_NAME];?>?page=pembayaranspp">
                <i class="fa fa-table"></i> <span>Tabel Kelas</span>  
              </a>
            </li>
            <li> 
              <a href="<?php $_SERVER[SCRIPT_NAME];?>logout.php">
                <i class="fa fa-sign-out"></i> <span>Logout</span>  
              </a>
            </li>
            <li>
        </section>
        <!-- /.sidebar -->
      </aside>
      
       <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
             Data Peserta Didik Baru
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="halaman_operator.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Data Guru</a></li>
            <li class="active">Daftar Guru</li>
            
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
             
            <!--edit-->
            <?php
            
                        $id=$_GET['id_pendaftaran'];
                        $sql="SELECT  * FROM pdb where id_pendaftaran='$id' ";
                        
                        if (!$result=  mysqli_query($config, $sql)){
                        die('Error:'.mysqli_error($config));
                        }  else {
                        if (mysqli_num_rows($result)> 0){
                        while ($row=  mysqli_fetch_assoc($result)){
                    ?>
            <div class="box">
            <div class="box-header with-border">
                  Edit Peserta
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div> 
            </div> 
                <form action="aksipdb.php?sender=edit" method="POST">
                  <div class="box-body">
                        <div class="row">
                <div class="col-md-12 form-group">
                    <label>Id pendafataran</label>
                    <input readonly="" type="hidden" name="id_pendafatran" value="<?php echo $row['id_pendaftaran'];?>" class="form-control" placeholder="Enter..." required="">
                    <input type="text" name="nama_peserta" value="<?php echo $row['id_pendaftaran'];?>" class="form-control" placeholder="Enter..." required="">
                    </div>
                <div class="col-md-12 form-group">
                    <label>No Induk</label>
                    <input readonly="" type="hidden" name="id_pendafatran" value="<?php echo $row['id_pendaftaran'];?>" class="form-control" placeholder="Enter..." required="">
                    <input type="text" name="no_induk" value="<?php echo $row['no_induk'];?>" class="form-control" placeholder="Enter..." required="">
                    </div>  
                <div class="col-md-12 form-group">
                    <label>NISN</label>
                    <input readonly="" type="hidden" name="id_pendafatran" value="<?php echo $row['id_pendaftaran'];?>" class="form-control" placeholder="Enter..." required="">
                    <input type="text" name="nisn" value="<?php echo $row['nisn'];?>" class="form-control" placeholder="Enter..." required="">
                    </div>
                <div class="col-md-12 form-group">
                    <label>Nama</label>
                    <input readonly="" type="hidden" name="id_pendafatran" value="<?php echo $row['id_pendaftaran'];?>" class="form-control" placeholder="Enter..." required="">
                    <input type="text" name="nama" value="<?php echo $row['nama'];?>" class="form-control" placeholder="Enter..." required="">
                    </div>
                    <div class="col-md-12 form-group">
                    <label>Alamat</label>
                    <input readonly="" type="hidden" name="id_pendafatran" value="<?php echo $row['id_pendaftaran'];?>" class="form-control" placeholder="Enter..." required="">
                    <input type="text" name="alamat" value="<?php echo $row['alamat'];?>" class="form-control" placeholder="Enter..." required="">
                    </div>
                <div class="col-md-12 form-group">
                    <label>TTL</label>
                    <input readonly="" type="hidden" name="id_pendafatran" value="<?php echo $row['id_pendaftaran'];?>" class="form-control" placeholder="Enter..." required="">
                    <input type="text" name="TTL" value="<?php echo $row['TTL'];?>" class="form-control" placeholder="Enter..." required="">
                    </div>  
                <div class="col-md-12 form-group">
                    <label>Jenis Kelamin</label>
                    <input readonly="" type="hidden" name="id_pendafatran" value="<?php echo $row['id_pendaftaran'];?>" class="form-control" placeholder="Enter..." required="">
                    <input type="text" name="jenis_kelammin" value="<?php echo $row['jenis_kelammin'];?>" class="form-control" placeholder="Enter..." required="">
                    </div>
                <div class="col-md-12 form-group">
                    <label>Agama</label>
                    <input readonly="" type="hidden" name="id_pendafatran" value="<?php echo $row['id_pendaftaran'];?>" class="form-control" placeholder="Enter..." required="">
                    <input type="text" name="agama" value="<?php echo $row['agama'];?>" class="form-control" placeholder="Enter..." required="">
                    </div>
                    <div class="col-md-12 form-group">
                    <label>Ijazah</label>
                    <input readonly="" type="hidden" name="id_pendafatran" value="<?php echo $row['id_pendaftaran'];?>" class="form-control" placeholder="Enter..." required="">
                    <input type="text" name="ijazah" value="<?php echo $row['ijazah'];?>" class="form-control" placeholder="Enter..." required="">
                    </div> 
                <div class="col-md-12 form-group">
                    <label>Kode Kelas</label>
                    <input readonly="" type="hidden" name="id_pendafatran" value="<?php echo $row['id_pendaftaran'];?>" class="form-control" placeholder="Enter..." required="">
                    <input type="text" name="kode_kelas" value="<?php echo $row['kode_kelas'];?>" class="form-control" placeholder="Enter..." required="">
                    </div>
                <div class="col-md-12 form-group">
                    <label>Asal Sekolah</label>
                    <textarea class="form-control" placeholder="Enter..." name="asal_sekolah" type="text"><?php echo $row['asal_sekolah'];?></textarea>
                    </div>
                 <div class="col-md-12 form-group"> 
                   <button type="submit" class="btn btn-primary btn-flat pull-right" href="halaman_operator.php"><span class="fa fa-send"></span> Simpan</button>
                 </div>
                </div> 
                  </div></form>
              </div>
                   <?php                
                        }
                    }  else {
                    echo '';    
                    }
                    }?> 
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"> <a href="#" data-toggle="modal" data-target="#my-modal1" class="btn btn-info"><li class="fa fa-plus"></li> Tambah</a></h3>
              <div class="box-tools pull-right">
                 </div>
            </div>
            <div class="box-body">
                               <table id="example1" class="table table-striped dataTable no-footer">
                    <thead>
                      <tr> 
                        <th>No</th>
                        <th>Id Pendaftaran</th>
                        <th>No Induk</th>
                        <th>NISN</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>TTL</th>
                        <th>Jenis Kelamin</th>
                        <th>agama</th>
                        <th>Ijazah</th>
                        <th>Kode Kelas</th>
                        <th>Asal Sekolah</th>
                        <th>Aksi</th>
                         
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                        $sql="SELECT  * FROM pdb";
                        $no=1;
                        if (!$result=  mysqli_query($config, $sql)){
                        die('Error:'.mysqli_error($config));
                        }  else {
                        if (mysqli_num_rows($result)> 0){
                        while ($row=  mysqli_fetch_assoc($result)){
                    ?>
                    
                        <tr>
                            <td><?php echo $no ;?></td>
                            <td><?php echo $row['id_pendaftaran'];?></td>
                            <td><?php echo $row['no_induk'];?></td>
                            <td><?php echo $row['nisn'];?></td>
                            <td><?php echo $row['nama'];?></td>
                            <td><?php echo $row['alamat'];?></td>
                            <td><?php echo $row['TTL'];?></td>
                            <td><?php echo $row['jenis_kelamin'];?></td>
                            <td><?php echo $row['agama'];?></td>
                            <td><?php echo $row['ijazah'];?></td>
                            <td><?php echo $row['kode_kelas'];?></td>
                            <td><?php echo $row['asal_sekolah'];?></td>
                            <td>
                                <a href="<?php $_SERVER[SCRIPT_NAME] ;?>?page=pdb&id_pendaftaran=<?php echo $row['id_pendaftaran'];?>" class="btn btn-info"><li class="fa fa-pencil"></li> Edit</a>
                                <a href="aksipdb.php?sender=hapus&id_pendaftaran=<?php echo $row['id_pendaftaran']; ?>" class="btn btn-danger"><li class="fa fa-trash-o"></li> Hapus</a> 
                             </td>
                        </tr> 
                            <?php    
                    $no++;                    
                        }
                    }  else {
                    echo '';    
                    }
                    }?>
                    </tbody>
                   
                     
                  </table>
            </div><!-- /.box-body -->
             
          </div><!-- /.box --> 
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      
      
      
      <!-- Bootstrap Modal - To Add New Record -->
<!-- Modal -->
<form action="aksipdb.php?sender=pdb" method="POST" >
<div class="modal fade" id="my-modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
       
<div class="modal-content">
<div class="modal-header">

<h4 class="modal-title" id="myModalLabel">Tambah Peserta Baru</h4>
</div>
   
<div class="modal-body center"> 
 <!--Content-->
 
    <div class="form-group">
      <label>Id pendafataran</label>
      <input type="text" name="id_pendaftaran" class="form-control" required="" placeholder="Enter ...">
    </div>

    <div class="form-group">
      <label>No Induk</label>
      <input type="text" name="no_induk" class="form-control" required="" placeholder="Enter ...">
    </div>

    <div class="form-group">
      <label>NISN</label>
      <input type="text" name="nisn" class="form-control" required="" placeholder="Enter ...">
    </div>

    <div class="form-group">
      <label>Nama</label>
      <input type="text" name="nama" class="form-control" required="" placeholder="Enter ...">
    </div>
 
    <div class="form-group">
      <label>Alamat</label>
      <input type="text" name="alamat" class="form-control" required="" placeholder="Enter ...">
    </div>

    <div class="form-group">
      <label>TTL</label>
      <input type="text" name="TTL" class="form-control" required="" placeholder="Enter ...">
    </div>

    <div class="form-group">
      <label>Jenis Kelamin</label>
      <input type="text" name="jenis_kelamin" class="form-control" required="" placeholder="Enter ...">
    </div>

    <div class="form-group">
      <label>Agama</label>
      <input type="text" name="agama" class="form-control" required="" placeholder="Enter ...">
    </div>
 
    <div class="form-group">
      <label>Ijazah</label>
      <input type="text" name="ijazah" class="form-control" required="" placeholder="Enter ...">
    </div>

    <div class="form-group">
      <label>Kode Kelas</label>
      <input type="text" name="kode_kelas" class="form-control" required="" placeholder="Enter ...">
    </div>

    <div class="form-group">
      <label>Asal Sekolah</label>
      <textarea type="text" name="asal_sekolah" class="form-control" placeholder="Enter ..."></textarea> 
    </div>
 
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal"> Close</button>
<button type="submit" class="btn btn-info"> Simpan</button> 
  
</div>
   
</div>
</div>
</div>
</form>

      <!-- Content Wrapper. Contains page content -->
      
     
<?php include 'theme/footer.php'; ?>