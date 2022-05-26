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
    <div class="slider">
        <div class="slides">
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">

            <div class="slide first">
                <div class="slide-content">
                    <div class="slide-Title">
                        <h1>New Season<br>New Mood</h1>
                    </div>
                    <div class="slide-description">
                        <p>Illuminate the inside and outside of your home with <br>our selection of Lighting
                            solutions</p>
                    </div>
                    <div class="button-shopnow">
                        <button><a href="https://demo4.drfuri.com/razzi9/product/the-globe-pendant-light/"
                                class="button-link"><span class="button-text razzi-button">Shop Now </span></a>
                    </div></button>
                </div>
                <img src="./public/images/Home-v13-Slide-1.png" alt="">

            </div>
            <div class="slide">
                <div class="slide-content">
                    <div class="slide-Title">
                        <h1>New Season<br>New Mood</h1>
                    </div>
                    <div class="slide-description">
                        <p>Illuminate the inside and outside of your home with <br>our selection of Lighting
                            solutions</p>
                    </div>
                    <div class="button-shopnow">
                        <button><a href="https://demo4.drfuri.com/razzi9/product/the-globe-pendant-light/"
                                class="button-link"><span class="button-text razzi-button">Shop Now </span></a>
                    </div></button>
                </div>
                <img src="./public/images/Home-v13-Slide-2.png" alt="">
            </div>

            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
            </div>
        </div>

        <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
        </div>
    </div>
    <script type="text/javascript">
    var counter = 1;
    setInterval(function() {
        document.getElementById('radio' + counter).checked = true;
        counter++;
        if (counter > 2) {
            counter = 1;
        }
    }, 5000);
    </script>
</div>