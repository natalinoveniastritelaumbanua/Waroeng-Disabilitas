<?php
    include 'header.php';
    include 'sidebar.php';
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Daftar Pengguna</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Master Data</a></li>
              <li class="breadcrumb-item active">Pengguna</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-user mr-1"></i>
                  Produk
                </h3>
                <div class="card-tools">
                  
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
                <?php
                  include 'koneksi.php';
                  $data = $db->query("SELECT * FROM pengguna");
                ?>
                <table class="table">
                  <tr>
                    <th>No.</th>
                    <th>username</th>
                    <th>password</th>
                    <th>aksi</th>
                    
                  </tr>
                  <?php 
                    $no = 1;
                    foreach($data as $pengguna) {?>
                        <tr>
                          <td><?= $no++; ?></td>
                          <td><?= $pengguna['username']; ?></td>
                          <td><?= $pengguna['password']; ?></td>
            
                          <td></td>
                        </tr>
                   <?php } ?>
                  
                </table>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include 'footer.php';?>