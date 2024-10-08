<?php include_once './components/authenticated-header.php' ?>

<?php include_once './components/red-strip.php' ?>

<?php include_once './components/breadcrumb.php' ?>

<section>
    <div class="main-container-details mt-4">

        <h1 class="text-bold text-center w-100 border-bottom pb-4 pointsAndShoppingTitle">
            Manage Account
        </h1>

        <div class="grid-on-small-flex-on-large center-on-small gap-3 justify-content-between py-4 border-bottom">
            <div class="flex-middle gap-3">
                <img src="./assets/images/order-details/Asset 1.png" class="profile-icon" alt="assets" />
                <h1 class="text-bold LongUserName">LongUserName000999</h1>
            </div>
            <div class="d-flex gap-4">
                <a href="manage-accounts.php" class="manage-account-button flex-middle gap-2">
                    <img src="./assets/images/order-details/Asset 2.png" class="small-icons" alt="assets" />
                    <p class="text-bold">Manage Account</p>
                </a>
                <a href="/" class="manage-account-button flex-middle gap-2">
                    <img src="./assets/images/order-details/Asset 3.png" class="small-icons" alt="assets" />
                    <p class="text-bold">Sign Out</p>
                </a>
            </div>
        </div>

        <div class="py-2 mt-5">
            <div class="d-flex justify-content-between align-content-center grid-on-small-flex-on-large gap-3">
                <div class="d-flex justify-content-start gap-3 align-items-center">
                    <img src="./assets/images/order-details/Asset 5.png" alt="assets" />
                    <h4 class="text-bold title-points-cart mt-2">Shopping Cart</h4>
                </div>
                <div>
                    <button class="point-button text-white">
                        <p> View Shopping Cart(s)</p>
                    </button>
                </div>
            </div>

            <div class="points-container border-bottom pb-5 mt-3">
                <div class="d-flex justify-content-between">
                    <table class="points-info-table grid-on-small-flex-on-large">
                        <tr>
                            <td class="product-nested-description">Total Products In This Week’s Cart </td>
                            <td><span class="points-value">2</span></td>
                        </tr>
                        <tr>
                            <td class="product-nested-description">Total Future Scheduled Products In Cart </td>
                            <td><span class="points-value">1</span></td>
                            <td class="flex-middle text-bold gap-2 text-small">
                                <img src="./assets/images/order-details/Asset 2.png" class="setting-icons"
                                    alt="assets" />
                                <p class="underline text-small text-start w-100 cursor-pointer">View & Edit
                                    Future
                                    Shopping Cart</p>
                            </td>
                        </tr>
                    </table>
                </div>

            </div>

        </div>

        <div class="py-2 mt-5">
            <div class="d-flex justify-content-between align-content-center grid-on-small-flex-on-large gap-3">
                <div class="d-flex justify-content- gap-3 align-items-center">
                    <img src="./assets/images/manage-accounts/delivery.png" alt="assets" />
                    <h4 class="text-bold title-points-cart mt-2">Deliveries</h4>
                </div>
                <div>
                    <button class="manage-account-button flex-middle gap-2 mt-3">
                        <img src="./assets/images/order-details/Asset 6.png" class="small-icons" alt="assets" />
                        <p class="text-bold" style="padding: 6px 0px;">Delivery Address</p>
                    </button>
                </div>
            </div>

            <div class="points-container border-bottom pb-5 mt-3">
                <div class="d-flex justify-content-between">
                    <table class="points-info-table">
                        <tr>
                            <td class="product-nested-description">Total Planned Future Scheduled Delivery
                                Frequency
                            </td>
                            <td><span class="points-value">1 Per Week</span></td>

                        </tr>
                        <tr>
                            <td class="product-nested-description">Total Undelivered Items </td>
                            <td><span class="points-value">999,999</span></td>
                        </tr>
                        <tr>
                            <td class="product-nested-description">Current Item Delivery Warnings / Issues </td>
                            <td><span class="points-value">1</span></td>
                        </tr>
                    </table>
                </div>

            </div>

        </div>

        <div class="py-2 mt-5">
            <div class="d-flex justify-content-between align-content-center">
                <div class="d-flex justify-content- gap-3 align-items-center">
                    <img src="./assets/images/manage-accounts/payment.png" alt="assets" />
                    <h4 class="text-bold title-points-cart mt-2">Payments / Your Address(es) / Your Contact
                        Details
                    </h4>
                </div>

            </div>

            <div class="points-container border-bottom pb-2 mt-3">
                <div class="d-flex justify-content-between w-100">
                    <table class="points-info-table w-100">
                        <tr class="d-flex align-items-center justify-content-between grid-on-small-flex-on-large">
                            <td class="product-nested-description">Payment Information
                            </td>
                            <td>
                                <span class="points-value">Direct Debit Account Ending XXXX XXXX XXXX
                                    8504</span>
                            </td>
                            <td>
                                <button class="manage-account-button flex-middle gap-2 mt-3">
                                    <img src="./assets/images/order-details/Asset 6.png" class="small-icons"
                                        alt="assets" />
                                    <p class="text-bold" style="padding: 6px 0px;">Delivery Address</p>
                                </button>
                            </td>
                        </tr>
                    </table>
                </div>

            </div>

        </div>

        <div class="mt-5">
            <div>
                <button class="point-button text-bold"
                    style="background-color: white; border: 1px solid #C92540; color: #C92540;">
                    <p>View Your Invoices</p>
                </button>
            </div>

        </div>

    </div>
</section>

<?php include_once './components/footer.php' ?>