<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $string = "String-Variable";
    $float = 27.5;
    $ineger = 55;
    $boolean = false;
    #https://www.youtube.com/watch?v=OK_JCtrrv-c
    #strings
    echo strtoupper($string);
    echo "<br>";
    echo strlen($string);
    echo "<br>";
    echo $string[0];
    echo "<br>";
    echo substr($string, -1);
    echo "<br>";
    echo str_replace("String", "New", $string);
    echo "<br>";
    echo substr($string, -8);
    #numbers
    $num = 10;
    echo "<br>";
    echo 40 * 2;
    echo "<br>";
    echo 40 % 4;
    echo "<br>";
    $num ++;
    echo $num;
    echo "<br>";
    $num --;
    echo $num;
    echo "<br>";
    #absolute value
    echo abs(-198);
    echo "<br>";
    # taking something to the pow
    echo pow(2, 4);
    echo "<br>";
    echo sqrt(144);
    echo "<br>";
    echo max(54, 34);
    echo "<br>";
    echo min(2, 52);
    echo "<br>";
    echo round(54.697);
    echo "<br>";
    echo ceil(12.00659);
    echo "<br>";
    echo floor(5.9);
    echo "<br>";
    # user input

    echo "<br>";
    echo "<br>";
     ?>
    <form action="firstfile.php" method="get">
      Name:<input type="text" name="User-name">
      <br>
      Age:<input type="text" name="User-age">
      <br>
      <input type="submit">
    </form>
    Your name is: <?php echo  $_GET["User-name"]; ?>
    <br>
    Your Age is: <?php echo  $_GET["User-age"]; ?>
    <br>
    <br>
    <br>

    <!  calculator >

    <form action="firstfile.php" method="get">
      <input type="number" name="number1">
      <br>
      <input type="number" name="number2">
      <br>

      <input type="submit">
    </form>
    <br>
    <br>

    Answer: <?php echo $_GET["number1"] + $_GET["number2"]?>


  </body>
</html>
