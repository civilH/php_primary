    <?php
        $title = "Home";
        include 'includes/header.php' 
    ?>
    <h1>Hello HTML - PHP Primary</h1>
    <br/>
    <?php 
        // Printing to HTML using echo
        echo 'Hello PHP!';
        echo '<br/>';
        echo 'Second Line';
        echo '<br/>';

        // Declare Variable
        $name = 'Enoch Elijah';
        $age = 25;
        // Echo Variable
        echo $name;
        // Echo in double quotes and Interpolation
        echo "<h1>My Name is: $name</h1>";
        // Concatenation string and a Variable
        echo '<h1>My Age is: '.$age.'</h1>';
?>

<button type="button" class="btn btn-dark">CLICK ME!</button>

<?php
require 'includes/footer.php'
?>