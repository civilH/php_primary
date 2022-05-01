<?php
    $title = "Switch Statements";
    include 'includes/header.php'
?>
    <h1><?php echo $title ?></h1>
    <?php 
        $grade = 'B';

        switch ($grade) {
            case 'A':
                # code...
                echo '<h2 style="color: green">You Are Succeed!</h2>';
                break;
            case 'B':
                echo '<h2 style="color: blue">You doing Great!</h2>';
                break;
            default:
                # code...
                echo '<h2 style="color: red">You are Failed....!</h2>';
                break;
        }
    ?>
<?php require 'includes/footer.php' ?>