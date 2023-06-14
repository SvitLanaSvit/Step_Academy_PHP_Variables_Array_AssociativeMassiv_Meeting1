<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ul{
            list-style-type: none;
        }
    </style>
</head>
<body>
    <div>You can see PHP script executin result below</div>
    <?
    $arr2 = array("Apple", "Cherry", "Strawberry", "Pear");
    echo "<ul>";
    for($i=0; $i < count($arr2); $i++){
        echo "<li>$arr2[$i]</li>";
    }
    echo "</ul>";
    ?>
    <div>Below you can see associative array simple</div>
    <?
    $fruits=array("apple"=>"green", "orange"=>"orange", "plum"=>"purple", "cherry"=>"red");
    //echo $fruits["plum"];
    echo "<ul>";
    foreach($fruits as $fruit=>$color){
        echo "<li style='color:".$color."'>$fruit</li>";      
    }
    echo "</ul>";
    ?>
</body>
</html>