<?php
    $title = "Strings";
    include 'includes/header.php'
?>
<body>
    <h1>PHP String Manipulation</h1>
    <?php 
        $phrase1 = "student who came late";
        $phrase2 = "in class, stand with Rock";
        $name = "enoch elijah";
        // Concatenation of strings
        echo $phrase1 . ", named Tiffany, ". $phrase2;
        echo '<br/>';

        // String Transformation
        echo '<hr/>';
        echo 'Uppercase first letter of each words: '.ucwords($name).'<br/>';
        echo  'Uppercase: '.strtoupper($name).'<br/>';
        echo  'Lowercase: '.strtolower("THIS WAS ALL UPPERCASE").'<br/>';
        echo '<hr/>';

        echo 'Repeat String: '.str_repeat('a',10).'<br/>';
        echo 'Repeat String - Nested Function: '.strtoupper(str_repeat('a',10)).'<br/>';
        echo 'Get a Substring: '.substr($name, 6, 11).'<br/>';
        echo 'Get Position in String: '.strpos($name,'j').'<br/>';
        echo 'Find Char "o" in String: '.strchr($name, 'o').'<br/>';
        echo 'Get Length of String: '.strlen($name).'<br/>';
        echo 'Trim spaces on both sides: '."A".trim(" B C D ")."B".'<br/>';
        echo 'Replace a String in String: '.str_replace("Rock", "Confidence", $phrase2).'<br/>';
    ?>
<?php require 'includes/footer.php' ?>