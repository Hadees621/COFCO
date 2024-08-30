<?php include_once './components/authenticated-header.php' ?>

<?php include_once './components/red-strip.php' ?>

<?php include_once './components/breadcrumb.php' ?>

<!-- Middle -->
<section>
    <div class="d-flex main-container tabs-padding mt-4">
        <div>
            <img src="./assets/images/product-details/Asset 1.png" class="product-image" alt="assets" />
        </div>

        <div class="w-full">
            <div class="product-details-area">
                <div>
                    <p class="text-bold product-title" style="border-color: #F7F8F7;">Fitzbilies Granola · 400g</p>
                </div>
                <div class="d-flex mt-2">
                    <div class="d-flex gap-2 flex-middle border w-full products-buttons">
                        <img src="./assets/images/search-results/ex.png" class="small-icons" alt="assets" />
                        <h6 class="mt-2 product-buttons-tab">Not Organic</h6>
                    </div>
                    <div class="d-flex gap-2 flex-middle border w-full products-buttons cursor-pointer">
                        <h6 class="mt-2 product-buttons-tab underline"> Fitzbilies Bakery (UK)</h6>
                    </div>
                    <div class="d-flex gap-2 flex-middle border w-full products-buttons">
                        <img src="./assets/images/product-details/Asset 15.png" class="small-icons" alt="assets" />
                        <h6 class="mt-2 product-buttons-tab">Source: UK & International</h6>
                    </div>
                </div>
                <div>
                    <p class="product-nested-titles mt-3">
                        Product Description
                    </p>
                    <p class="product-nested-description mt-1">
                        Fitzbillies Original Granola
                    </p>
                </div>
                <div>
                    <p class="product-nested-titles mt-3">
                        Ingredients
                    </p>
                    <p class="product-nested-description mt-1">
                        Rolled gluten-free oats, vine fruits (sultanas [sulphites] and currants),
                        Fitzbillies Chelsea Bun syrup, sunflower seeds, pumpkin seeds,
                        flaked almonds, vegetable oil, cinnamon and salt.
                    </p>
                </div>
                <div>
                    <p class="product-nested-titles mt-3">
                        Allergy Advice
                    </p>
                    <p class="product-nested-description mt-1">
                        Warning, may contain: Nuts, Wheat, Gluton, Egg, Dairy
                    </p>
                </div>
                <div>
                    <p class="product-nested-titles mt-3">
                        Additional Information
                    </p>
                    <p class="product-nested-description mt-1">
                        Please <a class="underline text-black "> click here to read more information </a> about this
                        product.
                    </p>
                </div>
                <div class="in-stock-button text-white flex-middle gap-2 mt-4">
                    <img src="./assets/images/product-details/Asset 13.png" style="width: 13px;" alt="assets" />
                    In stock
                </div>
                <div class="mt-4 d-flex justify-content-between px-">
                    <div class="product-price p-1"> £5.25 </div>
                    <div class="border quantity-selector">
                        <label for="quantity" class="product-nested-titles p-1"> Quantity </label>
                        <select name="quantity" id="quantity" class="border-none">
                            <option value="volvo">1</option>
                            <option value="saab">2</option>
                            <option value="mercedes">3</option>
                            <option value="audi">4</option>
                        </select>
                    </div>
                    <div>
                        <button class="add-to-order-button text-white" data-toggle="modal"
                            data-target="#findDeliveryDayModal">
                            Add to your order
                        </button>
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
                            <input type="text" class="modal-input mt-3"
                                placeholder="Enter your postcode (e.g. CB2 VEG)">
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
        </div>
    </div>
</section>

<?php include_once './components/slider.php' ?>

<?php include_once './components/footer.php' ?>