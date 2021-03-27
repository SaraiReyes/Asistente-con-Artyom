<html>
<head>
<title>Reloj con Javascript</title>
<script language="JavaScript">
function mueveReloj(){
momentoActual = new Date()
hora = momentoActual.getHours()
minuto = momentoActual.getMinutes()
segundo = momentoActual.getSeconds()
momentoActual1 = new Date()


str_segundo = new String (segundo)
if (str_segundo.length == 1)
segundo = "0" + segundo

str_minuto = new String (minuto)
if (str_minuto.length == 1)
minuto = "0" + minuto

str_hora = new String (hora)
if(str_hora.length <= 12)
hora =  hora-12
if (str_hora.length < 10)
hora = "0" + hora
horaImprimible =  hora + " : " + minuto + " : " + segundo
document.form_reloj.reloj.value = horaImprimible

var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
var f=new Date();
document.form_reloj1.reloj.value = f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear();


setTimeout("mueveReloj()",1000)
}
</script>
</head>

<body onload="mueveReloj()">

<center>
<form name="form_reloj">
<input type="text" name="reloj" size="40" style="background-color : #14557fc7; color : #fff;border-top-left-radius: 16px;  border-bottom-right-radius: 16px; border: 3px solid #40d6f0;  font-family : monospace, Arial, Helvetica; font-size : 8pt; text-align : center;">

</form>
<form name="form_reloj1">
<input type="text" name="reloj" size="40" style="background-color : #14557fc7; color : #fff;border-top-left-radius: 16px;  border-bottom-right-radius: 16px; border: 3px solid #40d6f0;  font-family : monospace, Arial, Helvetica; font-size : 8pt; text-align : center;">

</form>
</center>
</body>

</html>