<?php
    $title = "For Loops";
    include 'includes/header.php'
?>
    <H1><?php echo $title ?></H1>
    <?php 
        for($count = 0; $count < 10; $count++){
            echo '<p>This is for Loop</p>';
        }

        for($count = 0; $count < 10; $count++){
            echo "<p>Counting on... $count</p>";
        }
    
    
    ?>
<?php require 'includes/footer.php' ?>