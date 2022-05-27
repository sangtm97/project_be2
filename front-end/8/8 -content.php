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
        $less->compileFile('public/less/module-8.less', 'public/css/module-8.css');
        ?>
    <link href="public/css/module-8.css" rel="stylesheet" type="text/css" />

</head>
<div class="module-8">
    <div class="container mt-4 mb-10">
        <div class="row">
            <div class="col-md-6">
                <div class="banner">
                    <img src="public/images/banner_1.jpg" alt="">
                    <div class="banner-content banner-position-left">
                        <div class="banner-content-inner__left">
                            <h4 class="banner-content__title">
                                Put Your Feet Up
                            </h4>
                            <div class="banner-content__description">
                                Unwind with stylish sofas that look <br>
                                as good as they feel
                            </div>
                            <div class="banner-button-group">
                                Shop Sofas
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="banner">
                    <img src="public/images/banner_2.jpg" alt="">
                    <div class="banner-content banner-position-right">
                        <div class="banner-content-inner__right">
                            <h4 class="banner-content__title">
                                Dine In Comfort
                            </h4>
                            <div class="banner-content__description">
                                Find the perfect table and chairs <br>
                                to suit your space
                            </div>
                            <div class="banner-button-group">
                                Shop Dinning Room
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</html>