<?php include 'theme/headerguru.php'; ?>

     
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
       
         
          <!-- sidebar menu: : style can be found in sidebar.less -->
           <ul class="sidebar-menu">
            <li class="header">Halaman Guru</li>
            <li>
                <a href="<?php $_SERVER[SCRIPT_NAME];?>halaman_guru.php">  
                 <i class="fa fa-user"></i> <span>Profile</span>
              </a>
            </li>
            <li>
              <a href="<?php $_SERVER[SCRIPT_NAME];?>?page=anggota">
                <i class="fa fa-book"></i> <span>Absen</span>  
              </a>
            </li>
            <li class="active">
              <a href="<?php $_SERVER[SCRIPT_NAME];?>?page=petugas">
                <i class="fa fa-users"></i> <span>Daftar Siswa</span>  
              </a>
            </li>
            <li>
              <a href="<?php $_SERVER[SCRIPT_NAME];?>?page=siswa">
                <i class="fa fa-pencil"></i> <span>Nilai</span>  
              </a>
            </li>
            <li>
              <a href="<?php $_SERVER[SCRIPT_NAME];?>logout.php">
                <i class="fa fa-sign-out"></i> <span>Logout</span>  
              </a>
            </li>
           </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

       <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
             Data Guru
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="admin.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Data Guru</a></li>
            <li class="active">Daftar Guru</li>
            
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
             
            <!--edit-->
            <?php
            
                        $id=$_GET['id'];
                        $sql="SELECT  * FROM anggota where id='$id' ";
                        
                        if (!$result=  mysqli_query($config, $sql)){
                        die('Error:'.mysqli_error($config));
                        }  else {
                        if (mysqli_num_rows($result)> 0){
                        while ($row=  mysqli_fetch_assoc($result)){
                    ?>
            <div class="box">
            <div class="box-header with-border">
                  Edit Guru 
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div> 
            </div> 
                <form action="aksi.php?sender=edit" method="POST">
                  <div class="box-body">
                        <div class="row">
                <div class="col-md-12 form-group">
                    <label>Nama</label>
                    <input readonly="" type="hidden" name="id" value="<?php echo $row['id'];?>" class="form-control" placeholder="Enter..." required="">
                    <input type="text" name="nama" value="<?php echo $row['nama'];?>" class="form-control" placeholder="Enter..." required="">
                    </div>
                <div class="col-md-12 form-group">
                    <label>Alamat</label>
                    <input readonly="" type="hidden" name="id" value="<?php echo $row['id'];?>" class="form-control" placeholder="Enter..." required="">
                    <input type="text" name="alamat" value="<?php echo $row['alamat'];?>" class="form-control" placeholder="Enter..." required="">
                    </div>  
                <div class="col-md-12 form-group">
                    <label>Pangkat</label>
                    <input readonly="" type="hidden" name="id" value="<?php echo $row['id'];?>" class="form-control" placeholder="Enter..." required="">
                    <input type="text" name="pangkat" value="<?php echo $row['pangkat'];?>" class="form-control" placeholder="Enter..." required="">
                    </div>
                <div class="col-md-12 form-group">
                    <label>Jabatan</label>
                    <input readonly="" type="hidden" name="id" value="<?php echo $row['id'];?>" class="form-control" placeholder="Enter..." required="">
                    <input type="text" name="jabatan" value="<?php echo $row['jabatan'];?>" class="form-control" placeholder="Enter..." required="">
                    </div>
                <div class="col-md-12 form-group">
                    <label>Jenis Kelamin</label>
                    <textarea class="form-control" placeholder="Enter..." name="jenis_kelamin" type="text"><?php echo $row['jenis_kelamin'];?></textarea>
                    </div>
                 <div class="col-md-12 form-group"> 
                   <button type="submit" class="btn btn-primary btn-flat pull-right" href="admin.php"><span class="fa fa-send"></span> Simpan</button>
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
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Pangkat</th>
                        <th>Jabatan</th>
                        <th>Jenis Kelamin</th>
                        <th>Aksi</th>
                         
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                        $sql="SELECT  * FROM anggota";
                        $no=1;
                        if (!$result=  mysqli_query($config, $sql)){
                        die('Error:'.mysqli_error($config));
                        }  else {
                        if (mysqli_num_rows($result)> 0){
                        while ($row=  mysqli_fetch_assoc($result)){
                    ?>
                    
                        <tr>
                            <td><?php echo $no ;?></td>
                            <td><?php echo $row['nama'];?></td>
                            <td><?php echo $row['alamat'];?></td>
                            <td><?php echo $row['pangkat'];?></td>
                            <td><?php echo $row['jabatan'];?></td>
                            <td><?php echo $row['jenis_kelamin'];?></td>
                            <td>
                                <a href="<?php $_SERVER[SCRIPT_NAME] ;?>?page=anggota&id=<?php echo $row['id'];?>" class="btn btn-info"><li class="fa fa-pencil"></li> Edit</a> 
                                <a href="aksi.php?sender=hapus&id=<?php echo $row['id']; ?>" class="btn btn-danger"><li class="fa fa-trash-o"></li> Hapus</a> 
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
<form action="aksi.php?sender=anggota" method="POST" >
<div class="modal fade" id="my-modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
       
<div class="modal-content">
<div class="modal-header">

<h4 class="modal-title" id="myModalLabel">Tambah Guru</h4>
</div>
   
<div class="modal-body center"> 
 <!--Content-->
 
    <div class="form-group">
      <label>Nama</label>
      <input type="text" name="nama" class="form-control" required="" placeholder="Enter ...">
    </div>

    <div class="form-group">
      <label>Alamat</label>
      <input type="text" name="alamat" class="form-control" required="" placeholder="Enter ...">
    </div>

    <div class="form-group">
      <label>Pangkat</label>
      <input type="text" name="pangkat" class="form-control" required="" placeholder="Enter ...">
    </div>

    <div class="form-group">
      <label>Jabatan</label>
      <input type="text" name="jabatan" class="form-control" required="" placeholder="Enter ...">
    </div>
 
    
    <div class="form-group">
      <label>Jenis Kelamin</label>
      <textarea type="text" name="jenis_kelamin" class="form-control" placeholder="Enter ..."></textarea> 
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