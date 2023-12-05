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
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Update Banner Section</h3>
        </div>
              <?php
                  if (isset($_REQUEST['edit_id'])) {
                      $Rcvd_id =$_REQUEST['edit_id'];
                      $get_info = "SELECT * FROM banner_section WHERE id = $Rcvd_id ";
                      $slect_info = mysqli_query($conn , $get_info);
                      while ($row = mysqli_fetch_assoc($slect_info)) {
              ?>
        <form role="form" action="banner_update_data.php" method="post">
          <div class="card-body">
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" name="title" class="form-control" id="title" value = "<?php echo $row['title']; ?>" placeholder="Enter title">
            </div>
            <div class="form-group">
              <label for="tag">Tag</label>
              <input type="text" name="tag" class="form-control" id="tag" value = "<?php echo $row['tag']; ?>" placeholder="Enter tag">
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" name="update" class="btn btn-primary">Update</button>
          </div>
        </form>

            <?php
                 }
               }
            ?>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
    include "inc/footer.php";
  ?>

