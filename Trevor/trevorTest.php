<html>
  <head>
    <title> Test.html </title>
  </head>
  <body>
    <?php
    $arr = array("Apple", "Bananas", "Pears", "Peaches");
    echo '<div>';
    foreach($arr as $x){

        echo '<div style="width:200px;    height:50px; padding-bottom:50px;  background:blue; border-style: solid; border-color: white; color:white; text-align:center">';


        echo $x . "<br>" ;
        echo '</div>';


    }
    echo '</div>';
    ?>
  </body>
</html>
