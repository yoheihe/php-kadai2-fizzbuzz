<!DOCTYPE html>
<html>

<head>
  <title>FizzBuzz問題</title>
</head>

<body>
  <form method="post" action="">
    <label for="fizzNum">Fizzの値:</label>
    <input type="text" id="fizzNum" name="fizzNum" placeholder="ここに整数値を入力">
    <br><br>
    <label for="buzzNum">Buzzの値:</label>
    <input type="text" id="buzzNum" name="buzzNum" placeholder="ここに整数値を入力">
    <br><br>
    <input type="submit" name="submit" value="実行">
  </form>
  <h2>出力</h2>

  <?php
  $fizzNum = $_POST['fizzNum'];
  $buzzNum = $_POST['buzzNum'];
  if (isset($_POST['submit'])) {


    if (empty($fizzNum) || empty($buzzNum)) {
      echo "<p>整数値を入力してください</p>";
    } elseif (!ctype_digit($fizzNum) || !ctype_digit($buzzNum)) {
      echo "<p>整数値を入力してください</p>";
    } else {
      $fizzNum = (int)$fizzNum;
      $buzzNum = (int)$buzzNum;

      for ($i = 1; $i < 100; $i++) {
        $output = "";
        if ($i % $fizzNum == 0) {
          $output .= "fizz";
        }
        if ($i % $buzzNum == 0) {
          $output .= "buzz";
        }
        if ($output != "") {
          echo "<p>$i: $output</p>";
        }
      }
    }
  }
  ?>
</body>

</html>