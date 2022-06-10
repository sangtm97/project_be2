<html style="background-color: #f3f3f4;">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;1,170;1,400&display=swap"
        rel="stylesheet">

    <?php
if (!class_exists('lessc')) {
    include './public/libs/lessc.inc.php';
}
$less = new lessc;
$less->compileFile('public/less/module-17.less', 'public/css/module-17.css');
?>
    <link href="public/css/module-17.css" rel="stylesheet" type="text/css" />

</head>

<body>
    <div class="module-17">


        <!-- modal quick view -->
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#quickViewModal">
            Launch demo modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="quickViewModal" tabindex="-1" aria-labelledby="quickViewModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5">
                                    <img src="./public/images/fur0001.jpg" class="img-fluid ">
                                    <a href="" class="product-more-info">
                                        <span class="product-more-info__text">More Product Info</span>
                                        <span class="svg-icon "><svg aria-hidden="true" role="img" focusable="false"
                                                xmlns="http://www.w3.org/1700/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="12" y1="16" x2="12" y2="12"></line>
                                                <line x1="12" y1="8" x2="12.01" y2="8"></line>
                                            </svg></span>
                                    </a>
                                </div>
                                <div class="col-md-7">
                                    <div class="rating">
                                        <span class="max-rating rating-stars"><span class="svg-icon "><svg
                                                    aria-hidden="true" role="img" focusable="false"
                                                    xmlns="http://www.w3.org/1700/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="currentColor">
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                    </polygon>
                                                </svg></span><span class="svg-icon "><svg aria-hidden="true" role="img"
                                                    focusable="false" xmlns="http://www.w3.org/1700/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="currentColor">
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                    </polygon>
                                                </svg></span><span class="svg-icon "><svg aria-hidden="true" role="img"
                                                    focusable="false" xmlns="http://www.w3.org/1700/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="currentColor">
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                    </polygon>
                                                </svg></span><span class="svg-icon "><svg aria-hidden="true" role="img"
                                                    focusable="false" xmlns="http://www.w3.org/1700/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="currentColor">
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                    </polygon>
                                                </svg></span><span class="svg-icon "><svg aria-hidden="true" role="img"
                                                    focusable="false" xmlns="http://www.w3.org/1700/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="currentColor">
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                    </polygon>
                                                </svg></span></span>
                                        <a href="#reviews" class="review-link" style="color: #111;"
                                            rel="nofollow">Review (<span class="count">1</span>)</a>
                                    </div>
                                    <h1 class="product-title">Adagio Nightstand</h1>
                                    <div class="summary-price-box">
                                        <p class="price"><span class="price_code" data-product-id="6831"><span
                                                    class="Price-amount amount"><bdi><span
                                                            class="Price-currencySymbol">£</span>&nbsp;36.85
                                                        (In stock)</bdi>

                                                </span>

                                            </span>
                                        </p>

                                    </div>
                                    <div class="product-details__short-description">
                                        <p>Designed for simplicity and made from high quality materials. Its sleek
                                            geometry
                                            and material combinations creates a modern look.</p>
                                    </div>
                                    <form class="cart" action="" method="post" enctype="multipart/form-data">

                                        <div class="free-shipping-bar">
                                            <div class="free-shipping-bar__message">
                                                You are missing <strong><span class="Price-amount amount"><bdi><span
                                                                class="Price-currencySymbol">£</span>&nbsp;170.00</bdi></span></strong>
                                                to get <strong>free shipping!</strong> </div><br>
                                            <div class="progress">
                                                <div class="progress-bar w-25 progress-bar-striped progress-bar-animated"
                                                    style="width:25%">
                                                </div>

                                            </div>
                                            <div class="percent-value text-end">25%</div>

                                        </div>
                                        <div class="product-button-wrapper"><input class="product_id" type="hidden"
                                                data-title="" value="">
                                            <div class="quantity">
                                                <!--  -->
                                                <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                    <button type="button" class="btn btn-outline-none">-</button>
                                                    <button type="text" class="btn btn-outline-none">
                                                        <input type="number" id="" class="qty text" step="1" min="1"
                                                            max="17" name="quantity" value="1" title="Qty" size="4"
                                                            placeholder="" inputmode="numeric"></button>
                                                    <button type="button" class="btn btn-outline-none">+</button>
                                                </div>
                                                <!--  -->
                                                <button type="submit" name="add-to-cart" value="6831"
                                                    class="add_to_cart_button button alt">
                                                    Add to cart </button>

                                                <button type="submit" class="buy-now-button button button-outline">Buy
                                                    Now</button>
                                                <a href="?add_to_wishlist=6831" rel="nofollow" data-product-id="6831"
                                                    data-product-type="simple" data-original-product-id="6831"
                                                    class="loop_button add_to_wishlist single_add_to_wishlist"
                                                    data-title="Wishlist" data-text="Wishlist"
                                                    data-product-title="Adagio Nightstand">
                                                    <span class="svg-icon "><svg aria-hidden="true" role="img"
                                                            focusable="false" xmlns="http://www.w3.org/1700/svg"
                                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path
                                                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                                            </path>
                                                        </svg></span> <span class="loop_button-text">Wishlist</span>
                                                </a>

                                            </div>
                                        </div>
                                    </form>
                                    <div class="product_meta">


                                        <span class="sku_wrapper"><span class="label">SKU: </span><span
                                                class="sku">Q4TTYHTJY0</span></span><br>




                                        <span class="posted_in"><span class="label">Categories: </span>
                                            <a href="" rel="tag">Furniture</a>,
                                            <a href="" rel="tag">Outdoor</a>,
                                            <a href="" rel="tag">Sofas</a></span><br>


                                        <span class="tagged_as"><span class="label">Tags: </span>
                                            <a href="" rel="tag">Accessories</a>,
                                            <a href="" rel="tag">Arm Chairs</a>,
                                            <a href="" rel="tag">Vintage</a></span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


</body>

</html>