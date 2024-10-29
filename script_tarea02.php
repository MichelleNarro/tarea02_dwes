<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>   
    <?php
        //Pondré mi nombre y mi nif:
        echo "<p>Michelle Narro Plasencia -- 54008869Q </p>";
        echo "<p> El código del script php siempre se incluye entre las etiquetas &lt;?php y ?&gt </p>";

        /* Dos cosas sobre html:
            - uso <p> porque representa un parrafo asi que cada que se usa el navegador interpreta 
            el contenido como parrafo nuevo, asi que lo pone en una nueva linea.
            
            - "<?php" y "?>" dentro del echo se interpretan como etiquetas PHP, por eso, el servidor intenta leerlas 
            como código en lugar de mostrarlas como texto --> para solucionar el problema sustituiremos < por "&alt;"
            y > por "&gt", ya que esos son sus equivalentes en html */

        //Variables:
        $variableEntera = 10;
        $variableFlotante = 8.22;
        $variableBoolean = true;
        $variableString = "Cadena";

        //Constantes:
        const MI_CONSTANTE = 3.14;
        
        echo "<p> $variableEntera</p>";
        echo "<p> $variableFlotante</p>";
        echo "<p> $variableString</p>";
        echo "<p> $variableBoolean</p>";
        echo "<p> ".MI_CONSTANTE."</p>";    
        
        $suma = $variableEntera + $variableFlotante;
        //php hará una conversion automática siempre que sea necesario.

        echo "<p> $suma</p>";
        
    ?>
</body>
</html>