<!DOCTYPE html>
<html lang="en">
  <s>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      body{
        display: grid;
        place-items: center;
        height: 100vh;
        margin: 0;
        font-family: sans-serif;
      }
      
    </style>
  </head>
  <body>
    
      <?php 
          // php output*
          // echo "Hello, World" . "<br>";
          // echo "Hello" . " " . "Mars" . "<br>";

          //php varaibles*
          // $greeting = "Hi";

          //php if else*
          // // if we have to nest multiple things in echo then we use double quotes, signle quotes does not work here.
          // echo "$greeting john <br>";
          // $name = "Dark Matter";
          // $read = false;
          // if($read){
          //   $message = "You have read $name ";
          // } else {
          //   $message =  "You have not read anything <br>";
          // }

          //php arrays*
          $books = ['book1', 'book2', 'book3'];
          ?>
    <ul>
      <?php 
      // foreach($books as $book){
      //   echo '<li>'.$book.'</li>';
      // }
      foreach ($books as $book) 
      ?>
    </ul>
  </body>
</html>
