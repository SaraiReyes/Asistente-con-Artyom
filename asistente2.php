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
        *{
            padding: 0;
            margin: 0;
            font-family: monospace;

        }
        div{
            border-radius: 10px;
            padding: 30px;
            margin: 40px;
            box-shadow: 0px 0px 12px #ccc;
            background-color: #fff;
            font-size: 30px;

        }
        body{
            background-color: #1e7b9ef5;
        }

</style>
</head>
<body>
    <div class="modal-body" style="height: 350px; background-image: url(img/cuatro.jpg); background-size: contain;">
        <button type="button" class="btn btn-info"><img src="img/btnc.svg" width="20px"></button>
        <button type="button" class="btn btn-danger"><img src="img/btn.svg" width="20px" ></button>
        <p></p>
        <div id="text" name="comando" style="height: 30px; background-color: #fff0; color: #fff;font-family: monospace;padding: 5px;font-size: 12px;">
        </div>
        <div id="texto" name="comando" style="height: 40px; background-color: #fff0; color: #fff;font-family: monospace;padding: 5px;font-size: 13px;">
        </div>
    </div>
    
</body>
</html>