<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Asistentes</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery-3.1.1.js"></script>
    <script src="js/artyom.min.js"></script>
    <script src="js/artyomCommands.js"></script>
    <script src="js/artyom.js"></script>
    <script src="js/reloj.js"></script>
    <style type="text/css">
        body{
            background-image: url(img/cuatro.jpg);
            background-size: cover;
        }
        #b{
            border-top-left-radius: 30px;
            border-bottom-right-radius: 30px;
            padding: 12px;
            background-color: #27b6de9e;
            border: 2px solid #ccc;
            color: whitesmoke;

        }
</style>

    </head>
    <body onload="mueveReloj()" >
    <div style="margin-left: 85px; font-size: 100px;font-family: monospace;color: white;">
<b>
    <samp style="color: fff;text-shadow: 11px 5px #17a2b8;"> Asistente</samp>
    <samp style="color: fff;text-shadow: 11px 5px #17a2b8;">Virtual</samp>
</b>
<div style="float: left;padding: 20px;margin-left: 90px;top: 258px;position: absolute;">
    <a class="btn btn-success" id="b" href="#" onclick="asistente()">Asistente Virtual</a>  
    <!--a class="btn btn-success" id="b" href="#" onclick="asistente2()">Asistente Virtual #2</a>
    <a class="btn btn-success" id="b" href="#" onclick="g_cmd()">Guardar Comandos</a-->   
    <a class="btn btn-success" id="b" href="#" onclick="dictar()">Dictar</a>
    <!--a class="btn btn-success" id="b" href="#" onclick="cmd()">Comandos</a-->
</div>
</div>
<br>
<div style="float: left;padding: 20px;margin-left: 90px;top: 258px;position: absolute;">
    <form name="form_reloj">
        <input type="text" name="reloj" size="40" style="background-color : #14557fc7; color : #fff;border-top-left-radius: 16px;  border-bottom-right-radius: 16px; border: 3px solid #40d6f0;  font-family : monospace, Arial, Helvetica; font-size : 8pt; text-align : center;">

    </form>
    <form name="form_reloj1">
        <input type="text" name="reloj" size="40" style="background-color : #14557fc7; color : #fff;border-top-left-radius: 16px;  border-bottom-right-radius: 16px; border: 3px solid #40d6f0;  font-family : monospace, Arial, Helvetica; font-size : 8pt; text-align : center;">
    </form>
</div>
<br>
<br>
<br>

    </body>
</html>