<?php
    $title = "If-Else Statements";
    include 'includes/header.php'
?>
    <h1><?php echo $title ?></h1>
    <?php 
    
        // An If Statement that will carry out an action based on the value of the variable
    
        echo '<h2>If Statement</h2>';
    
        $grade = 90;

        if($grade >= 50){
            echo '<h3 style="color: green">YOU HAVE PASSED</h3>';
        }
        else{
            echo '<h3 style="color: red">YOU HAVE FAILED</h3>';
        }
        // If Else If Else
        $damage = 2**9;
        if($damage < 100){
            echo '<h2 style="color: red">You Still need More Power!</h2>';
        }
        elseif($damage > 80){
            echo '<h2 style="color: green">YOU DID WELL!</h2>';
        }
        else{
            echo '<h2 style="color: purple">YOU REACH THE REQUIREMENT! GOOD JOB!</h2>';
        }
    ?>
<?php require 'includes/footer.php' ?>