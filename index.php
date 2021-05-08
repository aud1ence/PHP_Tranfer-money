
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Convert Money</title>
</head>
<body>
<h2>Convert Money</h2>
<form method="post">
  <input type="text" name="input">
  <input type="submit" value="Convert">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $input = $_POST['input'];
}

function convert($usd) {
    return $rate = $usd * 23000;
}
$n = convert($input);
echo "Gia tri la: " .number_format($n, 2, ',', ' '). " VND";

?>
</body>
</html>
