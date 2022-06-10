<html style="background-color: #f3f3f4;">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="public/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;1,200;1,400&display=swap"
        rel="stylesheet">

    <?php
        if (!class_exists('lessc')) {
            include ('public/libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('public/less/module-6.less', 'public/css/module-6.css');
        ?>
    <link href="public/css/module-6.css" rel="stylesheet" type="text/css" />

</head>
<div class="module-6">
    <div class="container">
        <div class="row">
            <h1 class="page-header__title ">Limited Time Deals</h1><br>
            <div class="col-md-4">
                <div class="card-product">
                    <div class="card-product-img">
                        <img class="card-img-top card-product-front" src="public/images/product-10-1.jpg"
                            alt="Card image cap">
                    </div>
                    <div class="product-button">
                        <div class="btn-add-to-cart mb-2">
                            <div class="btn-view-icon"><i class="fa-solid fa-unlock"></i></div>
                        </div>
                        <div class="btn-wishlist mb-2">
                            <!-- <span class="btn-wishlist-title">Wishlist</span> -->
                            <span class="btn-wishlist-icon"><i class="fa-regular fa-heart"></i></span>

                        </div>
                        <div class="btn-view mb-2">
                            <!-- <div class="btn-view-title">Quick View</div> -->
                            <div class="btn-view-icon"><i class="fa-regular fa-eye"></i></div>
                        </div>

                    </div>

                    <div class="card-content">
                        <div class="content">
                            <h2 class="card-product-name">Small Side Table</h2>
                            <p class="card-product-price">
                                <span class="old-price">&pound; 184.63</span>
                                <span class="new-price new-price-active">&pound; 14.17</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-product">
                    <div class="card-product-img">
                        <img class="card-img-top card-product-front" src="public/images/anh2.jpg" alt="Card image cap">
                    </div>
                    <div class="product-button">
                        <div class="btn-add-to-cart mb-2">
                            <div class="btn-view-icon"><i class="fa-solid fa-unlock"></i></div>
                        </div>
                        <div class="btn-wishlist mb-2">
                            <!-- <span class="btn-wishlist-title">Wishlist</span> -->
                            <span class="btn-wishlist-icon"><i class="fa-regular fa-heart"></i></span>

                        </div>
                        <div class="btn-view mb-2">
                            <!-- <div class="btn-view-title">Quick View</div> -->
                            <div class="btn-view-icon"><i class="fa-regular fa-eye"></i></div>
                        </div>

                    </div>

                    <div class="card-content">
                        <div class="content">
                            <h2 class="card-product-name">Whistler Dining Chair</h2>
                            <p class="card-product-price">
                                <span class="old-price">&pound; 184.63</span>
                                <span class="new-price new-price-active">&pound; 56.87</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-product">
                    <div class="card-product-img">
                        <img class="card-img-top card-product-front" src="public/images/anh3.jpg" alt="Card image cap">

                    </div>
                    <div class="product-bage-sales">
                        <span class="product-bage-sales_price">-88%</span>
                    </div>
                    <div class="product-button">
                        <div class="btn-add-to-cart mb-2">
                            <div class="btn-view-icon"><i class="fa-solid fa-unlock"></i></div>
                        </div>
                        <div class="btn-wishlist mb-2">
                            <!-- <span class="btn-wishlist-title">Wishlist</span> -->
                            <span class="btn-wishlist-icon"><i class="fa-regular fa-heart"></i></span>

                        </div>
                        <div class="btn-view mb-2">
                            <!-- <div class="btn-view-title">Quick View</div> -->
                            <div class="btn-view-icon"><i class="fa-regular fa-eye"></i></div>
                        </div>

                    </div>
                    <div class="card-content">
                        <div class="content">
                            <h2 class="card-product-name">Dusty Green Bar Stool</h2>
                            <p class="card-product-price">
                                <span class="old-price">&pound; 184.63</span>
                                <span class="new-price new-price-active">&pound; 56.87</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>