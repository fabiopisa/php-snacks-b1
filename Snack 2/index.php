<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 2</title>
</head>
<body>
  <!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->
  <?php
  //creo una funzione dando i parametri minimo massimo e limite
  function getArrNumRandom($min, $max, $limit){
    //creo un variabile array vuoto
    $newArr =[];
    //inizio a ciclare con while perchè deve andare avanti finchè non is riempie l'array 
    while(count($newArr) < $limit){
      //variabile del numero random generato sempre tra min e max
      $number = rand($min, $max);
      //mi assicuro che non vengano pushati numeri uguali con un if dicendo che se in numero non è contenuto nell'array lo pusho
      if(!in_array($number, $newArr)){
        $newArr[] = $number;
      };
    };
    // quandoa  finito chiedo il return dell'array generato
    return $newArr;
  };

  //richiamo la funzione con var_dump per stamapre direttamente l'array
  var_dump(getArrNumRandom(1,100,15));
  ?>
</body>
</html>