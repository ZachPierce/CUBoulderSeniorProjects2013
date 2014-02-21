<?php
# Voltage values
$voltage_fn = '/dev/talos/batteryVoltage';
if (is_readable($voltage_fn)) {
	$voltage = fopen($voltage_fn,"r");
	$content = fgets($voltage);
	fclose($voltage);
}
else {
	$content = 'No file to open';
}
echo 'Voltage = '.$content.'V<br>';

echo '<br>';

# Accelerometer values
$acclx_fn = '/dev/talos/accelerometer/x';
$accly_fn = '/dev/talos/accelerometer/y';
$acclz_fn = '/dev/talos/accelerometer/z';
if (is_readable($acclx_fn)) {
	$acclx = fopen($acclx_fn,"r");
	$content = fgets($acclx);
	fclose($acclx);
}
else {
	$content = 'No file to open';
}
echo 'AccelerometerX = '.$content.'<br>';

echo '<br>';

if (is_readable($accly_fn)) {
	$accly = fopen($accly_fn,"r");
	$content = fgets($accly);
	fclose($accly);
}
else {
	$content = 'No file to open';
}
echo 'AccelerometerY = '.$content.'<br>';
echo '<br>';

if (is_readable($acclz_fn)) {
	$acclz = fopen($acclz_fn,"r");
	$content = fgets($acclz);
	fclose($acclz);
}
else {
	$content = 'No file to open';
}
echo 'AccelerometerZ = '.$content.'<br>';
echo '<br><br>';

# MotorA infor
$errCnt_fn = '/dev/talos/motorA/errCount';
$pos_fn = '/dev/talos/motorA/position';
$speed_fn = '/dev/talos/motorA/speed';
if (is_readable($errCnt_fn)) {
	$errCnt = fopen($errCnt_fn,"r");
	$content = fgets($errCnt);
	fclose($errCnt);
}
else {
	$content = 'No file to open';
}
echo 'MotorA ErrCount = '.$content.'<br>';


if (is_readable($pos_fn)) {
	$pos = fopen($pos_fn,"r");
	$content = fgets($pos);
	fclose($pos);
}
else {
	$content = 'No file to open';
}
echo 'MotorA Position = '.$content.'<br>';


if (is_readable($speed_fn)) {
	$speed = fopen($speed_fn,"r");
	$content = fgets($speed);
	fclose($speed);
}
else {
	$content = 'No file to open';
}
echo 'MotorA Speed = '.$content.'<br>';
echo '<br>';

# MotorB infor
$errCnt_fn = '/dev/talos/motorB/errCount';
$pos_fn = '/dev/talos/motorB/position';
$speed_fn = '/dev/talos/motorB/speed';
if (is_readable($errCnt_fn)) {
	$errCnt = fopen($errCnt_fn,"r");
	$content = fgets($errCnt);
	fclose($errCnt);
}
else {
	$content = 'No file to open';
}
echo 'MotorB ErrCount = '.$content.'<br>';


if (is_readable($pos_fn)) {
	$pos = fopen($pos_fn,"r");
	$content = fgets($pos);
	fclose($pos);
}
else {
	$content = 'No file to open';
}
echo 'MotorB Position = '.$content.'<br>';


if (is_readable($speed_fn)) {
	$speed = fopen($speed_fn,"r");
	$content = fgets($speed);
	fclose($speed);
}
else {
	$content = 'No file to open';
}
echo 'MotorB Speed = '.$content.'<br>';
echo '<br>';

# MotorC infor
$errCnt_fn = '/dev/talos/motorC/errCount';
$pos_fn = '/dev/talos/motorC/position';
$speed_fn = '/dev/talos/motorC/speed';
if (is_readable($errCnt_fn)) {
	$errCnt = fopen($errCnt_fn,"r");
	$content = fgets($errCnt);
	fclose($errCnt);
}
else {
	$content = 'No file to open';
}
echo 'MotorC ErrCount = '.$content.'<br>';

if (is_readable($pos_fn)) {
	$pos = fopen($pos_fn,"r");
	$content = fgets($pos);
	fclose($pos);
}
else {
	$content = 'No file to open';
}
echo 'MotorC Position = '.$content.'<br>';

if (is_readable($speed_fn)) {
	$speed = fopen($speed_fn,"r");
	$content = fgets($speed);
	fclose($speed);
}
else {
	$content = 'No file to open';
}
echo 'MotorC Speed = '.$content.'<br>';
echo '<br>';

# MotorD infor
$errCnt_fn = '/dev/talos/motorD/errCount';
$pos_fn = '/dev/talos/motorD/position';
$speed_fn = '/dev/talos/motorD/speed';
if (is_readable($errCnt_fn)) {
	$errCnt = fopen($errCnt_fn,"r");
	$content = fgets($errCnt);
	fclose($errCnt);
}
else {
	$content = 'No file to open';
}
echo 'MotorD ErrCount = '.$content.'<br>';

if (is_readable($pos_fn)) {
	$pos = fopen($pos_fn,"r");
	$content = fgets($pos);
	fclose($pos);
}
else {
	$content = 'No file to open';
}
echo 'MotorD Position = '.$content.'<br>';

if (is_readable($speed_fn)) {
	$speed = fopen($speed_fn,"r");
	$content = fgets($speed);
	fclose($speed);
}
else {
	$content = 'No file to open';
}
echo 'MotorD Speed = '.$content.'<br>';
echo '<br>';

# MotorE infor
$errCnt_fn = '/dev/talos/motorE/errCount';
$pos_fn = '/dev/talos/motorE/position';
$speed_fn = '/dev/talos/motorE/speed';
if (is_readable($errCnt_fn)) {
	$errCnt = fopen($errCnt_fn,"r");
	$content = fgets($errCnt);
	fclose($errCnt);
}
else {
	$content = 'No file to open';
}
echo 'MotorE ErrCount = '.$content.'<br>';

if (is_readable($pos_fn)) {
	$pos = fopen($pos_fn,"r");
	$content = fgets($pos);
	fclose($pos);
}
else {
	$content = 'No file to open';
}
echo 'MotorE Position = '.$content.'<br>';

if (is_readable($speed_fn)) {
	$speed = fopen($speed_fn,"r");
	$content = fgets($speed);
	fclose($speed);
}
else {
	$content = 'No file to open';
}
echo 'MotorE Speed = '.$content.'<br>';
echo '<br>';

# MotorF infor
$errCnt_fn = '/dev/talos/motorF/errCount';
$pos_fn = '/dev/talos/motorF/position';
$speed_fn = '/dev/talos/motorF/speed';
if (is_readable($errCnt_fn)) {
	$errCnt = fopen($errCnt_fn,"r");
	$content = fgets($errCnt);
	fclose($errCnt);
}
else {
	$content = 'No file to open';
}
echo 'MotorF ErrCount = '.$content.'<br>';

if (is_readable($pos_fn)) {
	$pos = fopen($pos_fn,"r");
	$content = fgets($pos);
	fclose($pos);
}
else {
	$content = 'No file to open';
}
echo 'MotorF Position = '.$content.'<br>';

if (is_readable($speed_fn)) {
	$speed = fopen($speed_fn,"r");
	$content = fgets($speed);
	fclose($speed);
}
else {
	$content = 'No file to open';
}
echo 'MotorF Speed = '.$content.'<br>';
echo '<br><br>';

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
echo 'Servo1 Position = '.$content.'<br>';
echo '<br>';

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
echo 'Servo2 Position = '.$content.'<br>';
echo '<br>';

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
echo 'Servo3 Position = '.$content.'<br>';
echo '<br>';

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
echo 'Servo4 Position = '.$content.'<br>';
echo '<br>';

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
echo 'Buzzer tone = '.$content.'<br>';
echo '<br>';

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
echo '<br>';


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
echo '<br>';
?>
