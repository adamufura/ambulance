<?php include "includes/connection.php"; ?>
<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php"; ?>
<div class="wrapper d-flex flex-column min-vh-100 bg-light">
  <header class="header header-sticky mb-4">
    <div class="container-fluid">
      
      <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
        <svg class="icon icon-lg">
          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
        </svg>
      </button><a class="header-brand d-md-none" href="#">
        <svg width="118" height="46" alt="CoreUI Logo">
          <use xlink:href="assets/brand/coreui.svg#full"></use>
        </svg></a>
      <ul class="header-nav d-none d-md-flex">
        <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Users</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
      </ul>
      <ul class="header-nav ms-3">
        <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/icon2.jpg" alt="user@email.com"></div>
          </a>
          <div class="dropdown-menu dropdown-menu-end pt-0">
            <div class="dropdown-header bg-light py-2">
              <div class="fw-semibold">Settings</div>
            </div><a class="dropdown-item" href="edit.php">
              <svg class="icon me-2">
                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
              </svg> Profile</a><a class="dropdown-item" href="edit.php">
              <svg class="icon me-2">
                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
              </svg> Settings</a><a class="dropdown-item" href="#">
              <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
                <svg class="icon me-2">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                </svg> Lock Account</a><a class="dropdown-item" href="../includes/alogout.php">
                <svg class="icon me-2">
                  <use xlink:href=""></use>
                </svg> Logout</a>
          </div>
        </li>
      </ul>
    </div>
    <div class="header-divider"></div>
    <div class="container-fluid">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb my-0 ms-2">
          <li class="breadcrumb-item">
            <!-- if breadcrumb is single--><span>Home</span>
          </li>
          <li class="breadcrumb-item active"><span>Dashboard</span></li>
        </ol>
      </nav>
    </div>
  </header>
  <div class="body flex-grow-1 px-3">
    <div class="container-lg">
      <div class="row">
        <div class="col-sm-6 col-lg-4">
          <div class="card mb-4 text-white bg-primary">
            <div class="card-body pb-0 d-flex justify-content-between align-items-start">
              <div>
                <?php
                $query = "SELECT * FROM users";
                $result = mysqli_query($connection, $query);
                $count_users = mysqli_num_rows($result);
                ?>
                <div>Total Users</div>
                <div class="fs-4 fw-semibold"> <?php echo $count_users; ?> </span></div>
              </div>
            </div>
            <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
              <canvas class="chart" id="card-chart1" height="70"></canvas>
            </div>
          </div>
        </div>
        <!-- /.col-->
        <div class="col-sm-6 col-lg-4">
          <div class="card mb-4 text-white bg-info">
            <div class="card-body pb-0 d-flex justify-content-between align-items-start">
              <div>
                <?php
                $query = "SELECT * FROM bookings";
                $result = mysqli_query($connection, $query);
                $count_bookings = mysqli_num_rows($result);
                ?>
                <div>Bookings</div>
                <div class="fs-4 fw-semibold"><?php echo $count_bookings; ?></div>
              </div>
            </div>
            <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
              <canvas class="chart" id="card-chart2" height="70"></canvas>
            </div>
          </div>
        </div>
        <!-- /.col-->
        <div class="col-sm-6 col-lg-4">
          <div class="card mb-4 text-white bg-warning">
            <div class="card-body pb-0 d-flex justify-content-between align-items-start">
              <div>
                <?php
                $query = "SELECT * FROM contacts";
                $result = mysqli_query($connection, $query);
                $count_contacts = mysqli_num_rows($result);
                ?>
                <div class="fs-4 fw-semibold"><?php echo $count_contacts;  ?> </div>
                <div>Feedbacks</div>
              </div>
            </div>
            <div class="c-chart-wrapper mt-3" style="height:70px;">
              <canvas class="chart" id="card-chart3" height="70"></canvas>
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- /.row-->
      <div class="card mb-4">
        <div class="card-body">
          <h3>Show all bookings</h3>
        </div>
      </div>
      <!-- /.card.mb-4-->
      <!-- /.row-->



      <!-- /.row-->
    </div>
  </div>
  <footer class="footer"></footer>
  <div><a href="https://coreui.io">Ambulance, </a><a href="ssadamu16@gmail.com">SS Adamu</a> © 2022.</div>
  <div class="ms-auto">Powered by&nbsp;<a href="https://coreui.io/docs/">Triplets</a></div>
  </footer>
</div>
<!-- CoreUI and necessary plugins-->
<script src="vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
<script src="vendors/simplebar/js/simplebar.min.js"></script>
<!-- Plugins and scripts required by this view-->
<script src="vendors/chart.js/js/chart.min.js"></script>
<script src="vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
<script src="vendors/@coreui/utils/js/coreui-utils.js"></script>
<script src="js/main.js"></script>
<script>
</script>

</body>

</html>