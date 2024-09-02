<?php include_once './components/authenticated-header.php' ?>

<?php include_once './components/red-strip.php' ?>

<?php include_once './components/breadcrumb.php' ?>

<section class="main-container">

    <h1 class="flex-middle search-results text-bold">Search Results: “Carrot”</h1>

    <div class="d-flex align-items-center border-top pt-4">
        <img class="refine-small-text-img" src="./assets/images/search-results/ex.png" alt="assets" />
        <p class="text-small refine-small-text text-w-600 m-2">Please use the filters below to refine your search
        </p>
    </div>

    <!-- Tabs -->
    <ul class="nav nav-tabs d-flex justify-content-between tabs internal-tabs-container my-4" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <div class="nav-link rounded-pill flex-middle text-black internal-tab" id="products-tab"
                data-bs-toggle="tab" data-bs-target="#products" type="button" role="tab" aria-controls="products"
                aria-selected="true">
                Products (2)
            </div>
        </li>
        <li class="nav-item" role="presentation">
            <div class="nav-link rounded-pill flex-middle text-black internal-tab" id="growers-tab" data-bs-toggle="tab"
                data-bs-target="#growers" type="button" role="tab" aria-controls="growers" aria-selected="false">
                Growers & Producers (14)
            </div>
        </li>
        <li class="nav-item" role="presentation">
            <div class="nav-link rounded-pill flex-middle text-black internal-tab" id="veg-tab" data-bs-toggle="tab"
                data-bs-target="#veg" type="button" role="tab" aria-controls="veg" aria-selected="false">
                All About Veg (6)
            </div>
        </li>
        <li class="nav-item" role="presentation">
            <div class="nav-link rounded-pill flex-middle text-black internal-tab" id="news-tab" data-bs-toggle="tab"
                data-bs-target="#news" type="button" role="tab" aria-controls="news" aria-selected="false">
                News & Info (18)
            </div>
        </li>
    </ul>

    <!-- Tabs content -->
    <div class="tab-content  pb-4 border-bottom">
        <div class="w-100 tab-pane active " id="products" role="tabpanel" aria-labelledby="products-tab">
            <div class="d-flex justify-content-between active flex-middle pt-3 text-black">
                <div class="d-flex tab-content-products">
                    <img src="./assets/images/search-results/Asset 6.png" class="product-image1" alt="assets" />
                    <div class="p-3">
                        <h5 class="text-bold tab-content-products-description"> Bunched (non-organic) Carrots </h5>
                        <h6 class="text-bold  tab-content-products-description mt-1"> One sentence of product
                            information...</h6>
                        <h3 class="text-bold tab-content-products-description p-3"> £2.25 </h3>
                        <a href="product-detail.php">
                            <button class="view-product ">
                                View Product
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-100 tab-pane " id="growers" role="tabpanel" aria-labelledby="growers-tab">
            <div class="d-flex justify-content-between  flex-middle pt-3 text-black">
                <div class="d-grid gap-3">
                    <div class="d-flex tab-content-products">
                        <img src="./assets/images/search-results/Asset 6.png" class="product-image1" alt="assets" />
                        <div class="p-3">
                            <h5 class="text-bold tab-content-products-description"> Bunched (non-organic) Carrots
                            </h5>
                            <h6 class="text-bold  tab-content-products-description mt-1"> One sentence of product
                                information...</h6>
                            <h3 class="text-bold tab-content-products-description p-3"> £2.25 </h3>
                            <a href="product-detail.php">
                                <button class="view-product ">
                                    View Product
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex tab-content-products">
                        <img src="./assets/images/search-results/Asset 6.png" class="product-image1" alt="assets" />
                        <div class="p-3">
                            <h5 class="text-bold tab-content-products-description"> Bunched (non-organic) Carrots
                            </h5>
                            <h6 class="text-bold  tab-content-products-description mt-1"> One sentence of product
                                information...</h6>
                            <h3 class="text-bold tab-content-products-description p-3"> £2.25 </h3>
                            <a href="product-detail.php">
                                <a href="product-detail.php"><button class="view-product ">
                                        View Product
                                    </button>
                                </a></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-100 tab-pane" id="veg" role="tabpanel" aria-labelledby="veg-tab">
            <div class="d-flex justify-content-between  flex-middle pt-3 text-black">
                <div class="d-grid gap-3">
                    <div class="d-flex tab-content-products">
                        <img src="./assets/images/search-results/Asset 6.png" class="product-image1" alt="assets" />
                        <div class="p-3">
                            <h5 class="text-bold tab-content-products-description"> Bunched (non-organic) Carrots
                            </h5>
                            <h6 class="text-bold  tab-content-products-description mt-1"> One sentence of product
                                information...</h6>
                            <h3 class="text-bold tab-content-products-description p-3"> £2.25 </h3>
                            <a href="product-detail.php">
                                <button class="view-product ">
                                    View Product
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex tab-content-products">
                        <img src="./assets/images/search-results/Asset 6.png" class="product-image1" alt="assets" />
                        <div class="p-3">
                            <h5 class="text-bold tab-content-products-description"> Bunched (non-organic) Carrots
                            </h5>
                            <h6 class="text-bold  tab-content-products-description mt-1"> One sentence of product
                                information...</h6>
                            <h3 class="text-bold tab-content-products-description p-3"> £2.25 </h3>
                            <a href="product-detail.php">
                                <button class="view-product ">
                                    View Product
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex tab-content-products">
                        <img src="./assets/images/search-results/Asset 6.png" class="product-image1" alt="assets" />
                        <div class="p-3">
                            <h5 class="text-bold tab-content-products-description"> Bunched (non-organic) Carrots
                            </h5>
                            <h6 class="text-bold  tab-content-products-description mt-1"> One sentence of product
                                information...</h6>
                            <h3 class="text-bold tab-content-products-description p-3"> £2.25 </h3>
                            <a href="product-detail.php">
                                <button class="view-product ">
                                    View Product
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex tab-content-products">
                        <img src="./assets/images/search-results/Asset 6.png" class="product-image1" alt="assets" />
                        <div class="p-3">
                            <h5 class="text-bold tab-content-products-description"> Bunched (non-organic) Carrots
                            </h5>
                            <h6 class="text-bold  tab-content-products-description mt-1"> One sentence of product
                                information...</h6>
                            <h3 class="text-bold tab-content-products-description p-3"> £2.25 </h3>
                            <a href="product-detail.php">
                                <button class="view-product ">
                                    View Product
                                </button>
                            </a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="w-100 tab-pane " id="news" role="tabpanel" aria-labelledby="news-tab">
            <div class="d-flex justify-content-between  flex-middle pt-3 text-black">

                <div class="d-grid gap-3">
                    <div class="d-flex tab-content-products">
                        <img src="./assets/images/search-results/Asset 6.png" class="product-image1" alt="assets" />
                        <div class="p-3">
                            <h5 class="text-bold tab-content-products-description"> Bunched (non-organic) Carrots
                            </h5>
                            <h6 class="text-bold  tab-content-products-description mt-1"> One sentence of product
                                information...</h6>
                            <h3 class="text-bold tab-content-products-description p-3"> £2.25 </h3>
                            <a href="product-detail.php">
                                <button class="view-product ">
                                    View Product
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex tab-content-products">
                        <img src="./assets/images/search-results/Asset 6.png" class="product-image1" alt="assets" />
                        <div class="p-3">
                            <h5 class="text-bold tab-content-products-description"> Bunched (non-organic) Carrots
                            </h5>
                            <h6 class="text-bold  tab-content-products-description mt-1"> One sentence of product
                                information...</h6>
                            <h3 class="text-bold tab-content-products-description p-3"> £2.25 </h3>
                            <a href="product-detail.php">
                                <button class="view-product ">
                                    View Product
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex tab-content-products">
                        <img src="./assets/images/search-results/Asset 6.png" class="product-image1" alt="assets" />
                        <div class="p-3">
                            <h5 class="text-bold tab-content-products-description"> Bunched (non-organic) Carrots
                            </h5>
                            <h6 class="text-bold  tab-content-products-description mt-1"> One sentence of product
                                information...</h6>
                            <h3 class="text-bold tab-content-products-description p-3"> £2.25 </h3>
                            <a href="product-detail.php">
                                <button class="view-product ">
                                    View Product
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<?php include_once './components/footer.php' ?>