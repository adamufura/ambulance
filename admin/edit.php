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
if(isset($_GET['id'])){
    $update_profile = $_GET['id'];
}

if(!isset($_SESSION)){
  session_start();
}
?>
<?php   
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address  = $_POST['address'];
    $number = $_POST['number'];
    $password = $_POST['password'];

    // $query = "SELECT * FROM users";
    // $update_result = mysqli_query($connection, $query);
  $query = "UPDATE users SET ";
  $query .= "name = '{$name}', ";
  $query .= "email = '{$email}', ";
  $query .= "address = '{$address}', ";
  $query .= "number = '{$number}', ";
  $query .= "password = '{$password}' ";
  $query .= "WHERE email = '{$email}' ";

  $update_profile = mysqli_query($connection, $query);

  if ($update_profile) {
      echo "profile Updated";
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
                <input type="text" name="name" class="form-control" value="<?php echo $_SESSION['name']; ?>">
              </div>
              <div class="form-group col-lg-6">
                <label for="Email">Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo $_SESSION['email'];; ?>">
              </div>
              </div>
             <div class="row ">
              <div class="form-group col-lg-6">
                <label for="Address">Address</label>
                <input type="text" name="address" class="form-control" value="<?php echo $_SESSION['address']; ?>">
              </div>
              <div class="form-group col-lg-6">
                <label for="Number">Number</label>
                <input type="text" name="number" class="form-control" value="<?php echo $_SESSION['number']; ?>">
              </div>
              </div>
              <div class="row">
              <div class="form-group col-lg-6">
                <label for="password">Password</label>
                <input type="text" name="password" class="form-control" value="<?php echo $_SESSION['password']; ?>">
              </div>
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