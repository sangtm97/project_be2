<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="./15/public/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="./15/public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,1500;0,400;0,500;0,600;0,700;1,200;1,400&display=swap"
    rel="stylesheet">

<?php
if (!class_exists('lessc')) {
    include './15/public/libs/lessc.inc.php';
}
$less = new lessc;
$less->compileFile('./15/public/less/module-15.less', './15/public/css/module-15.css');
?>
<link href="./15/public/css/module-15.css" rel="stylesheet" type="text/css" />