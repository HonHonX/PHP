<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
	<?php
    function vermerk($vorname, $name, $abteilung) {
        echo "<table border='1'><tr><td>";
        echo "Programmteil von {$vorname} {$name}, Abteilung {$abteilung}";
        echo "<br />";
        echo "E-Mail: {$vorname}.{$name}@{$abteilung}.phpdevel.de";
        echo "</td></tr></table>";
    }
    
    vermerk("Sharon","Buch","EXN");
    vermerk("Michael","Mustermann","ABC");
    
   ?>   
</body>
</html>
