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
        $less->compileFile('public/less/module-9.less', 'public/css/module-9.css');
        ?>
    <link href="public/css/module-9.css" rel="stylesheet" type="text/css" />

</head>
<div class="module-9">
    <div class="container-fluid">
        </div>
        <div class="row-module-9">
            <h1 class="page-header__title ">Trending Now</h1>
            <div class="fex">
                <div class="card-product ">
                    <div class="card-product-img">
                        <img class="card-img-top card-product-front" src="public/images/home13-trending-1.png"
                            alt="Card image cap">
                        <div class="trending1">
                            <p class="trending">#vintage</p>
                            <p>11 products</p>
                        </div>
                    </div>
                </div>
                <div class="card-product ">
                    <div class="card-product-img">
                        <img class="card-img-top card-product-front" src="public/images/home13-trending-2.png"
                            alt="Card image cap">
                            <div class="trending1">
                            <p class="trending">#pack</p>
                            <p>9 products</p>
                        </div>
                    </div>
                </div>
                <div class="card-product ">
                    <div class="card-product-img">
                        <img class="card-img-top card-product-front" src="public/images/home13-trending-3.png"
                            alt="Card image cap">
                            <div class="trending1">
                            <p class="trending">#wood</p>
                            <p>10 products</p>
                        </div>
                    </div>
                </div>
                <div class="card-product ">
                    <div class="card-product-img">
                        <img class="card-img-top card-product-front" src="public/images/home13-trending-4.png"
                            alt="Card image cap">
                            <div class="trending1">
                            <p class="trending">#colors</p>
                            <p>4 products</p>
                        </div>
                    </div>
                </div>
                <div class="card-product ">
                    <div class="card-product-img">
                        <img class="card-img-top card-product-front" src="public/images/home13-trending-5.png"
                            alt="Card image cap">
                            <div class="trending1">
                            <p class="trending">#arts</p>
                            <p>3 products</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>