<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/css/style.scss" />
    <link rel="stylesheet" href="./assets/css/responsive.css" />
    <link rel="stylesheet" href="./assets/css/header.css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <title>COFCO</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-dark flex-middle">

        <!-- Nav tabs -->
        <div class="container main-container d-flex  mx-2">

            <!-- Offcanvas -->
            <button class="navbar-togler flex-middle hamburger hide-on-large-screen" type=" button"
                data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span class="navbar-toggler-icon hide-on-large-screen"></span>
                Menu
            </button>
            <div class="offcanvas offcanvas-start text-bg-dark off-canvas off-canvas-width" tabindex="-1"
                id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header m-2 justify-content-end p-3">
                    <button type="button" class="btn-close btn-close-white p-1" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Shop
                            </a>
                            <div class="dropdown-menu bg-dropdown-bg-green text-white off-canvas-lists underline-none">
                                <a href="#">
                                    <p class="cursor-pointer">
                                        New Customers
                                    </p>
                                </a>
                                <a href="fruit-veg.php">
                                    <p class="cursor-pointer">
                                        Choice Veg Boxes
                                    </p>
                                </a>
                                <a href="#">
                                    <p class="cursor-pointer">
                                        Original Veg Boxes
                                    </p>
                                </a>
                                <a href="#">
                                    <p class="cursor-pointer">
                                        OriginalPLUS+ Veg Boxes
                                    </p>
                                </a>
                                <a href="product-detail.php">
                                    <p class="cursor-pointer">
                                        Specific & Specialist Items
                                    </p>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                About Us
                            </a>
                            <div class="dropdown-menu bg-dropdown-bg-green text-white off-canvas-lists">
                                <p class="cursor-pointer">
                                    How It Works
                                </p>
                                <p class="cursor-pointer">
                                    Our Produce & Products Deliveries
                                </p>
                                <p class="cursor-pointer">
                                    FAQs
                                </p>
                                <p class="cursor-pointer">
                                    Why Choose Us?
                                </p>
                                <p class="cursor-pointer">
                                    Our Ethics & Sourcing Latest News
                                </p>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Sign In / Up
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Additional Helpful Links
                            </a>
                            <div class="dropdown-menu bg-dropdown-bg-green text-white off-canvas-lists">
                                <p class="cursor-pointer">
                                    New Customers
                                </p>
                                <p class="cursor-pointer">
                                    Choice Veg Boxes
                                </p>
                                <p class="cursor-pointer">
                                    Original Veg Boxes
                                </p>
                                <p class="cursor-pointer">
                                    OriginalPLUS+ Veg Boxes
                                </p>
                                <p class="cursor-pointer">
                                    Specific & Specialist Items
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <a href="/cofco/index.php">
                <img src="./assets/images/Asset 3.png" alt="logo" class="my-3 w-50 navbar-logo" />
            </a>

            <div class="d-flex m-2 hide-on-small-screen ">

                <ul class="nav nav-tabs d-flex m-2 hide-on-small-screen tabs gap-2" id="myTab" role="tablist">

                    <!-- Shop -->
                    <li class="nav-item" role="presentation">
                        <div class="rounded-pill text-white navbar-tab flex-middle nav-link shop" id="home-tab"
                            data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home"
                            aria-selected="true">
                            Shop
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 24 24">
                                <path fill="white" d="m7 10l5 5l5-5z" />
                            </svg>
                        </div>
                    </li>

                    <!-- About Us -->
                    <li class="nav-item" role="presentation">
                        <div class="rounded-pill text-white navbar-tab flex-middle about-us nav-link" id="profile-tab"
                            data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab"
                            aria-controls="profile" aria-selected="false">
                            About Us
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 24 24">
                                <path fill="white" d="m7 10l5 5l5-5z" />
                            </svg>
                        </div>
                    </li>

                    <li>
                        <div class="rounded-pill text-white navbar-tab flex-middle nav-link sign-up active"
                            style="border: 1px solid white">
                            <a href="sign-up.php" style="color: white !important; font-size: 15px;">
                                Sign In / Up
                            </a>
                        </div>
                    </li>
                </ul>

            </div>

            <!-- search for lg screen  -->
            <div class="position-relative hide-on-small-screen">
                <svg xmlns="http://www.w3.org/2000/svg" class="search-icon" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="#073b25"
                        d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5C16 5.91 13.09 3 9.5 3S3 5.91    3 9.5S5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99l1.49-1.49l-4.99-5zM9.5 14C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5S14 7.01 14 9.5S11.99 14 9.5 14z" />
                    <path fill="none" d="M0 0h24v24H0z" />
                </svg>
                <input type="text" class="form-control rounded-pill navbar-search " placeholder="Search for products"
                    style="background-color: #F2F2F2;">
            </div>

            <!-- cart -->
            <div class="dropdown show shadow-lg">
                <a href="#" class="text-white flex-middle cart position-relative" id="dropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="./assets/images/cart.png" alt="cart" class="cart-image" />
                    <div class="position-absolute count">12</div>
                </a>
                <div class="dropdown-menu p-3 cart-dropdown" aria-labelledby="dropdownMenuLink">
                    <div class="d-grid">
                        <p>1x Fitzbilies Granola · 400g</p>
                        <p>1x Fitzbilies Granola · 400g</p>
                        <p>1x Fitzbilies Granola · 400g</p>
                        <p class="m-2" style="color: #af102b; font-size: 10px;">Has been added to your order</p>
                        <div class="flex-middle m-3">
                            <a href="order-details.php">
                                <button class="dropdown-checkout-button text-white">
                                    checkout
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Search bar for small screen  -->
        <div class="position-relative -flex align-items-center w-100 hide-on-large-screen px-">
            <div class="position-absolute bottom-0 top-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="search-icon " width="24" height="24" viewBox="0 0 24 24">
                    <path fill="#073b25"
                        d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5C16 5.91 13.09 3 9.5 3S3 5.91    3 9.5S5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99l1.49-1.49l-4.99-5zM9.5 14C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5S14 7.01 14 9.5S11.99 14 9.5 14z" />
                    <path fill="none" d="M0 0h24v24H0z" />
                </svg>
            </div>
            <input type="text" class="pl-3 form-control rounded-pill navbar-search" placeholder="Search for products">
        </div>

    </nav>

    <!-- Tabs content -->
    <div class="tab-content navbar__tab__content hide-on-small-screen border-top">

        <div class="tab-pane active main-container " id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="d-flex justify-content-between tab-content active flex-middle py-3 shop-tab">
                <a href="#">
                    <p class="cursor-pointer">
                        New Customers
                    </p>
                </a>

                <a href="fruit-veg.php">
                    <p class="cursor-pointer">
                        Choice Veg Boxes
                    </p>
                </a>

                <a href="#">
                    <p class="cursor-pointer">
                        Original Veg Boxes
                    </p>
                </a>

                <a href="#">
                    <p class="cursor-pointer">
                        OriginalPLUS+ Veg Boxes
                    </p>
                </a>

                <a href="#">
                    <p class="cursor-pointer">
                        Specific & Specialist Items
                    </p>
                </a>
            </div>
        </div>
        <div class="tab-pane main-container" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="d-flex justify-content-between tab-content active flex-middle pt-3 pb-3 shop-tab"
                style="padding: 15px;">
                <p class="cursor-pointer">
                    How It Works
                </p>
                <p class="cursor-pointer">
                    Our Produce & Products Deliveries
                </p>
                <p class="cursor-pointer">
                    FAQs
                </p>
                <p class="cursor-pointer">
                    Why Choose Us?
                </p>
                <p class="cursor-pointer">
                    Our Ethics & Sourcing Latest News
                </p>
            </div>
        </div>

    </div>

    <div class="main-container">
        <form class="w-50 my-5" style="margin: auto;">
            <h1 class="text-bold" style="text-align: center;">Sign in</h1>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="Password">Password</label>
                <input type="password" id="Password" name="Password" required>
            </div>
            <div class="d-flex justify-content-end align-items-end w-100" style="align-items: center;">
                <button type="button" class="submit-btn" onclick="window.location.href='auth-user-profile.php';">
                    Sign In
                </button>
            </div>

            <p class="text-center">
                Have not registered yet? <a href="#" class="px-2 cursor-pointer" data-bs-toggle="modal"
                    data-bs-target="#signupModal">Sign up</a>
            </p>
        </form>
    </div>

    <!-- Signup Modal -->
    <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-2">
                <div class="modal-header">
                    <h3 class="modal-title text-bold" id="signupModalLabel">Sign Up</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="p-3 ">
                    <form class="w-100">
                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input type="text" id="firstName" name="firstName" required>
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name</label>
                            <input type="text" id="lastName" name="lastName" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" required>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="submit-btn">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include_once './components/footer.php' ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>