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
        $less->compileFile('public/less/module-5.less', 'public/css/module-5.css');
        ?>
    <link href="public/css/module-5.css" rel="stylesheet" type="text/css" />

</head>
<div class="module-5">
    <div class="container">
        <div class="image">
        <h3>Small Space Dining <br>
                 Room Furniture</h3>
            <img src="./public/images/home13-banner-3.webp" alt="">
           
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card-product">
                    <div class="card-product-img">
                        <img class="card-img-top card-product-front" src="public/images/home13-categories-1.webp">
                    </div>
                    <div class="category-content">
                        <h4 class="title">Living Room</h4>
                        <a href="">Sectionals</a>
                        <span class="muiten"><svg aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="0" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></span><br>
                        <a href="">Sofas</a>
                        <span class="muiten"><svg aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="0" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></span><br>
                        <a href="">Arm Chairs</a>
                        <span class="muiten"><svg aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="0" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></span><br>
                        <a href="">Coffee Tables</a>
                        <span class="muiten"><svg aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="0" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></span><br>
                        <a href="">TV Stands</a>
                        <span class="muiten"><svg aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="0" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></span><br>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-product2">
                    <div class="card-product-img">
                        <img class="card-img-top card-product-front" src="public/images/home13-categories-2.webp">
                    </div>
                    <div class="category-content">
                    <h4 class="title">Kitchen</h4>
                        <a href="">Bar Tables & Sets</a>
                        <span class="muiten"><svg aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="0" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></span><br>
                        <a href="">Kitchen Cabinets</a>
                        <span class="muiten"><svg aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="0" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></span><br>
                        <a href="">Dining Tables </a>
                        <span class="muiten"><svg aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="0" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></span><br>
                        <a href="">Dining Chairs </a>
                        <span class="muiten"><svg aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="0" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></span><br>
                        <a href="">Folding Tables </a>
                        <span class="muiten"><svg aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="0" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></span><br>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="card-product3">
                    <div class="card-product-img">
                        <img class="card-img-top card-product-front" src="public/images/home13-categories-3.webp">
                    </div>
                    <div class="category-content">
                        <h4 class="title">Bedroom</h4><br>
                        <div class="category-item">
                        <a href="">Dressers </a>
                        <span class="muiten"><svg aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="0" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></span><br>
                        </div>
                        <a href="">Nightstands</a>
                        <span class="muiten"><svg aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="0" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></span><br>
                        <a href="">Beds</a>
                        <span class="muiten"><svg aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="0" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></span><br>
                        <a href="">Bed Frames</a>
                        <span class="muiten"><svg aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="0" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></span><br>
                        <a href="">Headboards</a>
                        <span class="muiten"><svg aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="0" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></span><br>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-product4">
                    <div class="card-product-img">
                        <img class="card-img-top card-product-front" src="public/images/home13-categories-4.webp">
                    </div>
                    <div class="category-content">
                    <h4 class="title">Home Office</h4><br>
                        <a href="">Desks</a>
                        <span class="muiten"><svg aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="0" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></span><br>
                        <a href="">Bookshelves</a>
                        <span class="muiten"><svg aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="0" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></span><br>
                        <a href="">Office Chairs </a>
                        <span class="muiten"><svg aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="0" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></span><br>
                        <a href="">Filing Cabinets</a>
                        <span class="muiten"><svg aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="0" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></span><br>
                        <a href="">Bookcases</a>
                        <span class="muiten"><svg aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="0" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></span><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>