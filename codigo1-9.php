<html>
    <body>
        <?php
          function fatorial($_n){
              $p = 1;
              $i = 1;
              while($i <= $_n){
                  $p = $p * $i++;
              }
              return $p;
          }

          $i = 0;
          do{
              echo "$i ! = " . fatorial($i) . "<br>";
              $i++;
          }while($i <= 100);
        ?>
    
</body>
</html>
