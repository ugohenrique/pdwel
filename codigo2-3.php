<html>
    <body>
    <?php
        $a = array(3,4,5,7,4,7);
        $s = 0;
        $p = 1;
        foreach ($a as $key => $value) {
            $s += $value;
        }
        for ($i = 0 ; $i < count($a); $i++){
            $p = $p * $a[$i];
        }

        echo "<p style='color:blue'>A soma dos elementos é <b> $s</b>";
        echo "<p style='color:red'>O produto  dos elementos é <b> $p</b>"
    ?>       
    
</body>
</html>
