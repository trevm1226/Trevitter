  <html>

<head>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div style="margin: auto; width:50%;">


        <div style="float:left;">
          <?php
$fields        = array(
   'fName',
   'lName',
   'uName',
   'email',
   'password',
   'cPassword'
);
$formSubmitted = true;
foreach ($fields AS $field) {
   if (!isset($_GET[$field]))
       $formSubmitted = false;
}
if ($formSubmitted)
   foreach ($fields as $field)
       $$field = $_GET[$field];

       if($formSubmitted){
         echo "  <div style=\"margin: auto; width:50%;\">";
       echo "<h1 class=\"centerdivpls\">Thanks For Registering " . $fName . " " . $lName . "</h1>";
       echo "</div>";

     }
     else{
       ?>
       <div style="float:left;">
           <h1>Registration Form</h1>
           <form method="post" action="doregister.php?rLoad=<?php echo rand(10000 , 99999 ) ?>">

               <div>

                   <input id="fName" placeholder="First Name" name="fName">
               </div>
               <br>
               <div>

                   <input id="lName" placeholder="Last Name" name="lName">
               </div>
               <br>
               <div>

                   <input id="uName" placeholder="Username" name="uName">
               </div>
               <br>
               <div>

                   <input id="email" placeholder="Email" name="email">
               </div>
               <br>
               <div>

                   <input id="password" type="password" placeholder="Password" name="password">
               </div>
               <br>
               <div>

                   <input id="cPassword" type="password" placeholder="Confirm Password" name="cPassword">
               </div>
               <br>
               <div>
                   <select name="gender">
                     <option value="male" selected>Male</option>
                     <option value="female">Female</option>
                   </select>
               </div>
               <br>
               <div>
                   <input class="button medium rounded " type="submit"> </input>
               </div>

           </form>
       </div>
       <?php

     }


?>

        </div>
    </div>
</body>

</html>
