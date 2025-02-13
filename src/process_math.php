<?php
$number1 = $_POST['number1'];
$number2 = $_POST['number2'];
$operation = $_POST['operation'];

$output = [];
$result = 0;
exec("python3 math_operations.py $number1 $number2 $operation", $output, $result);

if($result !== 0) {
  $error_msg = implode('<br>', $output);
  echo "<h1 style='color: red'>$error_msg</h1>";
  echo "<a href='/math_form.php'>Back to form</a>";
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Midterm Process | IST105</title>
  </head>
  <body>
    <h1>Result:</h1>
    <ul>
      <li>Operation: <?= $operation ?></li>
      <li>Number1: <?= $number1 ?></li>
      <li>Number2: <?= $number2 ?></li>
      <li>Result: <?= $output[0] ?></li>
    </ul>
    <p>This result was processed on my EC2 instance with Public IP: </p>
    <p>Access the application via Load Balancer URL: http://xxxx/math_form.php</p>
    <a href='/math_form.php'>Back to form</a>
  </body>
</html>
