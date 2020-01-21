<?php

if (!isset($_GET["script"])) {
  $script = "blank";
}
else {
  $script = $_GET["script"];
}

if (!isset($_GET["source"])) {
  $source = "my_scripts";
}
else {
  $source = $_GET["source"];
}


?>

<!DOCTYPE html>
<html>
<head>
<title>p5.js scripts</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Oxygen&display=swap" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.6/p5.js"></script>

<script src="<?php echo $source . "/" . $script; ?>.js"></script>

</head>

<body>

<div class="container">

<div class="jumbotron mx-0">
<h1>p5.js</h1>
<h4>This page acts as a placeholder for demonstrating various p5.js scripts. P5.js is a plugin for easily mapping out geometric shapes and more</h4>

[<a href="index.php" class="text-secondary">reset</a>]

</div>

<div class="row">

<div class="col-sm-4 m-0 bg-dark text-light">

<p>
Examples from the p5 website (<a href="https://p5js.org/examples/" target="_blank" class="text-light">p5js.org/examples</a>) :
</p>
<?php
$files = glob("ex_scripts/*.js");

foreach ($files as $file) {
?>
<a href="index.php?source=ex_scripts&script=<?php echo str_replace(".js", "", str_replace("ex_scripts/", "", $file)); ?>" class="text-light"><?php echo str_replace(".js", "", str_replace("ex_scripts/", "", $file)); ?></a> [<a href="<?php echo $file; ?>" target="_blank" class="text-light">.js</a>]
<br>
<?php
}
?>
<br><br>
<p>
My scripts :
</p>
<?php
$files = glob("my_scripts/*.js");

foreach ($files as $file) {
?>
<a href="index.php?source=my_scripts&script=<?php echo str_replace(".js", "", str_replace("my_scripts/", "", $file)); ?>" class="text-light"><?php echo str_replace(".js", "", str_replace("my_scripts/", "", $file)); ?></a> [<a href="<?php echo $file; ?>" target="_blank" class="text-light">.js</a>]
<br>
<?php
}
?>

<br><br>
<!--
<p>
<a href="index.php?source=ex_scripts&script=flock" class="text-light">Flocks of birds</a> [<a href="ex_scripts/flock.js" target="_blank" class="text-light">.js</a>]

<br>

<a href="index.php?source=ex_scripts&script=mouse_gravity" class="text-light">Gravity with mouse</a> [<a href="ex_scripts/mouse_gravity.js" target="_blank" class="text-light">.js</a>]

<br>

<a href="index.php?source=ex_scripts&script=spirograph" class="text-light">Spirograph (press space)</a> [<a href="ex_scripts/spirograph.js" target="_blank" class="text-light">.js</a>]

</p>

<p>Some of my sketches (just starting!):</p>

<p>

<a href="index.php?source=my_scripts&script=recursive_circles" class="text-light">recursive_circles</a> [<a href="my_scripts/recursive_circles.js" target="_blank" class="text-light">.js</a>]

<br>
<a href="index.php?source=my_scripts&script=beginner_doodles" class="text-light">beginner_doodles</a> [<a href="my_scripts/beginner_doodles.js" target="_blank" class="text-light">.js</a>]

<br>

<a href="index.php?source=my_scripts&script=tutorial_workings" class="text-light">tutorial_workings</a> [<a href="my_scripts/tutorial_workings.js" target="_blank" class="text-light">.js</a>]

<br>

<a href="index.php?source=my_scripts&script=scribbler" class="text-light">scribbler</a> [<a href="my_scripts/scribbler.js" target="_blank" class="text-light">.js</a>]

<br>

</p> -->



</div>

<div class="col-sm-8 pl-1 m-0" id="sketch-holder"></div>

</div>

</div>

</body>
</html>
