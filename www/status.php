<head>


<style>
table{

width: 80%;
border: 3px solid black;
        background-color: #F2E3D6;
        border-collapse:collapse

}
th{
        font-family: Arial,Helvetica,sans-serif;
        text-align:center;
        font-size:30px;
        background-color:#EB8D49;
border:3px solid black;
       border-collapse:collapse;
height:50px;

}
td{
border:3px solid black;
       font-family:inherit;
       font-size:14px;
       text-align:center;


}
.dark{background-color:#EB8D49}
.med{background-color:#F4A65F}
.light{background-color:#F2E3D6}
.invisible{background-color:#ffffff; border-left:3px solid white; border-top:3px solid white;}
</style>


<!-- Refresh the page every second for the user to get updated info -->
<?php
header("refresh:1;url=".basename(__FILE__));
?>


</head>
<body>
<table>
<tr>
<th>Battery/Voltage</th>
</tr>
<tr>
<td>
<?php
# Voltage values
$voltage_fn = '/dev/talos/batteryVoltage';

if (is_readable($voltage_fn)) {
        $voltage = fopen($voltage_fn,"r");
        $content = fgets($voltage);
        fclose($voltage);
}
else {
        $content = "No file to open";

}
echo $content
?> V</td>
</tr>
</table>

</br>
</br>


<table>
<tr><th colspan="3">Accelerometers</th></tr>
<tr>
<td class="dark">X-acceleration</td>
<td class="dark">Y-acceleration</td>
<td class="dark">Z-acceleration</td>
</tr>
<tr>
<td>
<?php
# Accelerometer values
$acclx_fn = '/dev/talos/accelerometer/x';
if (is_readable($acclx_fn)) {
        $acclx = fopen($acclx_fn,"r");
        $content = fgets($acclx);
        fclose($acclx);
}
else {
        $content = 'No file to open';
}
echo 'x = '.$content;
?>
</td>
<td>
<?php
# Accelerometer values
$accly_fn = '/dev/talos/accelerometer/y';
if (is_readable($accly_fn)) {
        $accly = fopen($accly_fn,"r");
        $content = fgets($accly);
        fclose($accly);
}
else {
        $content = 'No file to open';
}
echo 'y = '.$content;
?>
</td>
<td>
<?php
# Accelerometer values
$acclz_fn = '/dev/talos/accelerometer/z';
if (is_readable($acclz_fn)) {
        $acclz = fopen($acclz_fn,"r");
        $content = fgets($acclz);
        fclose($acclz);
}
else {
        $content = 'No file to open';
}
echo 'z = '.$content;
?>
</td>
</tr>
</table>

</br>
</br>


<table>
<tr>
<td rowspan="2" class="invisible"></td>
<th align="right" colspan="6">Motors</th>
</tr>
<tr>

<td class="dark">Motor A</td>
<td class="dark">Motor B</td>
<td class="dark">Motor C</td>
<td class="dark">Motor D</td>
<td class="dark">Motor E</td>
<td class="dark">Motor F</td>

</tr>
<tr>
<td>Errors</td>
<td>
<?php
# MotorA info
$errCnt_fn = '/dev/talos/motorA/errCount';
if (is_readable($errCnt_fn)) {
        $errCnt = fopen($errCnt_fn,"r");
        $content = fgets($errCnt);
        fclose($errCnt);
}
else {
        $content = 'No file to open';
}
echo $content;
?>
</td>
<td>
<?php
# MotorB info
$errCnt_fn = '/dev/talos/motorB/errCount';
if (is_readable($errCnt_fn)) {
        $errCnt = fopen($errCnt_fn,"r");
        $content = fgets($errCnt);
        fclose($errCnt);
}
else {
        $content = 'No file to open';
}
echo $content;
?>
</td>
<td>
<?php
# MotorC info
$errCnt_fn = '/dev/talos/motorC/errCount';
if (is_readable($errCnt_fn)) {
        $errCnt = fopen($errCnt_fn,"r");
        $content = fgets($errCnt);
        fclose($errCnt);
}
else {
        $content = 'No file to open';
}
echo $content;
?>
</td>
<td>
<?php
# MotorD info
$errCnt_fn = '/dev/talos/motorD/errCount';
if (is_readable($errCnt_fn)) {
        $errCnt = fopen($errCnt_fn,"r");
        $content = fgets($errCnt);
        fclose($errCnt);
}
else {
        $content = 'No file to open';
}
echo $content;
?>
</td>
<td>
<?php
# MotorE info
$errCnt_fn = '/dev/talos/motorE/errCount';
if (is_readable($errCnt_fn)) {
        $errCnt = fopen($errCnt_fn,"r");
        $content = fgets($errCnt);
        fclose($errCnt);
}
else {
        $content = 'No file to open';
}
echo $content;
?>
</td>
<td>
<?php
# MotorF info
$errCnt_fn = '/dev/talos/motorF/errCount';
if (is_readable($errCnt_fn)) {
        $errCnt = fopen($errCnt_fn,"r");
        $content = fgets($errCnt);
        fclose($errCnt);
}
else {
        $content = 'No file to open';
}
echo $content;
?>
</td>
</tr>
<tr>
<td class="med">Position</td>
<td class="med">
<?php
# MotorA infor
$pos_fn = '/dev/talos/motorA/position';
if (is_readable($pos_fn)) {
        $pos = fopen($pos_fn,"r");
        $content = fgets($pos);
        fclose($pos);
}
else {
        $content = 'No file to open';
}
echo $content;
?>
</td>
<td class="med">
<?php
# MotorB info
$pos_fn = '/dev/talos/motorB/position';
if (is_readable($pos_fn)) {
        $pos = fopen($pos_fn,"r");
        $content = fgets($pos);
        fclose($pos);
}
else {
        $content = 'No file to open';
}
echo $content;
?>
</td>
<td class="med">
<?php
# MotorC info
$pos_fn = '/dev/talos/motorC/position';
if (is_readable($pos_fn)) {
        $pos = fopen($pos_fn,"r");
        $content = fgets($pos);
        fclose($pos);
}
else {
        $content = 'No file to open';
}
echo $content;
?>
</td>
<td class="med">
<?php
# MotorD info
$pos_fn = '/dev/talos/motorD/position';
if (is_readable($pos_fn)) {
        $pos = fopen($pos_fn,"r");
        $content = fgets($pos);
        fclose($pos);
}
}
echo $content;
?>
</td>
<td class="med">
<?php
# MotorE info
$pos_fn = '/dev/talos/motorE/position';
if (is_readable($pos_fn)) {
        $pos = fopen($pos_fn,"r");
        $content = fgets($pos);
        fclose($pos);
}
else {
        $content = 'No file to open';
}
echo $content;
?>
</td>
<td class="med">
<?php
# MotorF info
$pos_fn = '/dev/talos/motorF/position';
if (is_readable($pos_fn)) {
        $pos = fopen($pos_fn,"r");
        $content = fgets($pos);
        fclose($pos);
}
else {
        $content = 'No file to open';
}
echo $content;
?>
</td>

</tr>
<tr>
<td>Speed</td>
<td>
<?php
# MotorA info
$speed_fn = '/dev/talos/motorA/speed';
if (is_readable($speed_fn)) {
        $speed = fopen($speed_fn,"r");
        $content = fgets($speed);
        fclose($speed);
}
else {
        $content = 'No file to open';
}
echo $content;
?>
</td>
<td>
<?php
# MotorB info
$speed_fn = '/dev/talos/motorB/speed';
if (is_readable($speed_fn)) {
        $speed = fopen($speed_fn,"r");
        $content = fgets($speed);
        fclose($speed);
}
else {
        $content = 'No file to open';
}
echo $content;
?>
</td>
<td>
<?php
# MotorC info
$speed_fn = '/dev/talos/motorC/speed';
if (is_readable($speed_fn)) {
        $speed = fopen($speed_fn,"r");
        $content = fgets($speed);
        fclose($speed);
}
else {
        $content = 'No file to open';
}
echo $content;
?>
</td>
<td>
<?php
# MotorD info
$speed_fn = '/dev/talos/motorD/speed';
if (is_readable($speed_fn)) {
        $speed = fopen($speed_fn,"r");
        $content = fgets($speed);
        fclose($speed);
}
else {
        $content = 'No file to open';
}
echo $content;
?>
</td>
<td>
<?php
# MotorE info
$speed_fn = '/dev/talos/motorE/speed';
if (is_readable($speed_fn)) {
        $speed = fopen($speed_fn,"r");
        $content = fgets($speed);
        fclose($speed);
}
else {
        $content = 'No file to open';
}
echo $content;
?>
</td>
<td>
<?php
# MotorF info
$speed_fn = '/dev/talos/motorF/speed';
if (is_readable($speed_fn)) {
        $speed = fopen($speed_fn,"r");
        $content = fgets($speed);
        fclose($speed);
}
else {
        $content = 'No file to open';
}
echo $content;
?>
</td>
</tr>
</table>


</br>
</br>


<table>
<tr>
<td rowspan="2" class="invisible"></td>
<th align="right" colspan="6">Servos</th>
</tr>
<tr>

<td class="dark">Servo 1</td>
<td class="dark">Servo 1</td>
<td class="dark">Servo 1</td>
<td class="dark">Servo 1</td>


</tr>
<tr>
<td>Position</td>
<td>
<?php
# Servo1 Position
$servo_fn = '/dev/talos/servo1/position';
if (is_readable($servo_fn)) {
        $servo = fopen($servo_fn,"r");
        $content = fgets($servo);
        fclose($servo);
}
else {
        $content = 'No file to open';
}
echo $content;
?>
</td>
<td>
<?php
# Servo2 Position
$servo_fn = '/dev/talos/servo2/position';
if (is_readable($servo_fn)) {
        $servo = fopen($servo_fn,"r");
        $content = fgets($servo);
        fclose($servo);
}
else {
        $content = 'No file to open';
}
echo $content;
?>
</td>
<td>
<?php
# Servo3 Position
$servo_fn = '/dev/talos/servo3/position';
if (is_readable($servo_fn)) {
        $servo = fopen($servo_fn,"r");
        $content = fgets($servo);
        fclose($servo);
}
else {
        $content = 'No file to open';
}
echo $content;
?>
</td>
<td>
<?php
# Servo4 Position
$servo_fn = '/dev/talos/servo4/position';
if (is_readable($servo_fn)) {
        $servo = fopen($servo_fn,"r");
        $content = fgets($servo);
        fclose($servo);
}
else {
        $content = 'No file to open';
}
echo $content;
?>
</td>
</tr>
</table>


</br>
</br>


<table>
<tr>
<th>Buzzer Tone</th>
</tr>
<tr>
<td>
<?php
# Buzzer tone
$buzz_fn = '/dev/talos/buzzer';
if (is_readable($buzz_fn)) {
        $buzz = fopen($buzz_fn,"r");
        $content = fgets($buzz);
        fclose($buzz);
}
else {
        $content = 'No file to open';
}
echo $content.' Hz';
?>
</td>
</tr>
</table>


</br>
</br>


<table>
<tr><th colspan="4">LEDs</th></tr>
<tr>
<td width="25%" class="dark">Red</td>
<td width="25%" class="dark">Green</td>
<td width="25%" class="dark">Blue</td>
<td width="25%" class="dark">Yellow</td>
</tr>
<tr>
<td>
<?php
# LED status
$led_fn = '/dev/talos/led/red';
if (is_readable($led_fn)) {
        $led = fopen($led_fn,"r");
        $content = fgets($led);
        fclose($led);
}
else {
        $content = 'No file to open';
}
echo 'Red LED = '.$content.'<br>';
?>
</td>
<td>
<?php
$led_fn = '/dev/talos/led/green';
if (is_readable($led_fn)) {
        $led = fopen($led_fn,"r");
        $content = fgets($led);
        fclose($led);
}
else {
        $content = 'No file to open';
}
echo 'Green LED = '.$content.'<br>';
?>
</td>
<td>
<?php
$led_fn = '/dev/talos/led/blue';
if (is_readable($led_fn)) {
        $led = fopen($led_fn,"r");
        $content = fgets($led);
        fclose($led);
}
else {
        $content = 'No file to open';
}
echo 'Blue LED = '.$content.'<br>';
?>
</td>
<td>
<?php
$led_fn = '/dev/talos/led/yellow';
if (is_readable($led_fn)) {
        $led = fopen($led_fn,"r");
        $content = fgets($led);
        fclose($led);
}
else {
        $content = 'No file to open';
}
echo 'Yellow LED = '.$content.'<br>';
?>
</td>
</tr>
</table>


</br>
</br>


<table>
<tr>
<th>Talos Version</th>
</tr>
<tr>
<td>
<?php
# Talos version
$ver_fn = '/dev/talos/version';
if (is_readable($ver_fn)) {
        $ver = fopen($ver_fn,"r");
        $content = fgets($ver);
        fclose($ver);
}
else {
        $content = 'No file to open';
}
echo 'Talos software Version = '.$content.'<br>';
?>
</td>
</tr>
</table>
</body>
