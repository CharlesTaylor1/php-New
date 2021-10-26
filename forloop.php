<?php
$title = "For loop";

include 'includes/header.php'
?>

<body>
    <h1>For Loop</h1>


    <?php
    for ($count = 0; $count < 5; $count++) {
        echo '<p>Hello JA</p>';
    }
    for ($count = 0; $count < 5; $count++) {
        echo "<p>The count is: $count</p>";
    }
    ?>


    <?php require 'includes/footer.php'

    ?>
</body>

</html>