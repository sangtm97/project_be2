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
$less->compileFile('public/less/module-18.less', 'public/css/module-18.css');
?>
    <link href="public/css/module-18.css" rel="stylesheet" type="text/css" />

</head>

<body>
    <div class="module-18">
        <div class="container">
            <div class="page-header-title">
                <h1 class="text-center">Wishlist</h1>
            </div>
            <div class="site-content" id="content">
                <div class="title-content">
                    <h2>My Wishlist</h2>
                </div>
                <!-- table -->
                <table class="table table-borderless">
                    <thead class="table-light">
                        <tr>
                            <th scope="col" class="product-remove"></th>
                            <th scope="col" class="product-thumbnail"></th>
                            <th scope="col" class="product-name">Product name</th>
                            <th scope="col" class="product-price">Unit price</th>
                            <th scope="col" class="product-stock-status">Stock status</th>
                            <th scope="col" class="product-add-to-cart"></th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        <tr id="" data-row-id="">
                            <td class="product-remove">
                                <div>
                                    <a href="" class="remove remove_from_wishlist" title="Remove this product">×</a>
                                </div>
                            </td>
                            <td class="product-thumbnail">
                                <a href="">
                                    <img width="100" height="100" src="./public/images/fur0001.jpg" alt=""> </a>
                            </td>
                            <td class="product-name">
                                <a href="">
                                    Adagio Nightstand </a>
                            </td>
                            <td class="product-price">
                                <span class="woocs_price_code" data-product-id="6831"><span
                                        class="woocommerce-Price-amount amount"><span
                                            class="woocommerce-Price-currencySymbol">£</span>&nbsp;36.85</span></span>
                            </td>
                            <td class="product-stock-status">
                                <span class="wishlist-in-stock">In Stock</span>
                            </td>
                            <td class="product-add-to-cart">


                                <a href="" data-quantity="1"
                                    class="product_type_simple add_to_cart_button ajax_add_to_cart add_to_cart alt rz-loop_button rz-loop_atc_button"
                                    data-product_id="6831" data-product_sku="Q4TTYHTJY0"
                                    aria-label="Add “Adagio Nightstand” to your cart" rel="nofollow"
                                    data-text="Add to cart" data-title="Adagio Nightstand"><span
                                        class="razzi-svg-icon icon-cart"><svg aria-hidden="true" role="img"
                                            focusable="false" width="24" height="24" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M21.9353 20.0337L20.7493 8.51772C20.7003 8.0402 20.2981 7.67725 19.8181 7.67725H4.21338C3.73464 7.67725 3.33264 8.03898 3.28239 8.51523L2.06458 20.0368C1.96408 21.0424 2.29928 22.0529 2.98399 22.8097C3.66874 23.566 4.63999 24.0001 5.64897 24.0001H18.3827C19.387 24.0001 20.3492 23.5747 21.0214 22.8322C21.7031 22.081 22.0361 21.0623 21.9353 20.0337ZM19.6348 21.5748C19.3115 21.9312 18.8668 22.1275 18.3827 22.1275H5.6493C5.16836 22.1275 4.70303 21.9181 4.37252 21.553C4.042 21.1878 3.88005 20.7031 3.92749 20.2284L5.056 9.55014H18.9732L20.0724 20.2216C20.1223 20.7281 19.9666 21.2087 19.6348 21.5748Z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M12.1717 0C9.21181 0 6.80365 2.40811 6.80365 5.36803V8.6138H8.67622V5.36803C8.67622 3.44053 10.2442 1.87256 12.1717 1.87256C14.0992 1.87256 15.6674 3.44053 15.6674 5.36803V8.6138H17.5397V5.36803C17.5397 2.40811 15.1316 0 12.1717 0Z"
                                                fill="currentColor"></path>
                                        </svg></span><span class="add-to-cart-text loop_button-text">Add to
                                        cart</span></a>


                            </td>
                        </tr>
                        <!-- <tr>
                        <th scope="row">1</th>
                        <td></td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td></td>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td></td>
                        <td colspan="1">Larry the Bird</td>
                        <td></td>
                        <td>@twitter</td>
                        <td></td>
                    </tr> -->
                    </tbody>
                </table>
            </div>
        </div>


    </div>
</body>

</html>