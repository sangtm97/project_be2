<!DOCTYPE html>
<html lang="en">
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
        <link rel="stylesheet" href="./public/font-awesome/fontawesome-free-6.1.1/css/all.css">
    <?php
        if (!class_exists('lessc')) {
            include ('public/libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('public/less/module-16.less', 'public/css/module-16.css');
        ?>
    <link href="public/css/module-16.css" rel="stylesheet" type="text/css" />

</head>
<body>
    <div class="module-16">
    <div class="header">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-12">
                    <h3>Related Products</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-center product">
                    <a href="#" class = "img-related">
                        <img src="./public/images/fur1501.jpg" class="img-fluid img1" alt="">
                        <img src="./public/images/fur1502.jpg" class="img-fluid img2" alt="">
                        <div class="content-an1">
                        <i class="fa-solid fa-shield-heart"></i>
                        </div>
                        <div class="content-an2">
                            <i class="fa-solid fa-eye"></i>
                                
                        </div>
                        <div class="add">
                            <i class="fa-solid fa-lock"></i>
                            Add to card
                        </div>
                    </a>
                    <div class="div pt-3">
                        <a href="#">
                            <h6>
                                Urchin Sculpture Small
                            </h6>
                        </a>
                        <p>$320.00</p>
                    </div>
                </div>
                <div class="col-md-3 text-center product">
                    <a href="#" class = "img-related">
                        <img src="./public/images/fur5001.jpg" class="img-fluid img1" alt="">
                        <img src="./public/images/fur5002.jpg" class="img-fluid img2" alt="">
                        <div class="content-an1">
                        <i class="fa-solid fa-shield-heart"></i>
                        </div>
                        <div class="content-an2">
                            <i class="fa-solid fa-eye"></i>
                                
                        </div>
                        <div class="add">
                            <i class="fa-solid fa-lock"></i>
                            Add to card
                        </div>
                    </a>
                    <div class="div pt-3">
                        <a href="#">
                            <h6>
                                Whistler Dining Chair
                            </h6>
                        </a>
                        <p>$77.00</p>
                    </div>
                </div>
                <div class="col-md-3 text-center product">
                    <a href="#" class = "img-related">
                        <img src="./public/images/fur1001.jpg" class="img-fluid img1" alt="">
                        <img src="./public/images/fur1002.jpg" class="img-fluid img2" alt="">
                        <div class="content-an1">
                        <i class="fa-solid fa-shield-heart"></i>
                        </div>
                        <div class="banggia1">
                            HOT
                        </div>
                        <div class="banggia2">
                            -8%
                        </div>
                        <div class="content-an2">
                            <i class="fa-solid fa-eye"></i>
                                
                        </div>
                        <div class="add">
                            <i class="fa-solid fa-lock"></i>
                            Add to card
                        </div>
                    </a>
                    <div class="div pt-3 ">
                        <a href="#">
                            <h6>
                                Emma Wooden Leg Armchair
                            </h6>
                        </a>
                        <div class="div d-inline-flex">
                        <s id = "s">$49.00</s>
                        <p class = "ps-2" id = "p1">$45.00</p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-3 text-center product">
                    <a href="#" class = "img-related">

                        <img src="./public/images/fur3001.jpg" class="img-fluid img2" alt="">
                        <div class="content-an1">
                        <i class="fa-solid fa-shield-heart"></i>
                        </div>
                        <div class="banggia1">
                            HOT
                        </div>
                        <div class="content-an2">
                            <i class="fa-solid fa-eye"></i>
                                
                        </div>
                        <div class="add-2">
                            <i class="fa-solid fa-lock"></i>
                            Select Option
                        </div>
                    </a>
                    <div class="div pt-3 ">
                        <a href="#">
                            <h6>
                                Light Rattan Laundry Basket
                            </h6>
                        </a>
                        <p class = "ps-2" >$88.62</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    
</body>
</html>