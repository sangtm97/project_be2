<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="./3/public/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="./3/public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="./8/public/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="./8/public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
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

{{-- Module-8 --}}
<?php
if (!class_exists('lessc')) {
    include ('./8/public/libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('./8/public/less/module-8.less', './8/public/css/module-8.css');
?>
<link href="./8/public/css/module-8.css" rel="stylesheet" type="text/css" />