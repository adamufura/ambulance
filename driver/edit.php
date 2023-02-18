<?php include "includes/connection.php"; ?>
<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php"; ?>
<!-- Side bar end -->
<?php include "includes/headerTwo.php"; ?>
<style>
.reg_button{
  background: #47b2e4;
  border: 0;
  padding: 12px 34px;
  color: #fff;
  transition: 0.4s;
  border-radius: 50px;
}

.reg_button:hover {
  background: #209dd8;
}
</style>


<?php   
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];

    $query = "SELECT * FROM driver WHERE email = '{$email}' ";
    $result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $name = $row['name'];    
        $email = $row['email'];
        $number = $row['number'];
        $password = $row['password'];

    }
}
?>
<?php   
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number  = $_POST['number'];
    $password = $_POST['password'];

  $query = "UPDATE driver SET ";
  $query .= "name = '{$name}', ";
  $query .= "email = '{$email}', ";
  $query .= "number = '{$number}', ";
  $query .= "password = '{$password}' ";
  $query .= "WHERE email = '{$email}' ";

  $update_profile = mysqli_query($connection, $query);

  if ($update_profile) {
      echo "Case Updated";
  }
}
?>
<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <div class="card mb-4">
      <div class="card-header">
        <h1 class="text-center page-header">Profile Settings</h1>
      </div>
      <div class="card-body">
      <form method="POST" class="p-5 ">
            <div class="row">
              <div class="form-group col-lg-6">
                <label for="Name">Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
              </div>
              <div class="form-group col-lg-6">
                <label for="Email">Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
              </div>
              </div>
             <div class="row ">
              <div class="form-group col-lg-6">
                <label for="Address">Phone</label>
                <input type="text" name="number" class="form-control" value="<?php echo $number; ?>">
              </div>
              <div class="form-group col-lg-6">
                <label for="Number">Password</label>
                <input type="text" name="password" class="form-control" value="">
              </div>
              </div>
              <div class="row">
          
              <div class="form-group col-lg-6 p-4">
               <div class="text-center"><button name="update" class="reg_button" type="submit">Update</button></div>
              </div>
              </div>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include "includes/footer.php"; ?>