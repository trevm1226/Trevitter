<html>
  <head>
    <title> Test.html </title>
  </head>
  <body>
    <?php
    $arr = array("Apple", "Bananas", "Pears", "Peaches");
    echo '<div>';
    foreach($arr as $x){

        echo '<div style="width:150px;    height:100px; border-bottom:50px;  background:blue; border-style: solid; border-color: white; color:white;">';

echo '<div style = "text-align:center; v-align:center; ">';
        echo $x . "<br>" ;
        echo '</div>';
        echo '</div>';


    }
    echo '</div>';
    ?>
  </body>
</html>
