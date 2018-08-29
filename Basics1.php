<html>
   
   <head>
      <title>Hello World</title>
   </head>
   
   <body>
      <?php echo "Hello, World!";?> <?php ?>
       <?php echo "You are my love"?>

        <?php
         $capital = 67+5;
         $CaPiTaL="rameen";
         print("<br>Variable capital is $capital<br>");
         print("Variable CaPiTaL is $CaPiTaL<br>");
        ?>
      
     <?php
   define("MINSIZE", 50);
   
   echo MINSIZE;
   echo constant("MINSIZE"); // same thing as the previous line
    ?>
      
      
      <?php
         $d = date("D");
         
         if ($d == "Tue")
            echo "Have a nice weekend!"; 
         
         else
            echo "Have a nice day!"; 
      ?>
      
      <?php
        $a = 0;
         $b = 0;
         
         for( $i = 0; $i<5; $i++ ) {
            $a += 10;
            $b += 5;
         }
         
         echo ("At the end of the loop a = $a and b = $b <br>" );
      ?>
      
      <?php
         $array = array( 1, 2, 3, 4, 5);
         
         foreach( $array as $value ) {
            echo "Value is $value <br />";
         }
      ?>
      
      <?php
   $string1="Hello ABC";
   $string2="4113";
   
   echo $string1 . " " . $string2;
?>
      
   </body>

</html>
