<!DOCTYPE html>
<html lang="en">

<head>
    <title>Asistente</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery-3.1.1.js"></script>
    <script src="js/artyom.min.js"></script>
    <script src="js/artyomCommands.js"></script>
    <script src="js/artyom.js"></script>
    <style type="text/css">
        body{
            background-image: url('img/cuatro.jpg');
            background-size: cover;
        }
        .container{
            width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

</style>
</head>

<body>
<div class="container" style="margin-top: 70px;">
    <div class="modal-body">
        <div class="form-group">
            <button type="button" class="btn btn-info"><img src="img/btnc.svg" width="20px"></button>
            <button type="button" class="btn btn-danger"><img src="img/btn.svg" width="20px" ></button>
        </div>
        <p></p>
        <input type="text" id="cmd" class="form-control" 
        style="width: 300px; height: 52px; color: #fff; border-top-left-radius: 16px;  border-bottom-right-radius: 16px; border: 3px solid #40d6f0; background-color: #14557fc7;font-family: monospace;">
        <textarea class="form-control" id="texto" name="comando"
         style="margin-top: 5px;width: 300px; padding: 10px; color: #e9ecef; font-family: monospace; height: 100 px;border: 3px solid #40d6f0; border-top-left-radius: 16 px;border-bottom-right-radius: 16 px; background-color: #14557fc7;" require></textarea>
        <p></p>
        <br>
        <table class="table" style="margin-left: -124px;">
            <thead>
            <tr>
            <th scope="col"><button type="button" style="color: #fff;" id="normal" class="btn btn-default">Normal</button></th>
            <th scope="col"><button type="button"  id="destacado" class="btn btn-primary">Destacado</button></th>
            <th scope="col"><button type="button"  id="exito" class="btn btn-success">Exito</button></th>
            <th scope="col"><button type="button"  id="informacion" class="btn btn-info">Información</button></th>   
            <th scope="col"><button type="button"  id="advertencia" class="btn btn-warning">Advertencia</button></th>      
            <th scope="col"><button type="button"  id="peligro" class="btn btn-danger">Peligro</button></th>

            </tr>
            </thead>

        </table>

        </div>

</div>
<script>
		// Escribir lo que escucha.
     artyom.say("Hola",{
            onStart:function(){
            console.log("Comenzando a leer texto");
    },
    onEnd:function(){
        console.log("Texto leido satisfactoriamente");
    }
});
        $('#normal').mouseover(function(){
            artyom.say("botón normal de bootstrap");

        })
        $('#normal').mouseout(function(){
            artyom.say("botón normal de bootstrap");

        })
        $('#destacado').mouseover(function(){
            artyom.say("botón destacado de bootstrap");

        })
        $('#exito').mouseover(function(){
            artyom.say("botón exito de bootstrap");

        })
        $('#informacion').mouseover(function(){
            artyom.say("botón información de bootstrap");

        })
        $('#advertencia').mouseover(function(){
            artyom.say("botón advertencia de bootstrap");

        })
        $('#peligro').mouseover(function(){
            artyom.say("botón peligro de bootstrap");

        })
       
	
	</script>
</body>
</html>