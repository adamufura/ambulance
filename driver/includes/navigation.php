<?php include "includes/connection.php"; ?>
<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
        <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
                <li class="nav-item"><a class="nav-link" href="index.php">
                                <svg class="nav-icon">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
                                </svg> Dashboard<span class="badge badge-sm bg-info ms-auto">NEW</span></a></li>
                <li class="nav-title">Welcome: <?php echo $_SESSION['name'];  ?></li>
                <li class="nav-item"><a class="nav-link" href="bookings.php">
                                </svg>Active Emergency</a></li>
                <li class="nav-item"><a class="nav-link" href="details.php">
                                </svg>Emergencies</a></li>
                <li class="nav-item"><a class="nav-link" href="edit.php">
                                </svg>Edit Profile</a></li>
        </ul>
        <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>