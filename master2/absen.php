<?php include 'theme/header.php'; ?>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="assets/img/okkkkkk.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Profile Guru</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="halaman_guru.php" class="nav-link">
                  <i class="fa fa-user-circle"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php $_SERVER[SCRIPT_NAME];?>?page=anggota" class="nav-link active ">
                  <i class="fa fa-book"></i>
                  <p>Absensi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php $_SERVER[SCRIPT_NAME];?>?page=petugas" class="nav-link ">
                  <i class="fa fa-users"></i>
                  <p>Daftar Siswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php $_SERVER[SCRIPT_NAME];?>?page=siswa" class="nav-link">
                  <i class="fas fa-edit"></i>
                  <p>Nilai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="logout.php" class="nav-link">
                  <i class="fa fa-sign-out"></i>
                  <p>Log Out</p>
                </a>
              </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Absensi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Absensi</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
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