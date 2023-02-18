<?php include "includes/connection.php"; ?>
<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php"; ?>
<!-- Side bar end -->
<?php include "includes/headerTwo.php"; ?>

<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <div class="card mb-4">
      <div class="card-header">
        <h4 class="text-center page-header">Welcome to Feedbacks</h4>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-responsive table-hover">
          <thead>
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Email</th>
              <th>Subject</th>
              <th>Messages</th>
              <th>Delete </th>
            </tr>
          </thead>
          <tbody>
            <?php
            $query = "SELECT * FROM contacts";
            $result = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_assoc($result)) {
              $id = $row['id'];
              $name = $row['cname'];
              $email = $row['cemail'];
              $subject = $row['csubject'];
              $message = $row['cmessage'];


              echo "<tr>";
              echo "<td>$id</td>";
              echo "<td>$name</td>";
              echo "<td>$email</td>";
              echo "<td>$subject</td>";
              echo "<td>$message</td>";
              echo "<td><a href='contacts.php?delete={$id}' class='btn'>Delete</a></td>";
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
  $del_query = "DELETE FROM contacts WHERE id = {$id} ";
  $delete = mysqli_query($connection, $del_query);
  if ($delete) {
    echo "Successfully Deleted";
  }
}



?>
<?php include "includes/footer.php"; ?>