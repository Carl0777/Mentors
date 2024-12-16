<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num=3;
    echo $num;

    function myMessage() {
    if ($num>25){
    echo "greater than";}
    else{
    echo "lower than";}
    }
      myMessage();
   ?>

   <form  method="GET" action="myMessage()">
   number: <input type="number" name=""><br>
</form>

</body>
</html>