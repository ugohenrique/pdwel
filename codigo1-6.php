<html>
    <body>
        <?php
          $_m = 20 ;
          $_n = 6;
          echo "MDC($_m,$_n)=";
          do{
            $r = $_m % $_n;
            $_m = $_n;
            $_n = $r;
          } while($_n != 0);
          echo "<p>$_m";//saida no cliente
          
        ?>
    
</body>
</html>
