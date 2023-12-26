<html>
    <head>
        <meta charset="utf-8">
        <link rel="styleSheet" href="styleHW3.css">
    </head>
    <body>
        <?php $multi_x = 2; ?>
        <h1 class="gradient-border">ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>
        <border class="full-withRadius">
        <div>
            <table>
                <tbody>
                    <?php for ($row = 1; $row < 25; $row ++) { ?>
                        <tr>
                            <td><?php echo $multi_x ?></td>
                            <td>x</td>
                            <td><?php echo $row?></td>
                            <td>=</td>
                            <td><?php echo $multi_x*$row ?></td>
                            <?php }?>
                        </tr>
                    </div>
                    </border>
                </tbody>
            </table>
        </body>
        </html>