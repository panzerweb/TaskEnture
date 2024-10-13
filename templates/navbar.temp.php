
<!-- Navigational Bar -->
<nav class="navbar navbar-expand-lg bg-light navbar-dark">
    <div class="container-fluid">
        <!-- Brand -->
        <a class="navbar-brand fw-bold fs-3 text-light" href="./registration.php">
            <span class="text-warning">Task</span>enture
        </a>
        <!-- Toggler Button to trigger Offcanvas -->
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Offcanvas -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <!-- Brand -->
                <a class="navbar-brand fw-bold fs-3 text-light" href="#">
                    <span class="text-warning">Task</span>enture
                </a>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <!-- Navbar Items -->
                <ul class="navbar-nav justify-content-start align-self-center flex-grow-1 pe-3">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Learn More
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="./about_us.php">About</a></li>
                            <li><a class="dropdown-item" href="./faqs_sub.php">FAQs</a></li>
                            <li><a class="dropdown-item" href="./contact_sub.php">Contacts</a></li>
                        </ul>
                    </li>
                </ul>

                <!-- Login Button -->
                <form class="d-flex align-items-center mt-2">
                    <a href="./login.php" class="btn btn-success px-3 rounded-3">Login</a>
                </form>
            </div>
        </div>
    </div>
</nav>