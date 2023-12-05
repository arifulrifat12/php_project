<?php
    include "configDB/config.php";
?>
<?php
    include "inc/header.php";
  ?>

  <!-- Navbar -->
  <?php
    include "inc/navbar.php";
  ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php
    include "inc/sidebar.php";
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="card">
              <div class="card-header">
              <h4 class="card-title d-flex float-none align-items-center justify-content-between">Datatable
                   <a href="banner_add_section.php" class="btn sm-btn btn-danger">Back</a>
              </h4>
              </div>
              <!-- /.card-header -->
              <?php
                $sql = "SELECT * FROM  banner_section ORDER BY id DESC";
                $data = $conn->query($sql);
              ?>
              <div class="card-body">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                  <thead>
                     <tr role="row">
                        <th>Sl</th>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Tag</th>
                        <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                        $serial = 1;
                        while ($all_banner = $data->fetch_assoc()) {
                      ?>
                        <tr role="row" class="even">
                              <td><?php echo $serial ?></td>
                              <td><?php echo $all_banner['id'] ?></td>
                              <td><?php echo $all_banner['title'] ?></td>
                              <td><?php echo $all_banner['tag'] ?></td>
                              <td>
                                <a href="banner_update.php?edit_id=<?php echo $all_banner['id'] ?>" class="btn btn-sm btn-success">Edit</a>
                                <a href="banner_delete.php?id=<?php echo $all_banner['id'] ?>" class="btn btn-sm btn-danger">Delete</a>
                              </td>
                        </tr>
                      <?php  
                        $serial++;
                         } 
                       ?>
                    </tbody>
                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
              </div>
              <!-- /.card-body -->
            </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
    include "inc/footer.php";
  ?>

