</head> 

<body>



  <form method="GET" class= "center">

    <h3>What number would you like to check?</h3>

    <input type="int" name="info"></input><br><br>

    <input type="submit">

  </form>

  <?php



  $num;

       if($_GET['info'] != NULL){

          $num = $_GET['info'];

        }

  if ($num == 1){

    echo '<div class= "isNotPrime">';

    echo $num;

    echo '<div> This is not a prime number</div></div>';

  }else

  if($num == 2){

    echo '<div class= "isPrime">';

    echo $num;

    echo '<div> This is a prime number</div></div>';

  }else

  if ($num % 2 == 0){

    echo '<div class="isNotPrime">';

    echo $num;

    echo '<div> This is not a prime number</div></div>';

  }else

  if ($num > 2) {

    $rootOfNum = ceil(sqrt($num));

    $p = FALSE;

    for($i = 3; $i <= $rootOfNum; $i++) {

      if($num % $i == 0){

        $p = TRUE;

        }

}

      if($p == TRUE){

        echo '<div class= "isNotPrime">';

        echo $num;

        echo '<div> This is not a prime number</div></div>';

        }else{

echo '<div class= "isPrime">';

        echo $num;

        echo '<div> This is a prime number</div></div>';

     }

  }



  ?>



</body> </html>