<?php
    $title = "Functions";
    include 'includes/header.php'
?>
    <h1><?php echo $title ?></h1>
    
    <?php 
        /* Defining a Function */
        function writeMessage(){
            echo "This is your first function, Continue you understanding please! <br/>";
        }
        /* Calling a Function */
        writeMessage();
        echo '<hr/>';
        writeMessage();
        echo '<hr/>';

        /* Functions with parameters */
        function addFunction($num1, $num2){
            $sum = $num1 + $num2;
            echo "The sum of $num1 and $num2 is: $sum <br/>";
        }

        function changeNum(&$num){
            $num = $num + 10;
        }

        function returnProduct($num1 , $num2){
            $prod = $num1 * $num2;
            return $prod;
        }
        $num = 500;

        addFunction(10,30);
        echo '<hr/>';
        addFunction('10', "50");
        echo '<hr/>';
        addFunction(1000, $num);
        echo '<hr/>';
        
        changeNum($num);
        echo $num.'<br/>';

        $return_value = returnProduct(10, 200);
        echo $return_value.'<br/>';
    ?>
<?php require 'includes/footer.php' ?>