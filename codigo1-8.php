<html>
    <body>
        <?php
          $_n = 65535;
          $contador = 0;
          for($_i = 1; $_i <= $_n ; $_i++){
            if($_n  % $_i == 0)
                $contador++;
                if ($contador>2)
                    break;
          }
          if($contador == 2 )
            echo "$_n é primo";
          else
            echo "$_n é composto";
        ?>
    
</body>
</html>
