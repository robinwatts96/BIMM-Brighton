<?php
    function greet ($name, $color) {
        echo "<p>Hi, my name is $name and my favourite color is $color</p>";
    }

    greet('Rob', 'Blue');
?>

<h1><?php bloginfo('name') ?></h1>
<p><?php bloginfo('description') ?></p>