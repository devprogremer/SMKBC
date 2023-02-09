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
            <li>
              <a href="<?php $_SERVER[SCRIPT_NAME];?>?page=pdb">
                <i class="fa fa-file"></i> <span>Data PDB</span>  
              </a>
            </li>
            <li  class="active" >
              <a href="<?php $_SERVER[SCRIPT_NAME];?>?page=siswa1">
                <i class="fa fa-bar-chart"></i> <span>Data Siswa</span>  
              </a>
            </li>
            <li>
              <a href="<?php $_SERVER[SCRIPT_NAME];?>?page=pembayaranspp">
                <i class="fa fa-book"></i> <span>Pembayaran SPP</span>  
              </a>
            </li>
            <li  class="active" >
            <a href="<?php $_SERVER[SCRIPT_NAME];?>?page=kelas">
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
             Data Siswa SMK Bina Cendekia Cirebon
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="halaman_operator.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Data Siswa</a></li>
            <li class="active">Daftar Siswa</li>
            
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
             
            <!--edit-->
            <?php
            
                        $id=$_GET['id'];
                        $sql="SELECT  * FROM kelas where id='$id' ";
                        
                        if (!$result=  mysqli_query($config, $sql)){
                        die('Error:'.mysqli_error($config));
                        }  else {
                        if (mysqli_num_rows($result)> 0){
                        while ($row=  mysqli_fetch_assoc($result)){
                    ?>
            <div class="box">
            <div class="box-header with-border">
                  Edit Siswa
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div> 
            </div> 
                <form action="aksikelas.php?sender=edit" method="POST">
                  <div class="box-body">
                        <div class="row">
                    <div class="col-md-12 form-group">
                    <label>NIP</label>
                    <input readonly="" type="hidden" name="id" value="<?php echo $row['id'];?>" class="form-control" placeholder="Enter..." required="">
                    <input type="text" name="nip" value="<?php echo $row['nip'];?>" class="form-control" placeholder="Enter..." required="">
                    </div>
                    <div class="col-md-12 form-group">
                    <label>Kelas</label>
                    <input readonly="" type="hidden" name="id" value="<?php echo $row['id'];?>" class="form-control" placeholder="Enter..." required="">
                    <input type="text" name="kelas" value="<?php echo $row['kelas'];?>" class="form-control" placeholder="Enter..." required="">
                    </div>
                <div class="col-md-12 form-group">
                    <label>Jumlah Siswa</label>
                    <textarea class="form-control" placeholder="Enter..." name="jumlah_siswa" type="text"><?php echo $row['jumlah_siswa'];?></textarea>
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
                        <th>NIP</th>
                        <th>Kelas</th>
                        <th>Jumlah Siswa</th>
                        <th>Aksi</th>
                         
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                        $sql="SELECT  * FROM kelas";
                        $no=1;
                        if (!$result=  mysqli_query($config, $sql)){
                        die('Error:'.mysqli_error($config));
                        }  else {
                        if (mysqli_num_rows($result)> 0){
                        while ($row=  mysqli_fetch_assoc($result)){
                    ?>
                    
                        <tr>
                            <td><?php echo $no ;?></td>
                            <td><?php echo $row['nip'];?></td>
                            <td><?php echo $row['kelas'];?></td>
                            <td><?php echo $row['jumlah_siswa'];?></td>
                            <td>
                                <a href="<?php $_SERVER[SCRIPT_NAME] ;?>?page=kelas&id=<?php echo $row['id'];?>" class="btn btn-info"><li class="fa fa-pencil"></li> Edit</a> 
                                <a href="aksikelas.php?sender=hapus&id=<?php echo $row['id']; ?>" class="btn btn-danger"><li class="fa fa-trash-o"></li> Hapus</a> 
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
<form action="aksikelas.php?sender=kelas" method="POST" >
<div class="modal fade" id="my-modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
       
<div class="modal-content">
<div class="modal-header">

<h4 class="modal-title" id="myModalLabel">Tambah siswa</h4>
</div>
   
<div class="modal-body center"> 
 <!--Content-->
 
    <div class="form-group">
      <label>NIP</label>
      <input type="text" name="kelas" class="form-control" required="" placeholder="Enter ...">
    </div>

    <div class="form-group">
      <label>Kelas</label>
      <input type="text" name="kelas" class="form-control" required="" placeholder="Enter ...">
    </div>
 
    
    <div class="form-group">
      <label>Jumlah Siswa</label>
      <textarea type="text" name="jumlah_siswa" class="form-control" placeholder="Enter ..."></textarea> 
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