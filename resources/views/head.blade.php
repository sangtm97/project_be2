<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

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
    include './7/public/libs/lessc.inc.php';
}
$less = new lessc;
$less->compileFile('./7/public/less/module-7.less', './7/public/css/module-7.css');
?>
<link href="./7/public/css/module-7.css" rel="stylesheet" type="text/css" />