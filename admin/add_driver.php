    <?php include "includes/connection.php"; ?>
    <?php include "includes/header.php"; ?>
    <?php include "includes/navigation.php"; ?>
    <!-- Side bar end -->
    <?php include "includes/headerTwo.php"; ?>
    <style>
        .reg_button {
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
        if (isset($_POST['add'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $password = $_POST['password'];

        $query = "INSERT INTO driver(name, email, number, password) VALUES ('{$name}', '{$email}', '{$number}', '{$password}' ) ";
        $result = mysqli_query($connection, $query);

        if (!$result) {
            echo "Driver Not Added";
        }

    }
    ?>
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="card mb-4">
                <div class="card-header">
                    <h4 class="text-center page-header">Add a new Dispatcher</h4>
                </div>
                <div class="card-body">
                    <form method="POST" class="p-5 ">
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="Name">Name</label>
                                <input type="text" name="name" placeholder="Enter Name" class="form-control" value="">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="Email">Email</label>
                                <input type="text" name="email" placeholder="Enter Email" class="form-control" value="">
                            </div>
                        </div>
                        <div class="row ">
                            <div class="form-group col-lg-6">
                                <label for="Number">Number</label>
                                <input type="text" name="number" placeholder="Enter Number" class="form-control" value="">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="password">Password</label>
                                <input type="password" name="password" placeholder="Enter Password" class="form-control" value="">
                            </div>
                            <div class="form-group col-lg-12 p-4">
                                <div class="text-center"><button name="add" class="reg_button" type="submit">Add</button></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include "includes/footer.php"; ?>