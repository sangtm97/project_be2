<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="./3/public/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="./3/public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<link href="./5/public/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="./5/public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<link href="./8/public/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="./8/public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<link href="./11/public/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="./11/public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<link href="./12/public/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="./12/public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;1,200;1,400&display=swap" rel="stylesheet">

<?php
if (!class_exists('lessc')) {
    include ('./3/public/libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('./3/public/less/module-3.less', './3/public/css/module-3.css');
?>
<link href="./3/public/css/module-3.css" rel="stylesheet" type="text/css" />

<!-- Module-5 -->
<?php
if (!class_exists('lessc')) {
    include ('./5/public/libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('./5/public/less/module-5.less', './5/public/css/module-5.css');
?>
<link href="./5/public/css/module-5.css" rel="stylesheet" type="text/css" />

{{-- Module-8 --}}
<?php
if (!class_exists('lessc')) {
    include ('./8/public/libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('./8/public/less/module-8.less', './8/public/css/module-8.css');
?>
<link href="./8/public/css/module-8.css" rel="stylesheet" type="text/css" />

<!-- Module-11 -->
<?php
if (!class_exists('lessc')) {
    include ('./11/public/libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('./11/public/less/module-11.less', './11/public/css/module-11.css');
?>
<link href="./11/public/css/module-11.css" rel="stylesheet" type="text/css" />

<!-- Module-12 -->
<?php
if (!class_exists('lessc')) {
    include ('./12/public/libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('./12/public/less/module-12.less', './12/public/css/module-12.css');
?>
<link href="./12/public/css/module-12.css" rel="stylesheet" type="text/css" />

