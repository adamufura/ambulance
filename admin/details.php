<?php include "includes/connection.php"; ?>
<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php"; ?>
<!-- Side bar end -->
<?php include "includes/headerTwo.php"; ?>

<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <div class="card mb-4">
            <div class="card-header">
                <h4 class="text-center page-header">Welcome to Emergency Bookings</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Caller Name</th>
                            <th>Phone</th>
                            <th>Relationship</th>
                            <th>Address</th>
                            <th>Type</th>
                            <th>Number of Injured</th>
                            <th>Assign</th>
                            <th>Description</th>
                            <th>Dispatch</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM emergency";
                        $result = mysqli_query($connection, $query);

                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                            $name = $row['name'];
                            $phone = $row['phone'];
                            $relation = $row['relation'];
                            $address = $row['address'];
                            $emergency = $row['emergency'];
                            $people = $row['people'];
                            $assign = $row['assign'];
                            $description = $row['description'];

                            echo "<tr>";
                            echo "<td>$id</td>";
                            echo "<td>$name</td>";
                            echo "<td>$phone</td>";
                            echo "<td>$relation</td>";
                            echo "<td>$address</td>";
                            echo "<td>$emergency</td>";
                            echo "<td>$people</td>";
                            echo "<td>$assign</td>";
                            echo "<td>$description</td>";
                            echo "<td><a href='details.php?dispatch={$id}' >Dispatch</a></td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
<?php
if (isset($_GET['dispatch'])) {
    $id = $_GET['dispatch'];
    $query = "UPDATE emergency SET assign = 'dispatched' WHERE id = $id ";
    $dispatch = mysqli_query($connection, $query);

    header("Location: details.php");
}
?>
            </div>
        </div>
    </div>
</div>
<?php include "includes/footer.php"; ?>