<?php include "includes/connection.php"; ?>
<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
        <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
                <li class="nav-item"><a class="nav-link" href="index.php">
                                <svg class="nav-icon">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
                                </svg> Dashboard</a></li>
                <li class="nav-title">Navigation</li>
 
                                      <li class="nav-item"><a class="nav-link" href="./add_driver.php">
                                </svg>Add Dispatcher</a></li>
                <li class="nav-item"><a class="nav-link" href="users.php">
                                </svg>Dispatchers</a>
                        </li>

                        <li class="nav-item"><a class="nav-link" href="newEmergency.php">
                                </svg>New Emergency</a>
                        </li>

                                               <li class="nav-item"><a class="nav-link" href="details.php">
                                </svg>Emergencies</a>
                        </li>

                                               <li class="nav-item"><a class="nav-link" href="contacts.php">
                                </svg>Feedbacks</a></li>
          
        </ul>
        <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>