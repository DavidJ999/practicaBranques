<html>
    <head>
        Request
    </head>
    <body>
        <form action="num500.000.php" method="post">
            <input name="numero" type="number">
            <input type="submit" value="submit">
        </form>
        <?php
        $num=$_POST['numero'];
        for($i=0;$i<700000;$i++){
            $aleatori= rand(0,700000);
            if($aleatori==$num && $aleatori%2==0){
                list($useg, $seg) = explode(" ", microtime());
            echo ((float)$useg + (float)$seg."milisegons");
                exit;
            }
        }
        echo("valor no trobat");
    ?>
    </body>
</html>