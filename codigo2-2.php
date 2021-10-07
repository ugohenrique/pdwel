<html>
    <body>
    <?php
        $a = array('chefe'=>"Maria", 'digitador'=>"Ana",'ceo'=> "Barbara");

        asort($a);

        
        $a[2] = "Pedro Malazarte";
        print_r($a);
        echo "<table border=1>";
        foreach ($a as $key => $value) {
            echo "<tr><td> $key </td><td>$value</td></tr>";   
        }
        echo "</table>"
    ?>       
    
</body>
</html>
