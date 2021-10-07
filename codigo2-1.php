<html>
    <body>
    <?php
        $a = array("Maria", "Ana", "Barbara");

        asort($a);

        print_r($a);
        $a[2] = "Pedro Malazarte";
        for($i = 0 ; $i < count($a);$i++)
          echo '<br><b> ' . $a[$i] . '</b> <br>';
        echo "Há " . count($a) . " elementos no array";

    ?>       
    
</body>
</html>
