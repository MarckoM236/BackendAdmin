<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template</title>
</head>
<body>

    <?php 
        include "Modules/head.php";

        include "Modules/menu.php";

        include "Modules/footer.php";

        //Friendly URL
        if(isset($_GET["ruta"])){
            if($_GET["ruta"]=="home" || $_GET["ruta"]=="products" ||
                $_GET["ruta"]=="profile"){

                    include "Modules/".$_GET["ruta"].".php";
                }
        }
    ?>
    
</body>
</html>