<?php
    $title = "Date and Time";
    include 'includes/header.php'
?>
    <h1><?php echo $title ?></h1>

    <?php 
        $datenow = getdate();
        echo "Today's Date: <br/>";
        echo $datenow['mon'].'<br/>';
        echo $datenow['mday'].'<br/>';
        echo $datenow['year'].'<br/>';

        echo "Today's Date: ".$datenow['mon'].'/'.$datenow['mday'].'/'.$datenow['year'].'<br/>';

        echo time().'<br/>';
        
        echo date("m/d/y G:i:s", time()).'<br/>';
        echo "Today is ";
        echo date("F-j-o, \a\\t g:i:s a", time());

    ?>
<?php require 'includes/footer.php' ?>