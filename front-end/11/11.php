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
        $less->compileFile('public/less/module-11.less', 'public/css/module-11.css');
        ?>
    <link href="public/css/module-11.css" rel="stylesheet" type="text/css" />

</head>

<body>
    <div class="module-11">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                HOME
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <div class="row">
                                    <div class="col-md-6">
                                        <li><a class="dropdown-item" href="#">Home v1 - Minimal</a></li>
                                        <li><a class="dropdown-item" href="#">Home v2 - Classic</a></li>
                                        <li><a class="dropdown-item" href="#">Home v3 - Fashion</a></li>
                                        <li><a class="dropdown-item" href="#">Home v4 - Boxes</a></li>
                                        <li><a class="dropdown-item" href="#">Home v5 - Simple</a></li>
                                        <li><a class="dropdown-item" href="#">Home v6 - Asymmetric</a></li>
                                        <li><a class="dropdown-item" href="#">Home v7 - Masonry</a></li>
                                        <li><a class="dropdown-item" href="#">Home v8 - Lading</a></li>
                                        <li><a class="dropdown-item" href="#">Home v9 - Fashion</a></li>
                                        <li><a class="dropdown-item" href="#">Home v10 - Cases</a></li>
                                        <li><a class="dropdown-item" href="#">Home v11 - Furniture</a></li>
                                        <li><a class="dropdown-item" href="#">Home 12 - Furniture</a></li>
                                        <li><a class="dropdown-item" href="#">Home v13 - Furniture</a></li>
                                        <li><a class="dropdown-item" href="#">Home v14 - Furniture</a></li>
                                        <li><a class="dropdown-item" href="#">Home v15 - Furniture</a></li>
                                        <li><a class="dropdown-item" href="#">Home v16 - Instagram</a></li>
                                    </div>
                                    <div class="col-md-6">
                                        <li><a class="dropdown-item" href="#">Home v17 - Interior Decor</a></li>
                                        <li><a class="dropdown-item" href="#">Home v18 - Food Store</a></li>
                                        <li><a class="dropdown-item" href="#">Home v19 - Electronics</a></li>
                                        <li><a class="dropdown-item" href="#">Home v20 - Parallax</a></li>
                                        <li><a class="dropdown-item" href="#">Home v21 - Cosmertics</a></li>
                                        <li><a class="dropdown-item" href="#">Home v22 - Full width</a></li>
                                        <li><a class="dropdown-item" href="#">Home v23 - Jewelry</a></li>
                                        <li><a class="dropdown-item" href="#">Home v24 - Baby</a></li>
                                        <li><a class="dropdown-item" href="#">Home v25 - Furniture</a></li>
                                        <li><a class="dropdown-item" href="#">Home v26 - Pharmacy</a></li>
                                        <li><a class="dropdown-item" href="#">Home 27 - Tool</a></li>
                                        <li><a class="dropdown-item" href="#">Home v28 - Nails</a></li>
                                        <li><a class="dropdown-item" href="#">Home v29 - Fashion Sport</a></li>
                                        <li><a class="dropdown-item" href="#">Home v30 - Books</a></li>
                                        <li><a class="dropdown-item" href="#">Home v31 - Grocery</a></li>
                                    </div>
                                </div>

                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                STORE
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <div class="row">
                                    <div class="col-md-3">
                                        <li><a class="dropdown-item-tile" href="#">Shop Layout</a></li>
                                        <li><a class="dropdown-item" href="#">Default</a></li>
                                        <li><a class="dropdown-item" href="#">Topbar</a></li>
                                        <li><a class="dropdown-item" href="#">Collapse</a></li>
                                        <li><a class="dropdown-item" href="#">Modal</a></li>
                                        <li><a class="dropdown-item" href="#">Masonry</a></li>
                                        <li><a class="dropdown-item" href="#">Columns 3</a></li>
                                        <li><a class="dropdown-item" href="#">Columns 4</a></li>
                                        <li><a class="dropdown-item" href="#">Columns 5</a></li>

                                        <li><a class="dropdown-item-tile" href="#">Product Layout</a></li>
                                        <li><a class="dropdown-item" href="#">Default</a></li>
                                        <li><a class="dropdown-item" href="#">Images Left</a></li>
                                        <li><a class="dropdown-item" href="#">Images Grid</a></li>
                                        <li><a class="dropdown-item" href="#">Image Slider</a></li>
                                        <li><a class="dropdown-item" href="#">Images Stacked</a></li>
                                    </div>
                                    <div class="col-md-3">
                                        <li><a class="dropdown-item-tile" href="#">Product Type</a></li>
                                        <li><a class="dropdown-item" href="#">Simple</a></li>
                                        <li><a class="dropdown-item" href="#">Color Swatches</a></li>
                                        <li><a class="dropdown-item" href="#">Image Swatches</a></li>
                                        <li><a class="dropdown-item" href="#">Coundown</a></li>
                                        <li><a class="dropdown-item" href="#">Affiliate</a></li>
                                        <li><a class="dropdown-item" href="#">Groupped</a></li>
                                        <li><a class="dropdown-item" href="#">Product Video</a></li>
                                        <li><a class="dropdown-item" href="#">Variation Images</a></li>

                                        <li><a class="dropdown-item-tile" href="#">Product Pages</a></li>
                                        <li><a class="dropdown-item" href="#">New</a></li>
                                        <li><a class="dropdown-item" href="#">Sale</a></li>
                                        <li><a class="dropdown-item" href="#">Best Rating</a></li>
                                        <li><a class="dropdown-item" href="#">Featured</a></li>
                                        <li><a class="dropdown-item" href="#">Best Selling</a></li>
                                    </div>
                                    <div class="col-md-3">
                                        <li><a class="dropdown-item-tile" href="#">Product Card</a></li>
                                        <li><a class="dropdown-item" href="#">Icons over thumbnail</a></li>
                                        <li><a class="dropdown-item" href="#">Quick view button</a></li>
                                        <li><a class="dropdown-item" href="#">Add to cart button</a></li>
                                        <li><a class="dropdown-item" href="#">Icons on the bottom</a></li>
                                        <li><a class="dropdown-item" href="#">Simple</a></li>
                                        <li><a class="dropdown-item" href="#">Standard button</a></li>
                                        <li><a class="dropdown-item" href="#">Info on hover</a></li>
                                        <li><a class="dropdown-item" href="#">Add to cart text</a></li>
                                        <li><a class="dropdown-item" href="#">Quick Shop button</a></li>

                                        <li><a class="dropdown-item-tile" href="#">Woo Pages</a></li>
                                        <li><a class="dropdown-item" href="#">Cart</a></li>
                                        <li><a class="dropdown-item" href="#">Checkout</a></li>
                                        <li><a class="dropdown-item" href="#">Wishlist</a></li>
                                        <li><a class="dropdown-item" href="#">My account</a></li>
                                    </div>
                                    <div class="col-md-3">
                                        <li><a class="dropdown-item-tile" href="#">Product Hover</a></li>
                                        <li><a class="dropdown-item" href="#">Classic</a></li>
                                        <li><a class="dropdown-item" href="#">Slider</a></li>
                                        <li><a class="dropdown-item" href="#">Fadein</a></li>
                                        <li><a class="dropdown-item" href="#">Zoom</a></li>

                                        <li><a class="dropdown-item-tile" href="#">Added To Cart</a></li>
                                        <li><a class="dropdown-item" href="#">None</a></li>
                                        <li><a class="dropdown-item" href="#">Simple</a></li>
                                        <li><a class="dropdown-item" href="#">Popup</a></li>
                                        <li><a class="dropdown-item" href="#">Panel</a></li>

                                        <li><a class="dropdown-item-tile" href="#">Product Features</a></li>
                                        <li><a class="dropdown-item" href="#">Buy Now</a></li>
                                        <li><a class="dropdown-item" href="#">Sticky Add v1</a></li>
                                        <li><a class="dropdown-item" href="#">Sticky Add v2</a></li>
                                    </div>
                                </div>

                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                BLOG
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Blog Grid 2 Columns</a></li>
                                <li><a class="dropdown-item" href="#">Blog Grid 3 columns</a></li>
                                <li><a class="dropdown-item" href="#">Single Post</a></li>

                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                CONTACT
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">About Us</a></li>
                                <li><a class="dropdown-item" href="#">FAQs</a></li>
                                <li><a class="dropdown-item" href="#">Shipping & Returns</a></li>
                                <li><a class="dropdown-item" href="#">Store Locator</a></li>
                                <li><a class="dropdown-item" href="#">Contact Us</a></li>
                                <li><a class="dropdown-item" href="#">404 Page</a></li>
                                <li><a class="dropdown-item" href="#">Coming Soon</a></li>

                            </ul>
                        </li>
                        <div class="Tile">
                            <H1> Razzi.</H1>

                        </div>
                        
                    </ul>
                    <div class="icon">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <i class="fa-regular fa-user"></i>
                            <i class="fa-regular fa-heart"></i>
                            <i class="fa-solid fa-cart-arrow-down"></i>
                        </div>

                </div>
            </div>
        </nav>
    </div>
</body>

</html>