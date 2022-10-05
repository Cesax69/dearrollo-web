<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 4</title>
</head>
<body>
    <h1 id="samu">Soy una simple página!!!=( =( =(</h1>
    <button id="botonrojo" style="background-color: red;" onmouseover="rojo()">Red</button>
    <button id="botonazul" style="background-color: blue;" onmouseover="azul()">Blue</button>
    <button id="botonnegro" style="background-color: black;" onmouseover="negro()">Black</button>

    <script>
        function rojo(){
            //alert("Outchh Soy Rojo");
            document.getElementById("samu").style.backgroundColor ="red";
 
        }

        function azul(){
            //alert("Outchh Soy Azul");
            document.getElementById("samu").style.backgroundColor ="blue";

        }

        function negro(){
            //alert("Outchh Soy Negro");
            document.getElementById("samu").style.backgroundColor ="black";

        }
    </script>
</body>
</html>