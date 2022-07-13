<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<p class="text-center h1"> Exercise 1</p>
<?php
    echo "<h3>For loop</h3>";
    for($i=1; $i<=50; $i++ ){
        echo " $i Peter ";
    }
    echo "<hr>";

    echo "<h3>While loop</h3>";
    $j=0;
    while($j<50){
        $j++;
        echo "$j Peter ";
        
    }
    echo "<hr>";

    echo "<h3>do while loop</h3>";
    $z=0;
    do{ 
        $z++;
        echo "$z Peter ";
    }while( $z<50);
?>
<hr>
<p class="text-center h1">Exercise 2</p>

<?php
    $ex2array = ["Element 1", "Element 2", "Element 3", "Element 4", "Element 5", "Element 6","Element 7" , "Element 8", "Element 9" ,"Element 10"];

    echo "<h3>for-each</h3>";
    foreach($ex2array as $element){
        echo "Value is $element <br>";
    }

?>
<hr>

<p class="text-center h1">Exercise 3</p>
<?php
    $ex3array =[];

    for($i=0; $i<10; $i++){
        $randomNr = rand(1,9001);
        $ex3array[$i] =$randomNr;
    }
    echo "<pre>";
    var_dump($ex3array);
    echo "</pre>";
    function ex3func($param){
        echo "<div class='text-center'><span class='border border-3 border-success'>";
        echo max($param);
        echo "</span></div>";
    };
    ex3func($ex3array);

?>
<hr>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>