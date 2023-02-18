<?php include "includes/connection.php"; ?>
<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php"; ?>
<?php include "includes/headerTwo.php"; ?>

<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <div class="card mb-4">
      <div class="card-header">
        <h4 class="text-center page-header">Dispatchers</h4>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>Id</th>
              <th>Username</th>
              <th>Email</th>
              <th>Phone Number</th>
              <th>Delete User</th>
            </tr>
          </thead>
          <tbody>
          <?php   
          $query = "SELECT * FROM driver";
          $result = mysqli_query($connection, $query);

          while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $number = $row['number'];

          
           echo "<tr>";
           echo "<td>$id</td>";   
           echo "<td>$name</td>";
           echo "<td>$email</td>";   
           echo "<td>$number</td>";   
           echo "<td><a href='users.php?delete={$id}' class='btn'>Delete</a></td>";
           echo "</tr>";
          }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php
if (isset($_GET['delete'])) {
  $id = $_GET['delete'];
  $del_query = "DELETE FROM users WHERE id = {$id} ";
  $delete = mysqli_query($connection, $del_query); 
  if ($delete) {
    echo "Successfully Deleted";
  }
}



?>
<?php include "includes/footer.php"; ?>