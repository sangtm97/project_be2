<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">



<link href="./1/public/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="./1/public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<link href="./1/public/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="./1/public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<link href="./3/public/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="./3/public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<link href="./5/public/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="./5/public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<link href="./8/public/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="./8/public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<link href="./10/public/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="./10/public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;1,170;1,400&display=swap"
    rel="stylesheet">

<link href="./11/public/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="./11/public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<link href="./12/public/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="./12/public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<link href="./9/public/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="./9/public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<link href="./4/public/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="./4/public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;1,200;1,400&display=swap"
    rel="stylesheet">


<!-- module-1 -->
<?php
if (!class_exists('lessc')) {

    include './1/public/libs/lessc.inc.php';
}
$less = new lessc;
$less->compileFile('./1/public/less/module-1.less', './1/public/css/module-1.css');
?>
<link href="./1/public/css/module-1.css" rel="stylesheet" type="text/css" />



<!-- module-2 -->
<?php
if (!class_exists('lessc')) {
    include './2/public/libs/lessc.inc.php';
}
$less = new lessc;
$less->compileFile('./2/public/less/module-2.less', './2/public/css/module-2.css');
?>
<link href="./2/public/css/module-2.css" rel="stylesheet" type="text/css" />

<!-- module-3 -->
<?php
if (!class_exists('lessc')) {
    include './3/public/libs/lessc.inc.php';
?>

<link href="./3/public/css/module-3.css" rel="stylesheet" type="text/css" />

<!-- Module-5 -->
<?php
if (!class_exists('lessc')) {
    include './5/public/libs/lessc.inc.php';
}
$less = new lessc;
$less->compileFile('./5/public/less/module-5.less', './5/public/css/module-5.css');
?>
<link href="./5/public/css/module-5.css" rel="stylesheet" type="text/css" />

{{-- Module-8 --}}
<?php
if (!class_exists('lessc')) {
    include './8/public/libs/lessc.inc.php';
}
$less = new lessc;
$less->compileFile('./8/public/less/module-8.less', './8/public/css/module-8.css');
?>
<link href="./8/public/css/module-8.css" rel="stylesheet" type="text/css" />



<!-- module-10 -->
<?php
if (!class_exists('lessc')) {
    include './10/public/libs/lessc.inc.php';
}
$less = new lessc;
$less->compileFile('./10/public/less/module-10.less', './10/public/css/module-10.css');
?>
<link href="./10/public/css/module-10.css" rel="stylesheet" type="text/css" />



<!-- Module-9 -->
<?php
if (!class_exists('lessc')) {
    include './9/public/libs/lessc.inc.php';
}
$less = new lessc;
$less->compileFile('./9/public/less/module-9.less', './9/public/css/module-9.css');
?>
<link href="./9/public/css/module-9.css" rel="stylesheet" type="text/css" />



<!-- bootstrap module 4 & 7 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha784-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW7" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha784-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,700;0,400;0,500;0,600;0,700;1,200;1,400&display=swap"
    rel="stylesheet">
<!-- Module 7 -->
<?php
if (!class_exists('lessc')) {
    include './4/public/libs/lessc.inc.php';
}
$less = new lessc;
$less->compileFile('./4/public/less/module-4.less', './4/public/css/module-4.css');
?>
<link href="./4/public/css/module-4.css" rel="stylesheet" type="text/css" />

<?php
if (!class_exists('lessc')) {
    include './7/public/libs/lessc.inc.php';
}
$less = new lessc;
$less->compileFile('./7/public/less/module-7.less', './7/public/css/module-7.css');
?>
<link href="./7/public/css/module-7.css" rel="stylesheet" type="text/css" />

<!-- Module-11 -->
<?php
if (!class_exists('lessc')) {
    include './11/public/libs/lessc.inc.php';
}
$less = new lessc;
$less->compileFile('./11/public/less/module-11.less', './11/public/css/module-11.css');
?>
<link href="./11/public/css/module-11.css" rel="stylesheet" type="text/css" />


<!-- Module-12 -->
<?php
if (!class_exists('lessc')) {
    include './12/public/libs/lessc.inc.php';
}
$less = new lessc;
$less->compileFile('./12/public/less/module-12.less', './12/public/css/module-12.css');
?>
<link href="./12/public/css/module-12.css" rel="stylesheet" type="text/css" />

<!-- Module-17 -->
<?php
if (!class_exists('lessc')) {
    include './17/public/libs/lessc.inc.php';
}
$less = new lessc;
$less->compileFile('./17/public/less/module-17.less', './17/public/css/module-17.css');
?>
<link href="./17/public/css/module-17.css" rel="stylesheet" type="text/css" />

<?php
if (!class_exists('lessc')) {
    include './18/public/libs/lessc.inc.php';
}
$less = new lessc;
$less->compileFile('./18/public/less/module-18.less', './18/public/css/module-18.css');
?>
<link href="./18/public/css/module-18.css" rel="stylesheet" type="text/css" />