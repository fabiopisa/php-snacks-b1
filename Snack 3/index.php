<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 3</title>
</head>
<body>
  <!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

  <?php
  $paragraph = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet aperiam dignissimos sapiente placeat ipsam expedita iste exercitationem consequuntur iure repellendus, nulla sunt ullam explicabo cum reprehenderit voluptas, ad eligendi aut qui corporis culpa veritatis! Ad corrupti maiores esse voluptatibus dignissimos?";

   
  ?>
   
   <h3>New Paragraphs: <?php var_dump(explode("," , $paragraph)) ?> </h3>
  
</body>
</html>