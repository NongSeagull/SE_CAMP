<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        //get
        //http://localhost/SE_CAMP/Lab04/form_101.php
        //post
        ?>
        <form action=" " method="post">
            <input type="text" name="myVal"/>
            <button type="submit">save</button>
        </form>
        <h1><?php
        print_r($_REQUEST); 
        if(isset($_POST['myVal'])){
            echo''.$_POST['myVal'];
        }?></h1>
    </body>
</html>