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
        $phone = $_POST['phone'];
        $injury = $_POST['injury'];
        $address = $_POST['address'];
        $emergency = $_POST['emergency'];
        $people = $_POST['people'];
        $ambulance = $_POST['amb'];
        $desc = $_POST['description'];

        $query = "INSERT INTO emergency(name, phone, relation, address, emergency, people, assign, description) VALUES ('{$name}', '{$phone}', '{$injury}', '{$address}','{$emergency}','{$people}','{$ambulance}', '{$desc}' ) ";
        $result = mysqli_query($connection, $query);

        if ($result) {
            echo "Case Added";
        }else {
            die("QUERY FAILED" .mysqli_error($connection));
        }
    }
    ?>
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="card mb-4">
                <div class="card-header">
                    <h4 class="text-center page-header">Add new Emergency</h4>
                </div>
                <div class="card-body">
                    <form method="POST" class="p-5 ">
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="Name">Caller Name</label>
                                <input type="text" name="name" placeholder="eg-Rob Williams" class="form-control" value="">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" placeholder="eg-976323243" class="form-control" value="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="Name">Relation to injured</label>
                                <input type="text" name="injury" placeholder="eg-self/neighbor" class="form-control" value="">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="Address">Address</label>
                                <input type="text" name="address" placeholder="eg-254 main street" class="form-control" value="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="emergency">Emergency Type</label>
                                <input type="text" name="emergency" placeholder="eg-house fire" class="form-control" value="">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="people">Number of people injured</label>
                                <input type="text" name="people" placeholder="eg-2" class="form-control" value="">
                            </div>
                        </div>
                        <div class="row ">
                            <div class="form-group col-lg-6">
                                <div class="p-3">
                                    <label for="number">Assign The Available Ambulance</label>
                                    <select name="amb" id="">
                                        <option value="A1">A1</option>
                                        <option value="A32">A32</option>
                                        <option value="A15">A15</option>
                                        <option value="A7">A7</option>
                                    </select>

                                </div>
                            </div>
                            <div class="form-group col-lg-6 p-2">
                                <textarea name="description" id="" cols="63" placeholder="eg-House caught on fire while family was sleeping. -Family has three members. Husband got them out of the house" rows="3"></textarea>
                            </div>
                            <div class="form-group col-lg-12 p-4">
                                <div class="text-center"><button name="add" class="reg_button" type="submit">Activate Emergency</button></div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include "includes/footer.php"; ?>