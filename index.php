<html>
<head>
  <link rel="stylesheet" href="/style.css" type="text/css">
  <title>Prime Number Validator</title>
</head>
<body>

  <form method="POST">
    What number would you like to check <br>
    <input type="int" name="info" value="Enter number"></input>
    <input type="submit">
  </form>

  <?php
  $num = 0
  $num = $_GET['info']
  echo $num;

  if ($num == 1){
    echo '<p class= "isNotPrime">'
    echo $num
    echo '</p>'
  }
  if($num == 2){
    echo '<p class= "isPrime">'
    echo $num
    echo '</p>'
  }
  if ($num % 2 == 0){
    echo '<p class= "isNotPrime">'
    echo $num
    echo '</p>'
  }
  if ($num > 2) {
    $rootOfNum = ceil(sqrt($num));
    for($i = 3; $i <= $ceil; $i = $i++) {
      if($num % $i == 0){
        //return false
        echo '<p class= "isNotPrime">'
        echo $num
        echo '</p>'
        break;
      }
    }
  }

  ?>

</body>
</html>
