<?php include_once './components/authenticated-header.php' ?>

<?php include_once './components/red-strip.php' ?>

<?php include_once './components/breadcrumb.php' ?>

<section class="main-container-details mt-4">
    <div>
        <h1 class="text-bold text-center w-100 border-bottom py-4 pointsAndShoppingTitle">
            Points & Shopping Cart Overview
        </h1>

        <div class="grid-on-small-flex-on-large center-on-small gap-3 justify-content-between py-4 border-bottom">
            <div class="flex-middle gap-3">
                <img src="./assets/images/order-details/Asset 1.png" class="profile-icon" alt="assets" />
                <h1 class="text-bold LongUserName">LongUserName000999</h1>
            </div>
            <div class="d-flex gap-4">
                <a href="/manage-accounts.php" class="manage-account-button flex-middle gap-2">
                    <img src="./assets/images/order-details/Asset 2.png" class="small-icons" alt="assets" />
                    <p class="text-bold">Manage Account</p>
                </a>
                <a href="/" class="manage-account-button flex-middle gap-2">
                    <img src="./assets/images/order-details/Asset 3.png" class="small-icons" alt="assets" />
                    <p class="text-bold">Sign Out</p>
                </a>
            </div>
        </div>

        <!-- first box -->
        <div class="py-5">
            <div class="d-flex justify-content-start gap-3  align-content-center center-on-smal details-page-table">
                <img src="./assets/images/order-details/Asset 4.png" class="profile-icon" alt="assets" />
                <h4 class="text-bold flex-middle title-points-cart center-on-small ">Points</h4>
            </div>

            <div
                class="points-container center-on-small border-bottom pb-5 mt-3 grid-on-small-flex-on-large gap-3 details-page-table mx-3">
                <table class="points-info-table">
                    <tr>
                        <td class="product-nested-description">Total Allocated For This Month (MM/YYYY):</td>
                        <td><span class="points-value">123</span></td>
                    </tr>
                    <tr>
                        <td class="product-nested-description">Total Unused This Month (MM/YYYY):</td>
                        <td><span class="points-value">66</span></td>
                    </tr>
                    <tr>
                        <td class="product-nested-description">Total Points Accrued Since Account Activation:</td>
                        <td>
                            <span class="points-value">999,999 · Active Since DD/MM/YYY
                            </span>
                        </td>
                    </tr>
                </table>
                <div class="center-on-small">
                    <button class="point-button text-white">
                        <p>Purchase More Points</p>
                    </button>
                </div>
            </div>
        </div>

        <div class="py-2 ">
            <div
                class="d-flex center-on-small justify-content-between align-content-center grid-on-small-flex-on-large gap-3">
                <div class="d-flex justify-content-start gap-3 align-items-center">
                    <img src="./assets/images/order-details/Asset 5.png" alt="assets" />
                    <h4 class="text-bold title-points-cart mt-2">Shopping Cart</h4>
                </div>
                <div class="mt-4">
                    <button class="point-button text-white" data-toggle="modal" data-target=".bd-example-modal-lg">
                        <p> View Scheduled Future Shopping Cart Items </p>
                    </button>
                </div>
            </div>

            <div class="points-container border-bottom pb-5 center-on-small mt-3 grid-on-small-flex-on-large">
                <div class="d-flex justify-content-between">
                    <table class="points-info-table ">
                        <tr class="center-on-small">
                            <td class="product-nested-description">
                                Your Shopping Cart For This Week
                            </td>
                            <td>
                                <span class="points-value">From DD/MM/YYYY To DD/MM/YYYY</span>
                            </td>
                        </tr>
                    </table>
                </div>
                <button class="manage-account-button flex-middle gap-2 mt-3">
                    <img src="./assets/images/order-details/Asset 6.png" class="small-icons" alt="assets" />
                    <p class="text-bold" style="padding: 6px 0px;">Delivery Address</p>
                </button>
            </div>

            <div class="table-choice-vegetable-box" style="background-color: #F2F2F2;">

                <!-- Table -->
                <div class="d-flex justify-content-between grid-on-small-flex-on-large center-on-small gap-3 py-2">
                    <div class="d-flex gap-3">
                        <div>
                            <p class="product-nested-titles"> Choice Vegetable Box · Small </p>
                        </div>
                        <div class="points-button flex-middle gap-2 text-bolder" style="background-color: white;">
                            <img src="./assets/images/fruitandveg/Asset 2.png" class="small-icons" alt="assets" />
                            10 points
                        </div>
                    </div>
                    <div class="flex-middle text-small gap-2 text-bold " data-toggle="modal"
                        data-target=".select-future-box-modal">
                        <img src=" ./assets/images/order-details/Asset 2.png" class="setting-icons" alt="assets" />
                        <p class="underline cursor-pointer">Remove This Item From My Shopping Cart For This Week
                            Only
                        </p>
                    </div>
                </div>

                <div class="mt-3 center-on-small">
                    <table class="quantity-table gap-2 m-4 grid-on-small-flex-on-large center-on-small">
                        <tr class="w-100">
                            <td>
                                <p class="product-nested-description text-bold">Quantity</p>
                            </td>
                            <td>
                                <p class="points-value">1x</p>
                            </td>
                            <td class="flex-middle text-bold gap-2 text-small cursor-pointer"
                                data-target=".edit-contents-modal" data-toggle="modal">
                                <img src="./assets/images/order-details/Asset 2.png" class="setting-icons"
                                    alt="assets" />
                                <p class="underline text-small text-start w-100">Edit Quantity</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="product-nested-description text-bold">Delivery Frequency</p>
                            </td>
                            <td>
                                <p class="points-value">1 Per Week</p>
                            </td>
                            <td class="flex-middle text-small text-bold gap-2">
                                <img src="./assets/images/order-details/Asset 2.png" class="setting-icons"
                                    alt="assets" />
                                <p class="underline text-small text-start w-100 cursor-pointer" data-toggle="modal"
                                    data-target="#deliveryFrequencyModal">
                                    Edit The Delivery Frequency
                                </p>
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="grid-on-small-flex-on-large center-on-small gap-3" style="background-color: white;">
                    <div class="w-full d-flex py-3 grid-on-small-flex-on-large center-on-small gap-3">

                        <div class="">
                            <img src="./assets/images/fruitandveg/Asset 1.png" class="order-details-product-image"
                                alt="assets" />

                            <div class="d-flex m-2 gap-2">
                                <div class="">
                                    <img src="./assets/images/order-details/Asset 9.png" class="small-icons"
                                        alt="assets" style="color: #808080;">
                                </div>
                                <p class="text-small text-start fst-italic" style="color: #808080;">
                                    The above image is the default suggested <br />
                                    contents and may not represent the actual <br />
                                    Veg Box contents that you have defined
                                </p>
                            </div>
                        </div>

                        <div class="grid-on-small-flex-on-large center-on-small gap-3">

                            <div class="mx-3 border-and-padding">
                                <div class="d-flex justify-content-start align-items-center gap-2">
                                    <img src="./assets/images/order-details/Asset 8.png" class="order-details-product"
                                        alt="assets" />
                                    <p class="product-nested-description defined-content mt-3">
                                        Defined Contents
                                    </p>
                                </div>
                                <table class="product-table mt-3">
                                    <tr class="each-product-row">
                                        <td class="product-nested-description each-product-row">Potatoes (700g)</td>
                                        <td class="product-nested-description flex-middle gap-2 each-product-row">
                                            <img src="./assets/images/fruitandveg/Asset 2.png" class="small-icons"
                                                alt="assets" />
                                            1 Points
                                        </td>
                                    </tr>
                                    <tr class="each-product-row">
                                        <td class="product-nested-description each-product-row">Potatoes (700g)</td>
                                        <td class="product-nested-description flex-middle gap-2 each-product-row">
                                            <img src="./assets/images/fruitandveg/Asset 2.png" class="small-icons"
                                                alt="assets" />
                                            1 Points
                                        </td>
                                    </tr>
                                    <tr class="each-product-row">
                                        <td class="product-nested-description each-product-row">Potatoes (700g)</td>
                                        <td class="product-nested-description flex-middle gap-2 each-product-row">
                                            <img src="./assets/images/fruitandveg/Asset 2.png" class="small-icons"
                                                alt="assets" />
                                            1 Points
                                        </td>
                                    </tr>
                                    <tr class="each-product-row">
                                        <td class="product-nested-description each-product-row">Potatoes (700g)</td>
                                        <td class="product-nested-description flex-middle gap-2 each-product-row">
                                            <img src="./assets/images/fruitandveg/Asset 2.png" class="small-icons"
                                                alt="assets" />
                                            1 Points
                                        </td>
                                    </tr>
                                    <tr class="each-product-row">
                                        <td class="product-nested-description each-product-row">Potatoes (700g)</td>
                                        <td class="product-nested-description flex-middle gap-2 each-product-row">
                                            <img src="./assets/images/fruitandveg/Asset 2.png" class="small-icons"
                                                alt="assets" />
                                            1 Points
                                        </td>
                                    </tr>
                                    <tr class="each-product-row">
                                        <td class="product-nested-description each-product-row">Potatoes (700g)</td>
                                        <td class="product-nested-description flex-middle gap-2 each-product-row">
                                            <img src="./assets/images/fruitandveg/Asset 2.png" class="small-icons"
                                                alt="assets" />
                                            1 Points
                                        </td>
                                    </tr>

                                    <tr class="each-product-row">
                                        <td class="product-nested-description each-product-row">Potatoes (700g)</td>
                                        <td class="product-nested-description flex-middle gap-2 each-product-row">
                                            <img src="./assets/images/fruitandveg/Asset 2.png" class="small-icons"
                                                alt="assets" />
                                            1 Points
                                        </td>
                                    </tr>

                                    <tr class="each-product-row">
                                        <td class="product-nested-description each-product-row ">Potatoes (700g)
                                        </td>
                                        <td class="product-nested-description flex-middle gap-2 each-product-row">
                                            <img src="./assets/images/fruitandveg/Asset 2.png" class="small-icons"
                                                alt="assets" />
                                            1 Points
                                        </td>
                                    </tr>
                                </table>
                            </div>

                        </div>
                        <div class="order-details-left-side d-grid">
                            <div class="d-flex gap-3 align-items-center my-2">
                                <img src="./assets/images/order-details/Asset 6.png" style="height: 14px;"
                                    alt="assets" />
                                <p class="product-nested-description text-bold each-product-row ">Date Of
                                    Delivery
                                </p>
                            </div>
                            <p class="product-nested-description my-2 text-bold each-product-row "
                                style="color:#C51633;">Monday
                                DD/MM/YYYY Between 8am &
                                12pm
                            </p>
                            <div data-target="#findDeliveryDayModal" data-toggle="modal"
                                class="d-flex align-items-center align-items-center text-small gap-2 text-bold my-2">
                                <img src="./assets/images/order-details/Asset 2.png" class="setting-icons"
                                    alt="assets" />
                                <p class="underline text-small each-product-row cursor-pointer">Manage This
                                    Delivery
                                    Date & Time
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="mt-4 d-flex gap-5 py-4 grid-on-small-flex-on-large center-on-small gap-3">
                    <div>
                        <button class="edit-contents-button" data-target=".edit-contents-modal" data-toggle="modal"
                            style="background-color: white;">
                            Edit Contents
                        </button>
                    </div>
                    <div class="d-flex gap-2">
                        <div class='text-below-table'>
                            <div class="d-flex gap-3 align-items-center">
                                <img src="./assets/images/order-details/Asset 9.png" style="height: 19px;" alt="assets">
                                <p class="product-nested-description  text-bold">
                                    If you wish to edit the Contents of this Delivery, the Date of Delivery, or the
                                    Specified
                                    Delivery Location, <br />
                                    please do so before
                                    <a class="text-small" style="color: #C51633;"> DD/MM/YYYY 00:00 </a> as to
                                    guarantee
                                    the delivery of your modified
                                    choices.
                                </p>
                            </div>
                            <div class="d-flex gap-3 mt-3">
                                <img src="./assets/images/order-details/Asset 2.png" style="height: 19px;"
                                    alt="assets" />
                                <p class="underline product-nested-description w-100 text-bold">Permanently Remove
                                    This
                                    Item From Future Deliveries</p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- first box ends-->

        <!-- second box -->
        <div class="py-2">
            <div class="table-choice-vegetable-box" style="background-color: #F2F2F2;">

                <!-- Table -->
                <div class="d-flex justify-content-between grid-on-small-flex-on-large center-on-small gap-3 py-2">
                    <div class="d-flex gap-3">
                        <div>
                            <p class="product-nested-titles"> Fitzbilies Granola · 400g </p>
                        </div>
                        <div class="points-button flex-middle gap-2 text-bolder" style="background-color: white;">
                            <img src="./assets/images/fruitandveg/Asset 2.png" class="small-icons" alt="assets" />
                            10 points
                        </div>
                    </div>
                    <div class="flex-middle text-small gap-2 text-bold " data-toggle="modal"
                        data-target=".select-future-box-modal">
                        <img src=" ./assets/images/order-details/Asset 2.png" class="setting-icons" alt="assets" />
                        <p class="underline cursor-pointer">Remove This Item From My Shopping Cart For This Week
                            Only
                        </p>
                    </div>
                </div>

                <div class="mt-3 center-on-small">
                    <table class="quantity-table gap-2 m-4 grid-on-small-flex-on-large center-on-small">
                        <tr class="w-100">
                            <td>
                                <p class="product-nested-description text-bold">Quantity</p>
                            </td>
                            <td>
                                <p class="points-value">1x</p>
                            </td>
                            <td class="flex-middle text-bold gap-2 text-small cursor-pointer"
                                data-target=".edit-contents-modal" data-toggle="modal">
                                <img src="./assets/images/order-details/Asset 2.png" class="setting-icons"
                                    alt="assets" />
                                <p class="underline text-small text-start w-100">Manage the Quantity</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="product-nested-description text-bold">Delivery Frequency</p>
                            </td>
                            <td>
                                <p class="points-value">1 Per Week</p>
                            </td>
                            <td class="flex-middle text-small text-bold gap-2">
                                <img src="./assets/images/order-details/Asset 2.png" class="setting-icons"
                                    alt="assets" />
                                <p class="underline text-small text-start w-100 cursor-pointer" data-toggle="modal"
                                    data-target="#deliveryFrequencyModal">
                                    Manage The Delivery Frequency
                                </p>
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="grid-on-small-flex-on-large center-on-small gap-3" style="background-color: white;">
                    <div class="w-full d-flex py-3 grid-on-small-flex-on-large center-on-small gap-3">

                        <div>
                            <img src="./assets/images/fruitandveg/Asset 4.png" alt="assets"
                                class="order-details-product-image2" />
                        </div>

                        <div class="grid-on-small-flex-on-large center-on-small gap-3">
                            <div class="mx-4 border-and-padding">

                                <div class="d-flex justify-content-start align-items-center gap-2">
                                    <img src="./assets/images/order-details/Asset 8.png" class="order-details-product"
                                        alt="assets" />
                                    <p class="product-nested-description defined-content mt-3">
                                        Product Overview
                                    </p>
                                </div>

                                <div class="mt-3 product-table" style="font-weight: 700;">
                                    <p class="product-nested-decription text-small">Ingredients</p>
                                    <p class="product-nested-escripion text-small">
                                        Rolled gluten-free oats, vine fruits (sultanas <br />
                                        [sulphites] and currants), Fitzbillies Chelsea <br />
                                        Bun syrup, sunflower seeds, pumpkin seeds, <br />
                                        flaked almonds, vegetable oil, cinnamon and salt.
                                    </p>
                                </div>
                                <div class="mt-3 product-table" style="font-weight: 700;">
                                    <p class="product-nested-desciption text-small">Allergy Advice</p>
                                    <p class="product-nested-descrption text-small">
                                        Warning, may contain: Nuts, Wheat, Gluton, Egg, Dairy
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="order-details-left-side d-grid">
                            <div class="d-flex gap-3 align-items-center my-2">
                                <img src="./assets/images/order-details/Asset 6.png" style="height: 14px;"
                                    alt="assets" />
                                <p class="product-nested-description text-bold each-product-row ">Date Of
                                    Delivery
                                </p>
                            </div>
                            <p class="product-nested-description my-2 text-bold each-product-row "
                                style="color:#C51633;">Monday
                                DD/MM/YYYY Between 8am &
                                12pm
                            </p>
                            <div data-target="#findDeliveryDayModal" data-toggle="modal"
                                class="d-flex align-items-center align-items-center text-small gap-2 text-bold my-2">
                                <img src="./assets/images/order-details/Asset 2.png" class="setting-icons"
                                    alt="assets" />
                                <p class="underline text-small each-product-row cursor-pointer">Manage This
                                    Delivery
                                    Date & Time
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="mt-4 d-flex gap-5 py-4 grid-on-small-flex-on-large center-on-small gap-3">
                    <div>
                        <button class="edit-contents-button" data-target=".edit-contents-modal" data-toggle="modal"
                            style="background-color: white;">
                            Edit Contents
                        </button>
                    </div>
                    <div class="d-flex gap-2">
                        <div class='text-below-table'>
                            <div class="d-flex gap-3 align-items-center">
                                <img src="./assets/images/order-details/Asset 9.png" style="height: 19px;" alt="assets">
                                <p class="product-nested-description  text-bold">
                                    If you wish to edit the Contents of this Delivery, the Date of Delivery, or the
                                    Specified
                                    Delivery Location, <br />
                                    please do so before
                                    <a class="text-small" style="color: #C51633;"> DD/MM/YYYY 00:00 </a> as to
                                    guarantee
                                    the delivery of your modified
                                    choices.
                                </p>
                            </div>
                            <div class="d-flex gap-3 mt-3">
                                <img src="./assets/images/order-details/Asset 2.png" style="height: 19px;"
                                    alt="assets" />
                                <p class="underline product-nested-description w-100 text-bold">Permanently Remove
                                    This
                                    Item From Future Deliveries</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- second box ends-->
        </div>
        <!-- second box -->

        <!-- MODALS -->

        <!-- add-to-with-counter Modal -->
        <div class="modal fade add-to-with-counter-modal" id="deliveryFrequencyModal" tabindex="-1" role="dialog"
            aria-labelledby="EditContentsModal" aria-hidden="true" style="margin: auto;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content modal-contentt" style="background-color: #F2F2F2;">
                    <div class="d-flex justify-content-end">
                        <button type="button" class="close mt-3 mr-3" data-dismiss="modal" aria-label="Close"
                            style="border-radius: 20px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                class="modal-cross-button">
                                <path fill="none" stroke="white" stroke-linecap="round" d="m6 6l12 12m0-12L6 18" />
                            </svg>
                        </button>
                    </div>
                    <div class="modal-body" style="max-width: 700px; margin: auto;">
                        <h1 class="text-bold" style="font-size: 35px;">
                            Choice Vegetable Box · Small
                        </h1>
                        <h7 class="mt-5 text-bold" style="font-size: 13px; color: #153D37;">
                            How many deliveries and how often?
                        </h7>
                        <div class="counter mt-3 flex-middle gap-5">
                            <button style="border: none; background-color: transparent;">
                                <p class="cursor-poiter flex-middle counter-btn" id="decrement">-</p>
                            </button>
                            <span id="counter-value" class="mx-3" style="font-size: 45px; font-weight: 600;">0</span>
                            <button style="border: none; background-color: transparent;">
                                <p class="cursor-poiter flex-middle counter-btn" id="increment">+</p>
                            </button>
                        </div>
                    </div>
                    <div class="d-flex mx-auto gap-3 green-buttons-container">
                        <div>
                            <button class="green-modal-buttons">
                                Once Only
                            </button>
                        </div>
                        <div>
                            <button class="green-modal-buttons">
                                Every Week
                            </button>
                        </div>
                        <div>
                            <button class="green-modal-buttons">
                                Every 2 Weeks
                            </button>
                        </div>
                    </div>
                    <div class="mx-auto mt-5 mb-5">
                        <h7 class="mt-5 mx-auto fst-italic" style="font-size: 13px; color: #C41230; max-width: 100px;">
                            *The produce that you have previously edited will <br />
                            <p class="underline"> only apply to your next Choice Vegetable Box </p>
                        </h7>
                    </div>
                    <div class="d-flex mx-auto gap-4 mb-5">
                        <div>
                            <button class="cancel-button font-bold" data-toggle="modal"
                                data-target=".bd-example-modal-lg">
                                Cancel
                            </button>
                        </div>
                        <div>
                            <button class="add-to-order-button text-white" data-toggle="modal"
                                data-target="#findDeliveryDayModal">
                                Confirm Selection
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Edit contents Modal -->
        <div class="modal Add-Choice-Modal border fade edit-contents-modal" tabindex="-1" role="dialog"
            aria-labelledby="AddChoiceModal" aria-hidden="true" style="margin: auto; ">
            <div class="modal-dialog modal-lg" style="max-width: 950px !important;">
                <div class=" modal-body modal-content" style="background-color: #F2F2F2; margin: auto;">
                    <div class="d-flex justify-content-end">
                        <button type="button" class="close mt-3 mr-3" data-dismiss="modal" aria-label="Close"
                            style="border-radius: 20px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                class="modal-cross-button">
                                <path fill="none" stroke="white" stroke-linecap="round" d="m6 6l12 12m0-12L6 18" />
                            </svg>
                        </button>
                    </div>

                    <!-- p-5 -->
                    <div class="table-with-border">

                        <h1 class=" text-bold" style="font-size: 30px;">
                            Your Choice Vegetable Box · Small
                        </h1>
                        <h7 class="mt-5 text-bold" style="font-size: 13px; color: #153D37;">
                            Please select what you would like to change within your Small Veg Box (up to 10
                            points):
                        </h7>

                        <div class="mt-4">
                            <div style="border: 2px solid #4B5943;">
                                <div class="d-flex justify-content-between p-3" style="background-color: #EBD7AD;">
                                    <div class="d-flex w-100 align-items-center gap-2">
                                        <img src="./assets/images/fruitandveg/Asset 2.png" alt="assets"
                                            style="width: 20px;" />
                                        <span class="text-bold">10 / 10 Points Used</span>
                                    </div>
                                    <button class="empty-selection-button">Empty Selection</button>
                                </div>
                                <table class="">
                                    <tbody>
                                        <tr class="">
                                            <td>Potatoes (700g)</td>
                                            <td class="d-flex gap-2 align-items-center mt-2">
                                                <img src="./assets/images/fruitandveg/Asset 2.png" alt="assets"
                                                    style="width: 15px;" />
                                                2 Points
                                            </td>
                                            <td>
                                                <button class="d-flex align-items-center remove-btn">Remove
                                                    <span class="sign"> −
                                                    </span></button>
                                            </td>
                                            <td class="d-flex justify-content-center">
                                                Quantity
                                                <select>
                                                    <option value="1">1</option>
                                                    <option value="1">1</option>
                                                    <option value="1">1</option>
                                                    <option value="1">1</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr class="" style="background-color: #E6E6E6;">
                                            <td>Potatoes (700g)</td>
                                            <td class="d-flex gap-2 align-items-center mt-2">
                                                <img src="./assets/images/fruitandveg/Asset 2.png" alt="assets"
                                                    style="width: 15px;" />
                                                2 Points
                                            </td>
                                            <td>
                                                <button class="d-flex align-items-center remove-btn">Remove
                                                    <span class="sign"> −
                                                    </span></button>
                                            </td>
                                            <td class="d-flex justify-content-center">
                                                Quantity
                                                <select>
                                                    <option value="1">1</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr class="">
                                            <td>Potatoes (700g)</td>
                                            <td class="d-flex gap-2 align-items-center mt-2">
                                                <img src="./assets/images/fruitandveg/Asset 2.png" alt="assets"
                                                    style="width: 15px;" />
                                                2 Points
                                            </td>
                                            <td>
                                                <button class="d-flex align-items-center remove-btn">Remove
                                                    <span class="sign"> −
                                                    </span></button>
                                            </td>
                                            <td class="d-flex justify-content-center">
                                                Quantity
                                                <select>
                                                    <option value="1">1</option>
                                                    <option value="1">1</option>
                                                    <option value="1">1</option>
                                                    <option value="1">1</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr class="" style="background-color: #E6E6E6;">
                                            <td>Potatoes (700g)</td>
                                            <td class="d-flex gap-2 align-items-center mt-2">
                                                <img src="./assets/images/fruitandveg/Asset 2.png" alt="assets"
                                                    style="width: 15px;" />
                                                2 Points
                                            </td>
                                            <td>
                                                <button class="d-flex align-items-center remove-btn">
                                                    Remove
                                                    <span class="sign"> − </span>
                                                </button>
                                            </td>

                                            <td class="d-flex justify-content-center">
                                                Quantity
                                                <select>
                                                    <option value="1">1</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr class="">
                                            <td>Potatoes (700g)</td>
                                            <td class="d-flex gap-2 align-items-center mt-2">
                                                <img src="./assets/images/fruitandveg/Asset 2.png" alt="assets"
                                                    style="width: 15px;" />
                                                2 Points
                                            </td>
                                            <td>
                                                <button class="d-flex align-items-center remove-btn">Remove
                                                    <span class="sign"> −
                                                    </span></button>
                                            </td>
                                            <td class="d-flex justify-content-center">
                                                Quantity
                                                <select>
                                                    <option value="1">1</option>
                                                    <option value="1">1</option>
                                                    <option value="1">1</option>
                                                    <option value="1">1</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr class="" style="background-color: #E6E6E6;">
                                            <td>Potatoes (700g)</td>
                                            <td class="d-flex gap-2 align-items-center mt-2">
                                                <img src="./assets/images/fruitandveg/Asset 2.png" alt="assets"
                                                    style="width: 15px;" />
                                                2 Points
                                            </td>
                                            <td>
                                                <button class="d-flex align-items-center remove-btn">Remove
                                                    <span class="sign"> −
                                                    </span></button>
                                            </td>
                                            <td class="d-flex justify-content-center">
                                                Quantity
                                                <select>
                                                    <option value="1">1</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr class="">
                                            <td>Potatoes (700g)</td>
                                            <td class="d-flex gap-2 align-items-center mt-2">
                                                <img src="./assets/images/fruitandveg/Asset 2.png" alt="assets"
                                                    style="width: 15px;" />
                                                2 Points
                                            </td>
                                            <td>
                                                <button class="d-flex align-items-center remove-btn">Remove
                                                    <span class="sign"> −
                                                    </span></button>
                                            </td>
                                            <td class="d-flex justify-content-center">
                                                Quantity
                                                <select>
                                                    <option value="1">1</option>
                                                    <option value="1">1</option>
                                                    <option value="1">1</option>
                                                    <option value="1">1</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="mt-3">
                            <h7 class=" fst-italic" style="font-size: 13px; color: #C41230;">
                                *Firstly you must remove an unwanted item before you can add a new item.
                            </h7>
                        </div>

                    </div>

                    <h7 class="mt-1 text-bold" style="font-size: 13px; color: #153D37;">
                        Select from this week’s produce below:
                    </h7>

                    <div class="mx-auto table-container mt-4 border" style="width: 400px; height: 200px;"
                        background-color: #F2F2F2;">
                        <table class="table-container border" style="background-color: #F2F2F2;">
                            <tbody>
                                <tr class=" trap">
                                    <td>Potatoes (700g)</td>
                                    <td class="d-flex gap-2 align-items-center mt-2">
                                        <img src="./assets/images/fruitandveg/Asset 2.png" alt="assets"
                                            style="width: 15px;" />
                                        2 Points
                                    </td>
                                    <td>
                                        <button class="d-flex align-items-center remove-btn">Add<span class="sign">
                                                +
                                            </span></button>
                                    </td>
                                </tr>
                                <tr class="trap">
                                    <td>Potatoes (700g)</td>
                                    <td class="d-flex gap-2 align-items-center mt-2">
                                        <img src="./assets/images/fruitandveg/Asset 2.png" alt="assets"
                                            style="width: 15px;" />
                                        2 Points
                                    </td>
                                    <td>
                                        <button class="d-flex align-items-center remove-btn">Add<span class="sign">
                                                +
                                            </span></button>
                                    </td>
                                </tr>
                                <tr class="trap">
                                    <td>Potatoes (700g)</td>
                                    <td class="d-flex gap-2 align-items-center mt-2">
                                        <img src="./assets/images/fruitandveg/Asset 2.png" alt="assets"
                                            style="width: 15px;" />
                                        2 Points
                                    </td>
                                    <td>
                                        <button class="d-flex align-items-center remove-btn">Add<span class="sign">
                                                +
                                            </span></button>
                                    </td>
                                </tr>
                                <tr class="trap">
                                    <td>Potatoes (700g)</td>
                                    <td class="d-flex gap-2 align-items-center mt-2">
                                        <img src="./assets/images/fruitandveg/Asset 2.png" alt="assets"
                                            style="width: 15px;" />
                                        2 Points
                                    </td>
                                    <td>
                                        <button class="d-flex align-items-center remove-btn">Add<span class="sign">
                                                +
                                            </span></button>
                                    </td>

                                </tr>
                                <tr class="trap">
                                    <td>Potatoes (700g)</td>
                                    <td class="d-flex gap-2 align-items-center mt-2">
                                        <img src="./assets/images/fruitandveg/Asset 2.png" alt="assets"
                                            style="width: 15px;" />
                                        2 Points
                                    </td>
                                    <td>
                                        <button class="d-flex align-items-center remove-btn">Add<span class="sign">
                                                +
                                            </span></button>
                                    </td>
                                </tr>
                                <tr class="trap">
                                    <td>Potatoes (700g)</td>
                                    <td class="d-flex gap-2 align-items-center mt-2">
                                        <img src="./assets/images/fruitandveg/Asset 2.png" alt="assets"
                                            style="width: 15px;" />
                                        2 Points
                                    </td>
                                    <td>
                                        <button class="d-flex align-items-center remove-btn">Add<span class="sign">
                                                +
                                            </span></button>
                                    </td>
                                </tr>
                                <tr class="trap">
                                    <td>Potatoes (700g)</td>
                                    <td class="d-flex gap-2 align-items-center mt-2">
                                        <img src="./assets/images/fruitandveg/Asset 2.png" alt="assets"
                                            style="width: 15px;" />
                                        2 Points
                                    </td>
                                    <td>
                                        <button class="d-flex align-items-center remove-btn">Add<span class="sign">
                                                +
                                            </span></button>
                                    </td>
                                </tr>
                                <tr class="trap">
                                    <td>Potatoes (700g)</td>
                                    <td class="d-flex gap-2 align-items-center mt-2">
                                        <img src="./assets/images/fruitandveg/Asset 2.png" alt="assets"
                                            style="width: 15px;" />
                                        2 Points
                                    </td>
                                    <td>
                                        <button class="d-flex align-items-center remove-btn">Add<span class="sign">
                                                +
                                            </span></button>
                                    </td>
                                </tr>
                                <tr class="trap">
                                    <td>Potatoes (700g)</td>
                                    <td class="d-flex gap-2 align-items-center mt-2">
                                        <img src="./assets/images/fruitandveg/Asset 2.png" alt="assets"
                                            style="width: 15px;" />
                                        2 Points
                                    </td>
                                    <td>
                                        <button class="d-flex align-items-center remove-btn">Add<span class="sign">
                                                +
                                            </span></button>
                                    </td>

                                </tr>
                                <tr class="trap">
                                    <td>Potatoes (700g)</td>
                                    <td class="d-flex gap-2 align-items-center mt-2">
                                        <img src="./assets/images/fruitandveg/Asset 2.png" alt="assets"
                                            style="width: 15px;" />
                                        2 Points
                                    </td>
                                    <td>
                                        <button class="d-flex align-items-center remove-btn">Add<span class="sign">
                                                +
                                            </span></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- d-flex mx-auto -->
                    <div class=" gap-2 mb-5 mt-5 button-container">
                        <div>
                            <!-- style="font-size: 12px; padding: 7px 36px;" -->
                            <button class=" cancel-button close text-bold" data-dismiss="modal">
                                Cancel
                            </button>
                        </div>
                        <div>
                            <!-- style="" -->
                            <button class="add-to-order-button text-white">
                                Buy Extra Points
                            </button>
                        </div>
                        <div>
                            <!-- style="" -->
                            <button class="add-to-order-button text-white">
                                Update this week’s Veg Box contents
                            </button>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <!-- Find Delivery Day Modal -->
        <div class="modal fade" id="findDeliveryDayModal" tabindex="-1" role="dialog"
            aria-labelledby="findDeliveryDayModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content" style="background-color: #f0f0f0;">
                    <div class="modal-heaer d-flex justify-content-end">
                        <button type="button" class="close m-3" data-dismiss="modal" aria-label="Close"
                            style="border-radius: 20px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                class="modal-cross-button">
                                <path fill="none" stroke="white" stroke-linecap="round" d="m6 6l12 12m0-12L6 18" />
                            </svg>
                        </button>
                    </div>
                    <div class="modal-body p-5" style="max-width: 400px; margin: auto;">

                        <img src="./assets/images/product-details/modal.png" alt="assets" />
                        <h1 class="text-bold mt-4 modal-main-heading">
                            Find out your <br />
                            delivery day
                        </h1>
                        <p class="mt-5 text-bold" style="font-size: 13px; color: #153D37;">
                            Enter your Postcode below and discover when <br />
                            our delivery team are in your area:
                        </p>
                        <input type="text" class="modal-input mt-3" placeholder="Enter your postcode (e.g. CB2 VEG)">
                        <br />
                        <br />
                        <button class="continue-shopping-button text-white" data-toggle="modal"
                            data-target="#MondayModal" data-dismiss="modal" aria-label="Close">
                            Enter
                        </button>
                        <br />
                        <br />

                        <h7 class="mt-4 text-bold" style="font-size: 13px; color: #153D37;">
                            Or <a class="underline"> sign in</a> to your account
                        </h7>
                    </div>

                </div>
            </div>
        </div>

        <!-- Monday Modal -->
        <div class="modal fade" id="MondayModal" tabindex="-1" role="dialog" aria-labelledby="MondayModalTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content" style="background-color: #f0f0f0;">
                    <div class="d-flex justify-content-end">
                        <button type="button" class="close m-3" data-dismiss="modal" aria-label="Close"
                            style="border-radius: 20px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                class="modal-cross-button">
                                <path fill="none" stroke="white" stroke-linecap="round" d="m6 6l12 12m0-12L6 18" />
                            </svg>
                        </button>
                    </div>
                    <div class="modal-body p-5" style="max-width: 400px; margin: auto;">
                        <img src="./assets/images/product-details/modal.png" alt="assets" />
                        <h1 class="text-bold mt-4" style="font-size: 35px;">
                            Monday
                        </h1>
                        <h7 class="mt-5 text-bold" style="font-size: 13px; color: #153D37;">
                            We deliver to your area every Monday.
                            The next time we can deliver to you is on DD / MM.s
                        </h7>
                        <br />
                        <div class="mt-3">
                            <h7 class=" text-bold" style="font-size: 13px; color: #153D37;">
                                Check out by 00:00pm on DD / MM
                                and we’ll deliver the next day.
                            </h7>
                        </div>
                        <br />
                        <button class="continue-shopping-button text-white" data-dismiss="modal">
                            Continue Shopping...
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Select future box Modal -->
        <div class="modal fade select-future-box-modal" tabindex="-1" role="dialog" aria-labelledby="EditContentsModal"
            aria-hidden="true" style="margin: auto;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content order-details-edit-modal-content modal-contentt"
                    style="background-color: #F2F2F2;">

                    <div class="d-flex justify-content-end">
                        <button type="button" class="close mt-3 mr-3" data-dismiss="modal" aria-label="Close"
                            style="border-radius: 20px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                class="modal-cross-button">
                                <path fill="none" stroke="white" stroke-linecap="round" d="m6 6l12 12m0-12L6 18" />
                            </svg>
                        </button>
                    </div>

                    <div class="modal-body" style="max-width: 600px; margin: auto;">
                        <h1 class="text-bold modal-title" style="font-size: 35px;">
                            Please select your future <br />
                            Choice Box contents
                        </h1>
                        <h7 class="mt-5 text-bold" style="font-size: 13px; color: #C61A37;">
                            Please follow the link below to confirm your Choice Box contents
                        </h7>

                        <div class="d-flex gap- align-items-start mr-l-3 mt-4" style="max-width: 400px;">
                            <img src="./assets/images/order-details/Asset 9.png" style="height: 19px;" alt="asset">
                            <p class="product-nested-description text-bold text-center">
                                You will be asked two working days before your next
                                Vegetable Box delivery for confirmation of content.
                            </p>
                        </div>

                    </div>

                    <div class="d-flex mx-auto gap-2 my-3">
                        <div>
                            <button class="cancel-button font-bold" data-dismiss="modal" aria-label="Close">
                                Cancel
                            </button>
                        </div>
                        <div>
                            <button class="add-to-order-button text-white" data-toggle="modal"
                                data-target="edit-contents-modal">
                                Modify Choice Box
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- View Scheduled  -->
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="EditContentsModal"
            aria-hidden="true" style="margin: auto;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content order-details-edit-modal-content modal-contentt"
                    style="background-color: #F2F2F2;">
                    <div class="d-flex justify-content-end">
                        <button type="button" class="close mt-3 mr-3" data-dismiss="modal" aria-label="Close"
                            style="border-radius: 20px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                class="modal-cross-button">
                                <path fill="none" stroke="white" stroke-linecap="round" d="m6 6l12 12m0-12L6 18" />
                            </svg>
                        </button>
                    </div>
                    <div class="modal-body" style="max-width: 700px; margin: auto;">
                        <h1 class="text-bold" style="font-size: 35px;">
                            Select Scheduled Future <br />
                            Shopping Cart Items
                        </h1>
                        <h7 class="mt-5 text-bold" style="font-size: 13px; color: #153D37;">
                            Firstly select the month, then the week, to view your future deliveries:
                        </h7>
                        <div class="month-selector">
                            <button class="month-nav" id="prevMonth">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"
                                    class="rotate-right">
                                    <path fill="white" d="m7 10l5 5l5-5z" />
                                    </sv>
                            </button>
                            <span class="month-display" id="monthDisplay">January 2024</span>
                            <button class="month-nav" id="nextMonth">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"
                                    class="rotate-left">
                                    <path fill="white" d="m7 10l5 5l5-5z" />
                                    </sv>
                            </button>
                        </div>
                        <div class="week-selector" id="weekSelector">
                        </div>
                    </div>

                    <div class="d-flex mx-auto gap-2 my-3 view-modal">
                        <div>
                            <button class="cancel-button font-bold" data-dismiss="modal">
                                Cancel
                            </button>
                        </div>
                        <div>
                            <button class="add-to-order-button text-white">
                                Confirm Selection
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once './components/slider.php' ?>

<?php include_once './components/footer.php' ?>