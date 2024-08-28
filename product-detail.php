<?php include_once './components/header.php' ?>

<!-- strip -->
<div class="red-strip flex-middle">
    <p class="strip-content"> Monthly Special:
        <span class="underline cursor-pointer "> Local honey from two Cambridgeshire producers...
        </span>
    </p>
</div>

<!-- breadcrumb -->
<div aria-label="breadcrumb" class="breadcrumb-position">
    <ol class="d-flex text-bold main-container">
        <li class="breadcrumb-item cursor-pointer"><a href="#"> Start</a></li>
        <li class="breadcrumb-item bread border-none cursor-pointer">Shop</li>
        <li class="breadcrumb-item bread border-none cursor-pointer">Groceries</li>
        <li class="breadcrumb-item bread border-none cursor-pointer"><a href="#">Breakfast Cereal & Treats</a></li>
        <li class="cursor-pointer underline breadcrumb-item bread border-none">Fitzbilies Granola · 400g</li>
    </ol>
</div>

<!-- Middle -->
<section>
    <div class="d-flex main-container tabs-padding mt-4">
        <div>
            <img src="/assets/images/product-details/Asset 1.png" class="product-image" alt="assets" />
        </div>

        <!-- mr-l-5 -->
        <div class="w-full">
            <div class="product-details-area">
                <div>
                    <p class="text-bold product-title" style="border-color: #F7F8F7;">Fitzbilies Granola · 400g</p>
                </div>
                <div class="d-flex mt-2">
                    <div class="d-flex gap-2 flex-middle border w-full products-buttons">
                        <img src="/assets/images/search-results/ex.png" class="small-icons" alt="assets" />
                        <h6 class="mt-2 product-buttons-tab">Not Organic</h6>
                    </div>
                    <div class="d-flex gap-2 flex-middle border w-full products-buttons cursor-pointer">
                        <h6 class="mt-2 product-buttons-tab underline"> Fitzbilies Bakery (UK)</h6>
                    </div>
                    <div class="d-flex gap-2 flex-middle border w-full products-buttons">
                        <img src="/assets/images/product-details/Asset 15.png" class="small-icons" alt="assets" />
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
                    <img src="/assets/images/product-details/Asset 13.png" style="width: 13px;" alt="assets" />
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

                            <img src="/assets/images/product-details/modal.png" alt="assets" />
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
                            <img src="/assets/images/product-details/modal.png" alt="assets" />
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

<!-- Slider area -->
<div class="pt-5 slider-background"
    style="background-image: url('/assets/images/product-details/Asset 5.png'); background-size: cover;">
    <div class="text-center main-container">
        <h1 class="pt-4 text-bold Additional-Items">Additional Items of Interest</h1>
        <h5 class="text-bold Based-on-your">Based on your selection, see what other products may be of interest to
            you:
        </h5>
        <div class="slider-container d-flex mt-5" style="align-items: start;">
            <div class="slider">
                <div class="slider-wrapper d-flex">
                    <div class="slide">
                        <img src="/assets/images/product-details/Asset 2.png" alt="Product 1"
                            class="slider-product-image">
                        <h3 class="product-nested-titles mt-3">Fitzbillies · Cambridge Seeded
                            Sourdough Breadrolls</h3>
                        <p class="product-price">£4.40</p>
                        <a href="/product-detail-auth.html">
                            <button class="view-button text-white mt-3">
                                View more...
                            </button>
                        </a>
                    </div>
                    <div class="slide">
                        <img src="/assets/images/product-details/Asset 3.png" alt="Product 2"
                            class="slider-product-image">
                        <h3 class="product-nested-titles mt-3">Fitzbillies · Cambridge Seeded
                            Sourdough Breadrolls</h3>
                        <p class="product-price">£4.40</p>
                        <a href="/product-detail-auth.html">
                            <button class="view-button text-white mt-3">
                                View more...
                            </button>
                        </a>
                    </div>
                    <div class="slide">
                        <img src="/assets/images/product-details/Asset 4.png" alt="Product 3"
                            class="slider-product-image">
                        <h3 class="product-nested-titles mt-3">Fitzbillies · Cambridge Seeded
                            Sourdough Breadrolls</h3>
                        <p class="product-price">£4.40</p>
                        <a href="/product-detail-auth.html">
                            <button class="view-button text-white mt-3">
                                View more...
                            </button>
                        </a>
                    </div>
                    <div class="slide">
                        <img src="/assets/images/product-details/Asset 2.png" alt="Product 1"
                            class="slider-product-image">
                        <h3 class="product-nested-titles mt-3">Fitzbillies · Cambridge Seeded
                            Sourdough Breadrolls</h3>
                        <p class="product-price">£4.40</p>
                        <a href="/product-detail-auth.html">
                            <button class="view-button text-white mt-3">
                                View more...
                            </button>
                        </a>
                    </div>
                    <div class="slide">
                        <img src="/assets/images/product-details/Asset 2.png" alt="Product 1"
                            class="slider-product-image">
                        <h3 class="product-nested-titles mt-3">Fitzbillies · Cambridge Seeded
                            Sourdough Breadrolls</h3>
                        <p class="product-price">£4.40</p>
                        <a href="/product-detail-auth.html">
                            <button class="view-button text-white mt-3">
                                View more...
                            </button>
                        </a>
                    </div>
                    <div class="slide">
                        <img src="/assets/images/product-details/Asset 2.png" alt="Product 1"
                            class="slider-product-image">
                        <h3 class="product-nested-titles mt-3">Fitzbillies · Cambridge Seeded
                            Sourdough Breadrolls</h3>
                        <p class="product-price">£4.40</p>
                        <a href="/product-detail-auth.html">
                            <button class="view-button text-white mt-3">
                                View more...
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="button-container">
                <button class="next" onclick="moveSlide(1)">
                    <img src="/assets/images/product-details/Asset 6.png" alt="Next" class="mt-3" />
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Companies -->
<div class="main-container companies-container">
    <div>
        <img src="/assets/images/search-results/Asset 7.png" class="last-images" alt="assets">
    </div>
    <div>
        <img src="/assets/images/search-results/Asset 8.png" class="last-images" alt="assets">
    </div>
    <div>
        <img src="/assets/images/search-results/Asset 9.png" class="last-images" alt="assets">
    </div>
    <div>
        <img src="/assets/images/search-results/Asset 10.png" class="last-images" alt="assets">
    </div>
    <div>
        <img src="/assets/images/search-results/Asset 11.png" class="last-images " alt="assets">
    </div>

</div>
<!-- Orange strip -->
<div class="orange-strip flex-middle">
    <p class="strip-content"> Sign Up To The Cambridge Organic Food Mailing List
    </p>
</div>

<!-- Footer -->
<footer class="footer">
    <div class="main-container text-white d-flex justify-content-between tabs-padding">
        <div>
            <p>
                © Cambridge Organic Food Company Ltd
            </p>
        </div>
        <div>
            <p>
                Registered in England #123456 | Terms & Conditions | Privacy Information | Cookie Policy
            </p>
        </div>
        <div class="d-flex gap-2 justify-content-center">
            <img src="/assets/images/search-results/Asset 12.png" class="footer-logos" alt="assets" />
            <img src="/assets/images/search-results/Asset 13.png" class="footer-logos" alt="assets" />
            <img src="/assets/images/search-results/Asset 14.png" class="footer-logos" alt="assets" />
        </div>
    </div>
</footer>

<?php include_once './components/footer.php' ?>