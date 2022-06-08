

<html style="background-color: #f3f3f4;">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;1,200;1,400&display=swap" rel="stylesheet">

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/module-3.less', 'css/module-3.css');
        ?>
        <link href="css/module-3.css" rel="stylesheet" type="text/css" />

    </head>
    <div class="module-2">
        <div class="container mt-4 mb-10">
            <div class="row">
                <div class="col-md-6">
                    <div class="banner">
                        <img src="images/banner-1.jpg" alt="">
                        <div class="banner-content">
                            <h4 class="banner-title">
                                Small Space Dining <br>
                                Room Furniture
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="banner">
                        <img src="images/banner-2.jpg" alt="">
                        <div class="banner-content">
                            <h4 class="banner-title">
                                Living Room Sets <br>
                                And Collections
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</html>