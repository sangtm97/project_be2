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
        $less->compileFile('public/less/module-2.less', 'public/css/module-2.css');
        ?>
    <link href="public/css/module-2.css" rel="stylesheet" type="text/css" />

</head>
<div class="module-2">
    <div class="container-fliud">
        <div class="slides">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" style="width:100%">
                    <div class="carousel-item active">
                        <div class="heading">
                            <div class="title">
                                <h1>Comfort and <br>Connection</h1>
                            </div>
                            <div class="description">
                                <p>The recliner has gotten a stylish makeover. <br>The newest styles feature clean lines
                                    &amp; sophisticated fabrics</p>
                            </div>
                            <div class="razzi-slide-button"><a
                                    href="https://demo4.drfuri.com/razzi9/product/pollock-executive-chair/"
                                    class="button-link"><span class="button-text razzi-button">Shop Now </span></a>
                            </div>
                        </div>
                        <img src="./public/images/Home-v13-Slide-1.png" class="d-block w-100" style="width:100%"
                            alt="...">

                    </div>
                    <div class="carousel-item">
                        <div class="heading">
                            <div class="title">
                                <h1>New Season <br>
                                    New Mood</h1>
                            </div>
                            <div class="description">
                                <p>Illuminate the inside and outside of your home with <br>our selection of Lighting
                                    solutions</p>
                            </div>
                            <div class="razzi-slide-button"><a
                                    href="https://demo4.drfuri.com/razzi9/product/pollock-executive-chair/"
                                    class="button-link"><span class="button-text razzi-button">Shop Now </span></a>
                            </div>
                        </div>
                        <img src="./public/images/Home-v13-Slide-2.png" class="d-block w-100" style="width:100%"
                            alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>