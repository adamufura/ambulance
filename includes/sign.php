<header id="header" class="fixed-top sign">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="index.php">Ambulance System </a></h1>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                <li><a class="getstarted scrollto" href="driver.php">Driver</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>

<!-- Form -->
<section class="mt-5 contact" id="contact">
    <form action="includes/login.php" method="POST">
        <div class="container " data-aos="fade-left">
            <div class="row">
                <div class="col-lg-6 offset-sm-3 mt-lg-0 align-items-stretch">
                    <div class="card shadow info">
                        <div class="card-header text-center">
                            <h4>Sign In</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group col-lg-12">
                                <label for="name">Name</label>
                                <input type="name" class="form-control" name="name" placeholder="Enter name">
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="name">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter Password">
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <!-- <p>Don't have an account, Sign Un &nbsp; <a href="sign_up.php" style="text-decoration: none;"> Here</a></p> -->
                                </div>
                                <div class="text-center p-5"><button class="reg_button" name="sign_in" type="submit">Sign Up</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

</section>

<?php include "includes/footer.php"; ?>