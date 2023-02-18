<?php include "includes/connection.php"; ?>
<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php"; ?>
<!-- Side bar end -->
<?php include "includes/headerTwo.php"; ?>

<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <div class="card mb-4">
      <div class="card-header">
        <h1 class="text-center page-header">Welcome to Emergency Bookings</h1>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>Id</th>
              <th>Email</th>
              <th>Call to Verify </th>
              <th>Location</th>
              <th>No of Patients</th>
              <th>Respond</th>
              <th>Delete After Response</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $query = "SELECT * FROM bookings";
            $result = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_assoc($result)) {
              $id = $row['id'];
              $email = $row['email'];
              $number = $row['number'];
              $location = $row['location'];
              $patients = $row['patients'];

              echo "<tr>";
              echo "<td>$id</td>";
              echo "<td>$email</td>";
              echo "<td>$number</td>";
              echo "<td>$location</td>";
              echo "<td>$patients</td>";
              echo "<td><a href='bookings.php?edit={$id}' class='btn'>Send Ambulance</a></td>";
              echo "<td><a href='bookings.php?delete={$id}' class='btn'>Delete</a></td>";
              echo "</tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php include "includes/footer.php"; ?>