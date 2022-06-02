<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="./10/public/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="./10/public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;1,200;1,400&display=swap" rel="stylesheet">

<!-- module-10 -->
<?php
if (!class_exists('lessc')) {
    include ('./10/public/libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('./10/public/less/module-10.less', './10/public/css/module-10.css');
?>
<link href="./10/public/css/module-10.css" rel="stylesheet" type="text/css" />





