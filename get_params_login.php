<!DOCTYPE html>

<html>

    <head>

        <meta charset="UTF-8">

        <title>ID Family</title>

    </head>

    <body>

        <section>

            <?php

                echo '<style>';
                require_once("css/styleCommander.css");
                echo '</style>';

                $FullName = $_GET["fullName"];

                $Password = $_GET["password"];

                $Release = $_GET["release"];

                $Terms = $_GET["termsOfService"];

                $Phone = $_GET["phone"];

                $Contacts = $_GET["contacts"];

                $Gender = $_GET["gender"];

                $WorkPermits = $_GET["workPermits"];

                $Address = $_GET["address"];

                $Birth = $_GET["dateOfBirth"];

                echo '<div id="Php">';

                echo "<h2> :שם מלא " . $FullName . "</h2>";

                echo "<h2>:סיסמא שנבחרה " . $Password . "</h2>";

                echo "<h2>:תאריך לידה " . $Birth . "</h2>";

                echo "<h2>:מספר טלפון " . $Phone . "</h2>";

                echo "<h2>:מין " . $Gender . "</h2>";

                echo "<h2>:אנשי קשר למקרה חירום " . $Contacts . "</h2>";

                echo "<h2>:כתובת " . $Address . "</h2>";
                
                //echo "<h2>:פטורים " . $Release . "</h2>";

                //echo "<h2>:תנאי שירות " . $Terms . "</h2>";

                //echo "<h2>:אישורי עבודה " . $WorkPermits . "</h2>";

                echo '</div>';
                
                echo '<script> 
                setTimeout(function(){
                    
                  location.href = "index.html";
              },3000) ;
              </script>'
            ?>      
        </section>
    </body>

</html>