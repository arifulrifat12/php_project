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
    <?php
    
      if (isset($_POST['submit'])) {
        $title = $_POST['title'];
        $tag = $_POST['tag'];

        if (empty($title) || empty($tag)) {
          echo "All Field Is require!.";
        }else {
          $sql = "INSERT INTO banner_section (title,tag) VALUES ('$title','$tag')";
          $conn->query($sql);
        }
      }
    
    ?>
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Add Banner Section</h3>
        </div>
        <form role="form" action="" method="post">
          <div class="card-body">
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" name="title" class="form-control" id="title" placeholder="Enter title">
            </div>
            <div class="form-group">
              <label for="tag">Tag</label>
              <input type="text" name="tag" class="form-control" id="tag" placeholder="Enter tag">
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
    include "inc/footer.php";
  ?>

