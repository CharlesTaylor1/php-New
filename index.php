<?php
$title = "index";
include 'includes/header.php'

?>


<h1>Hello world- Serious Business</h1>

<h2> 'Hello JA'</h2>

<?php

echo ' <br/>';
echo 'Second Line';


?>

<?php
$name = 'Charles T';
$age = 29;

echo $name;
echo '<h1> My name is :' . $name . ' </h1>';
echo '<h1> my age is : ' . $age . '</h1>';



?>
<button type="button" class="btn btn-dark"> Click Me </button>
<button type="button" class="btn btn-success"> Click Me </button>

<a href="https://www.heroku.com" target="blank"class="btn btn-danger"> Heroku.com<a/>


<?php require 'includes/footer.php'

?>

</html>