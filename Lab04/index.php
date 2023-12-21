<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1><?php echo "Hello World<br><br>";?></h1>
        <?php echo "<h1>Hello World<br><br></h1>";?>
        <?php echo $var_a = "SE CAMP"?>
        <br>
        <?php echo $var_b = 'Hello $var_a'?>
        <br>
        <?php echo $var_c = "Hello $var_a"?>
        <br>

        <?php 
        $var_c = $var_b = 1;
        $var_c = '1';
        if($var_b === $var_c){
            echo'$var_b === $var_c';;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
        }else if($var_b <> $var_c){
            echo '$var_b <> $var_c';
        }else{
            echo 'else';
        }?>

        <br>
        <?php echo $var_C = 2; ?>
        <br>
        <?php echo $var_c ?>

        <?php 
        echo $var_c;
        switch($var_c){
            case 1:
                echo "1";
                break;
                default:
                echo "test";
        }

        $array = array(1,2,3);
        $array1 = [1,2,3]; //{ }
        $array2[] = 1;
        $array2[] = 2;
        $array2[] = 3;
        $array2[] = "Hello";
        $array2['SE'] = "world";
?> 
<br> <?php print_r($array);?>
        <pre><?php print_r($array);?></pre>
        <pre><?php print_r($array1);?></pre>
        <pre><?php print_r($array2);?></pre>
        <?php for($i = 0; $i < count($array2);$i++){
            ?>
            <h3><?php echo $array2[$i]; ?></h3>
            <?php } ?>

            <?php foreach($array2 as $key => $value){ ?>
                <h3><?php echo $array2[$key];   ?> : <?php echo $value;?></h3>
                <?php }?>

                <?php
                pre($array);
                ?>
                <?php
                function pre($value){
                    echo   "<pre>2";
                    print_r($value);
                    echo "</pre>";
                }
                ?>
    </body>
</html>