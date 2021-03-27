<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Dictar</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery-3.1.1.js"></script>
    <script src="js/artyom.min.js"></script>
    <script src="js/artyomCommands.js"></script>
    <script src="js/artyom.js"></script>
    <script src="js/reloj.js"></script>
    <style type="text/css">

        button{
            border-top-left-radius: 30px;
            border-bottom-right-radius: 30px;
            padding: 12px;
            background-color: #27b6de9e;
            border: 2px solid #ccc;
            color: whitesmoke;
        }
        html{
            font-size: 18px;
        }
        body{
            background-image: url(img/cuatro.jpg);
            font-family: monospace;
            font-weight: 200px;
            font-size: 12px;
        }

</style>

    </head>
<body>
<div class="container" style="margin-top: 30px;">
<center>
	
       <br>
       <br>
       <div class="container" style="margin-top: 100px;">
        <div class="modal-body">
        <div class="form-group">
			<textarea id="texto" style="margin-top: 5px;height: 100px;padding: 100px; color: #fff; border-top-right-radius:16px; border-bottom-left-radius: 16px; border: 3px solid #10d6f0; font-family: monospace;background:  #14557fc7;"></textarea>
            
			<button onclick="procesar()" id="procesar" >Escuchar</button>
		</div>
        </div>
        </div>
       

</center>
      </  
</body>
<script type="text/javascript">

	var recognition;
	var recognizing = false;
	if (!('webkitSpeechRecognition' in window)) {
		alert("¡API no soportada!");
	} else {

		recognition = new webkitSpeechRecognition();
		recognition.lang = "es-Mx";
		recognition.continuous = true;
		recognition.interimResults = true;

		recognition.onstart = function() {
			recognizing = true;
			console.log("empezando a eschucar");
		}
		recognition.onresult = function(event) {

		 for (var i = event.resultIndex; i < event.results.length; i++) {
			if(event.results[i].isFinal)
				document.getElementById("texto").value += event.results[i][0].transcript;
		    }
			
			//texto
		}
		recognition.onerror = function(event) {
		}
		recognition.onend = function() {
			recognizing = false;
			document.getElementById("procesar").innerHTML = "Escuchar";
			console.log("terminó de eschucar, llegó a su fin");

		}

	}

	function procesar() {

		if (recognizing == false) {
			recognition.start();
			recognizing = true;
			document.getElementById("procesar").innerHTML = "Detener";
		} else {
			recognition.stop();
			recognizing = false;
			document.getElementById("procesar").innerHTML = "Escuchar";
		}
	}
</script>
</html>