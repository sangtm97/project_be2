<!DOCTYPE html>
<html lang="en">
<head>
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
        $less->compileFile('public/less/module-10.less', 'public/css/module-10.css');
        ?>
    <link href="public/css/module-10.css" rel="stylesheet" type="text/css" />

</head>
</head>
<body>
    <div class="module-10">
        <div class="container">
            <div class="row py-5 px-5">
                <div class="col-md-12 text-center title-footer">
                    <h1>
                        Subscribe To Our Newsletter 
                    </h1>
                    <h6 class = "py-2">
                        Receive an exclusive 10% discount code when you signup. 
                    </h6>
                </div>
            </div>
            <div class="row text-center pt-3 pb-5 border-bottom border-2">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="row border-bottom border-1 border-dark">
                        <div class="col-md-10">
                            <input type="text" class = "input" placeholder="Enter Email">
                        </div>
                        <div class="col-md-2">
                            <div class="div ">
                                <a href="#" style="text-decoration: none ; color: #404040;">
                                    <h6 style = " font-size: 18px; text-align:right;">Subscibe</h6>
                                </a>
                            </div>
                        </div>
                    </div>   
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
        <div class="container pt-5">
            <div class="row border-bottom border-2 pt-2 pb-5">
                <div class="col-md-3 title-1">
                    <a href="#">
                        <h1>
                            <b>Razzi.</b>
                        </h1>
                    </a>
                    <div class="div pt-3">
                        <h6>
                            Razzi is more than a leading retailer of home decor and gifts. We help our customers create the backdrop for memorable life events.
                        </h6>
                    </div>
                        
                </div>
                <div class="col-md-3 title-2 pt-3">
                    <h6>ABOUT US</h6>
                    <div class="div1 pb-2 pt-3">
                        <a href="#">
                            About Us
                        </a> 
                        <div class="gachchan">

                        </div>
                    </div>
                    <div class="div1 pb-2">
                        <a href="#">
                            Careers
                        </a> 
                        <div class="gachchan">

                        </div>
                    </div>
                    <div class="div1 pb-2">
                        <a href="#">
                            Community
                        </a> 
                        <div class="gachchan">

                        </div>
                    </div>
                    <div class="div1 pb-2">
                        <a href="#">
                            News & Events
                        </a> 
                        <div class="gachchan">

                        </div>
                    </div>
                </div>
                <div class="col-md-3 pt-3 title-3">
                    <h6>CUSTOMER SERVICES</h6>
                    <div class="div1 pb-2 pt-3">
                        <a href="#">
                            Contact Us
                        </a> 
                        <div class="gachchan">

                        </div>
                    </div>
                    <div class="div1 pb-2">
                        <a href="#">
                            FAQs
                        </a> 
                        <div class="gachchan">

                        </div>
                    </div>
                    <div class="div1 pb-2">
                        <a href="#">
                            Shipping & Returns
                        </a> 
                        <div class="gachchan">

                        </div>
                    </div>
                    <div class="div1 pb-2">
                        <a href="#">
                            Product Recalls
                        </a> 
                        <div class="gachchan">

                        </div>
                    </div>
                    <div class="div1 pb-2">
                        <a href="#">
                            Store Locator
                        </a> 
                        <div class="gachchan">

                        </div>
                    </div>
                </div>
                <div class="col-md-3 pt-3">
                    <h6>CUSTOMER SERVICES</h6>
                    <div class="div pt-3"> 
                        <p>
                            Phone: 1-888-923-8044
                        </p>
                        <p>
                            Email: razzi@drfuri.com
                        </p>
                        <p>
                            Working hours from 8AM – 18AM EST
                        </p>
                        <div class="icon">
                            <a href="#">
                                <i class="fa-brands fa-facebook-f pe-4 facebook"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-twitter pe-4 twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-google pe-4 google"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-instagram pe-4 instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-youtube youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        
        <div class="container pt-4 pb-4">
            <div class="row">
                <div class="col-md-5 footer-1">
                    <h6>
                        © 2022 All rights reserved. Made with love by DrFuri
                    </h6>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-4 d-flex footer-2 ps-5">
                    <div class="div1 me-4">
                        <a href="#" class = "">
                            Terms of Use
                        </a>
                        <div class="gachchan">

                        </div>
                    </div>
                    <div class="div1 me-4">
                        <a href="#" class = "">
                            Privacy & Security
                        </a>
                        <div class="gachchan"></div>
                    </div>
                    <div class="div1 me-4">
                        <a href="#" class = "">
                        Accessibility
                        </a>
                        <div class="gachchan"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>